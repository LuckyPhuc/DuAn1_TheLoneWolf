<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use App\Models\Suppliers;
use App\Models\Categories;
use App\Models\Posts;
use App\Models\Products;
use App\Models\Order_details;
use App\Models\Orders;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        $suppliers = Suppliers::all();
        $categories = Categories::all();
        $posts = Posts::all();
        $products = Products::all();
        $user_id = auth()->id();
        $cart = Order_details::whereHas('order', function ($query) use ($user_id) {
            $query->where('users_id', $user_id);
        })
            ->with(['order.order_details', 'product.image_features'])
            ->get();

        $groupedCart = $cart->groupBy('product.id');
        $order_detail = Order_details::all();
        $order = Orders::all();
        return view('profile', compact('suppliers', 'categories', 'products', 'posts', 'groupedCart', 'order_detail', 'order'));
    }
}
