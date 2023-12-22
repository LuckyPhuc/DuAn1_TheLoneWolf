<?php

namespace App\Http\Controllers;

use App\Mail\Mail_demo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Products;
use App\Models\image_features;
use App\Models\Orders;
use App\Models\Order_details;
use App\Models\User;

class MailController extends Controller
{
    function sendmail()
    {
        $user_id = auth()->id();
        $cart = Order_details::whereHas('order', function ($query) use ($user_id) {
            $query->where('users_id', $user_id);
        })
            // $cart = Order_details::whereHas('order')
            ->with(['order.order_details', 'product.image_features'])
            ->get();

        $groupedCart = $cart->groupBy('product.id');
        $order_detail = Order_details::all();
        $order = Orders::all();
        $users = User::all();
        if ($groupedCart->isNotEmpty()) {

            $firstProduct = $groupedCart->first();
            $orderDetail = $firstProduct->first();
        }
        Mail::to($orderDetail->order->users->email)->send(new Mail_demo());
    }
    function show()
    {
        $user_id = auth()->id();
        $cart = Order_details::whereHas('order', function ($query) use ($user_id) {
            $query->where('users_id', $user_id);
        })
            // $cart = Order_details::whereHas('order')
            ->with(['order.order_details', 'product.image_features'])
            ->get();

        $groupedCart = $cart->groupBy('product.id');
        $order_detail = Order_details::all();
        $order = Orders::all();
        $users = User::all();
        return view('mails.invoice', compact("cart", "groupedCart", "order", "order_detail", "users"));
    }
}
