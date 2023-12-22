<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\image_features;
use App\Models\Orders;
use App\Models\Order_details;
use App\Models\User;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $cart = Order_details::whereHas('order')
            ->with(['order.order_details', 'product.image_features', 'order.users'])
            ->get();

        $groupedCart = $cart->groupBy('product.id');
        $users = User::all();
        $order_detail = Order_details::all();
        $orders = Orders::all();

        return view("admin.orders.index", compact("cart", "groupedCart", "orders", "order_detail", "users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $orderDetail = Order_details::find($id);

        if (!$orderDetail) {
            return response()->json(['message' => 'Item not found'], 404);
        }

        $orderId = $orderDetail->order_id; // Giả sử cột lưu order_id là order_id, hãy thay đổi nếu tên cột khác

        $orderDetail->delete();

        // Kiểm tra xem có orderDetail nào khác thuộc cùng một order không trước khi xóa order
        $otherOrderDetails = Order_details::where('order_id', $orderId)->exists();

        if (!$otherOrderDetails) {
            $order = Orders::find($orderId);
            if ($order) {
                $order->delete();
            }
        }

        session()->flash('success', 'Xóa thành công');
        return redirect()->route('admin.orders.list');
    }
}
