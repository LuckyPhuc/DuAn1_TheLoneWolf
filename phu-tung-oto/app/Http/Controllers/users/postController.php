<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Suppliers;
use App\Models\Posts;
use App\Models\User;
use App\Models\Orders;
use App\Models\Order_details;

class postController extends Controller
{
    function Posts()
    {
        $categories = Categories::all();
        $suppliers = Suppliers::all();
        $posts = Posts::all();
        $posts = Posts::paginate(3);
        $user_id = auth()->id();
        $cart = Order_details::whereHas('order', function ($query) use ($user_id) {
            $query->where('users_id', $user_id);
        })
            ->with(['order.order_details', 'product.image_features'])
            ->get();

        $groupedCart = $cart->groupBy('product.id');
        $order_detail = Order_details::all();
        $order = Orders::all();
        return view('users.blog', compact('categories', 'suppliers', 'posts', 'order', 'order_detail', 'groupedCart'));
    }
    function ShowPosts($id)
    {
        $categories = Categories::all();
        $suppliers = Suppliers::all();
        $posts = Posts::find($id);
        $user_id = auth()->id();
        $cart = Order_details::whereHas('order', function ($query) use ($user_id) {
            $query->where('users_id', $user_id);
        })
            ->with(['order.order_details', 'product.image_features'])
            ->get();

        $groupedCart = $cart->groupBy('product.id');
        $order_detail = Order_details::all();
        $order = Orders::all();
        return view('users.detaiposts', compact('categories', 'suppliers', 'posts', 'order', 'order_detail', 'groupedCart'));
    }
}
