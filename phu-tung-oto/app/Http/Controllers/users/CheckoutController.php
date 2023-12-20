<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Suppliers;
use App\Models\Posts;
use App\Models\Products;
use App\Models\image_features;
use App\Models\Orders;
use App\Models\Order_details;

class CheckoutController extends Controller
{
    function index()
    {
        $posts = Posts::all();
        $categories = Categories::all();
        $suppliers = Suppliers::all();
        $user_id = auth()->id();
        $cart = Order_details::whereHas('order', function ($query) use ($user_id) {
            $query->where('users_id', $user_id);
        })
            ->with(['order.order_details', 'product.image_features'])
            ->get();

        $groupedCart = $cart->groupBy('product.id');
        $order_detail = Order_details::all();
        $order = Orders::all();
        return view('users.checkout', compact('categories', 'suppliers', 'posts', 'order', 'order_detail', 'groupedCart'));
    }
    public function order_id(Request $request, $id)
    {
        $posts = Posts::all();
        $categories = Categories::all();
        $suppliers = Suppliers::all();
        $order = Orders::find($id);
        $request->session()->put('checkout_order_id', $id);
        $user_id = auth()->id();
        $cart = Order_details::whereHas('order', function ($query) use ($user_id) {
            $query->where('users_id', $user_id);
        })
            ->with(['order.order_details', 'product.image_features'])
            ->get();

        $groupedCart = $cart->groupBy('product.id');
        $order_detail = Order_details::all();
        $order = Orders::all();
        return view('users.checkout', compact('order', 'categories', 'suppliers', 'posts', 'order', 'order_detail', 'groupedCart'));
        // return redirect()->route('checkout.list')->with('order', $order);
    }
    // Trong phương thức checkout
    public function checkout(Request $request)
    {
        $id = $request->session()->get('checkout_order_id');
        $order = Orders::find($id);

        if (!$order) {
            return redirect()->route('checkout.list')->with('error', 'Đơn hàng không tồn tại');
        }

        $request->validate([
            'address' => 'required',
            'sdt' => 'required|min:10|max:12',
            'description' => 'required',
        ], [
            'required' => ':attribute không được để trống',
            'min' => 'SĐT phải có ít nhất :min ký tự',
            'max' => 'SĐT phải có nhiều nhất :max ký tự',
        ], [
            'address' => 'Địa chỉ',
            'sdt' => 'SĐT',
            'description' => 'Mô tả',
        ]);

        $orderDetail = $order->order_details;

        if ($orderDetail->isNotEmpty()) {
            foreach ($orderDetail as $detail) {
                $detail->update([
                    'address' => $request->address,
                    'sdt' => $request->sdt,
                    'description' => $request->description,
                ]);
                // Giảm đi số lượng trong bảng products
                $product = $detail->product;
                $newQuantity = $product->quantity - $detail->quantity;

                // Đảm bảo số lượng không âm
                $newQuantity = max($newQuantity, 0);
                // kiểm tra sản phẩm còn hamgf hay ko
                if ($newQuantity < 0) {
                    return redirect()->route('checkout.list')->with('error', 'Sản phẩm ' . $product->name . ' đã hết hàng.');
                }
                $product->update(['quantity' => $newQuantity]);
            }
            $paymentMethod = $request->input('radio');
            // Update the status column in the orders table
            if ($paymentMethod == 'cod') {
                $order->update(['status' => 'Thanh toán khi nhận hàng']);
            } elseif ($paymentMethod == 'online') {
                $order->update(['status' => 'Thanh toán online']);
            }

            return redirect()->route('checkout.list')->with('success', 'Cập nhật thành công');
        }

        return redirect()->route('checkout.list')->with('error', 'Không có chi tiết đơn hàng');
    }
}
