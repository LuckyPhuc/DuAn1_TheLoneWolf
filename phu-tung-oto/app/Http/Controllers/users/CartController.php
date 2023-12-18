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
            abort(404, 'Product not found');
        }
        $order = Orders::firstOrCreate([
            'users_id' => auth()->id(),
            // 'users_id' => 1,
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
        $order->update([
            'total' => $order->order_details()->sum('price'),
        ]);
        return redirect()->route('user.cart')->with('success', 'add sản phẩm thành công');
    }
    public function deleteCartItem($orderDetailId)
    {
        $orderDetail = Order_details::find($orderDetailId);
        if (!$orderDetail) {
            return response()->json(['message' => 'Item not found'], 404);
        }
        $orderDetail->delete();
        session()->flash('success', 'Xóa thành công');
        return redirect()->route('user.cart');
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
