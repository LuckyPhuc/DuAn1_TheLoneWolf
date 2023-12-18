<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Suppliers;
use App\Models\Products;
use App\Models\image_features;
use App\Models\Orders;
use App\Models\Order_details;
use App\Models\Posts;


class CartController extends Controller
{
    function index()
    {
        $categories = Categories::all();
        $suppliers = Suppliers::all();

        return view('users/cart', compact('categories', 'suppliers'));
    }
    function cart()
    {
        $categories = Categories::all();
        $suppliers = Suppliers::all();
        $cart = Order_details::with(['order.order_details', 'product.image_features'])->get();
        // dd($cart);
        $groupedCart = $cart->groupBy('product.id');
        $products = Products::all();
        $order_detail = Order_details::all();
        $order = Orders::all();
        $posts = Posts::all();

        return view("users.cart", compact('categories', 'suppliers', 'groupedCart', 'products', 'order_detail', 'order', 'posts'));
    }

    public function addCart($productId, $quantity)
    {
        $product = Products::findOrFail($productId);
        if (!$product) {
            abort(404, 'Không tìm thấy sản phẩm');
        }
        // // Kiểm tra xem có đủ số lượng không
        // if ($product->quantity < $quantity) {
        //     return redirect()->route('cart.list')->with('error', 'Số lượng không đủ.');
        // }
        $order = Orders::firstOrCreate([
            'users_id' => auth()->id(),
            'status' => 'open',
        ], [
            'order_date' => now(),
            'total' => 0,
        ]);

        $orderDetail = new Order_details([
            'product_id' => $product->id,
            'quantity' => $quantity,
            'price' => $product->price,
        ]);

        $order->order_details()->save($orderDetail);
        // dd($product->quantity);
        // Cập nhật số lượng sản phẩm san mua voi san pham ton kho
        // $product->decrement('quantity', $quantity);
        // dd($product);

        // Cập nhật tổng giá trị đơn hàng
        $order->update([
            'total' => $order->order_details()->sum('price'),
        ]);

        return redirect()->route('cart.list')->with('success', 'Thêm sản phẩm thành công');
    }

    public function deleteCartItem($orderDetailId)
    {
        $orderDetail = Order_details::find($orderDetailId);
        if (!$orderDetail) {
            return response()->json(['message' => 'Item not found'], 404);
        }
        $orderDetail->delete($orderDetailId);
        session()->flash('success', 'Xóa thành công');
        return redirect()->route('cart.list');
    }
    public function updateCartItem(Request $request)
    {
        $request->validate([
            'updatedQuantities' => 'required|array',
            'updatedQuantities.*.productId' => 'required|exists:products,id',
            'updatedQuantities.*.quantity' => 'required|integer|min:0',
        ]);
        foreach ($request->input('updatedQuantities') as $updatedQuantity) {
            $productId = $updatedQuantity['productId'];
            $quantity = $updatedQuantity['quantity'];
            $orderDetail = Order_details::where('product_id', $productId)->first();
            if ($orderDetail) {
                $orderDetail->update(['quantity' => $quantity]);
            }
        }
        $orderId = $orderDetail->order_id;
        $order = Orders::find($orderId);
        if ($order) {
            $order->update(['total' => $order->order_details()->sum('price')]);
        }
        return response()->json(['success' => 'Cập nhật giỏ hàng thành công']);
    }
}
