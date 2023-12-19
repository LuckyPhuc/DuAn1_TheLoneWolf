<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Suppliers;
use App\Models\image_features;
use App\Models\Orders;
use App\Models\Order_details;
use App\Models\Posts;
use App\Models\Products;
use App\Models\User;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function render(): View
    {
        $categories = Categories::all();
        $suppliers = Suppliers::all();
        $user_id = auth()->id();
        $cart = Order_details::whereHas('order', function ($query) use ($user_id) {
            $query->where('users_id', $user_id);
        })
            ->with(['order.order_details', 'product.image_features'])
            ->get();

        $groupedCart = $cart->groupBy('product.id');
        $products = Products::all();
        $order_detail = Order_details::all();
        $order = Orders::all();
        $posts = Posts::all();

        return view(
            'layouts.app',
            compact('categories', 'suppliers', 'groupedCart', 'products', 'order_detail', 'order', 'posts')
        );
    }
    function index()
    {
        $categories = Categories::all();
        $suppliers = Suppliers::all();
        $products = Products::with(['category', 'supplier', 'image_features' => function ($query) {
            $query->where('number', 0);
        }])->get();
        $posts = Posts::with(['users'])->get();
        $user_id = auth()->id();
        $cart = Order_details::whereHas('order', function ($query) use ($user_id) {
            $query->where('users_id', $user_id);
        })
            ->with(['order.order_details', 'product.image_features'])
            ->get();

        $groupedCart = $cart->groupBy('product.id');
        $order_detail = Order_details::all();
        $order = Orders::all();
        return view('users.index', compact('categories', 'suppliers', 'products', 'posts', 'groupedCart', 'order_detail', 'order'));
    }
    // ShopController.php
    public function showProductsByCategory($category)
    {
        $categories = Categories::all();
        $selectedCategory = Categories::where('name', $category)->first();
        if (!$selectedCategory) {
            abort(404);
        }

        $products = Products::whereHas('category', function ($query) use ($selectedCategory) {
            $query->where('id', $selectedCategory->id);
        })
            ->with(['category', 'image_features' => function ($query) {
                $query->where('number', 0);
            }])
            ->paginate(6);

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
        return view('users.shop', compact('categories', 'suppliers', 'products', 'selectedCategory', 'groupedCart', 'order_detail', 'order'));
    }

    public function showProductsBySupplier($supplier)
    {
        $suppliers = Suppliers::all();
        $selectedSupplier = Suppliers::where('name', $supplier)->first();
        // Kiểm tra nếu nhà cung cấp không tồn tại
        if (!$selectedSupplier) {
            abort(404);
        }
        $products = Products::whereHas('supplier', function ($query) use ($selectedSupplier) {
            $query->where('id', $selectedSupplier->id);
        })

            ->with(['supplier', 'image_features' => function ($query) {
                $query->where('number', 0);
            }])
            ->paginate(6);
        $categories = Categories::all();
        $user_id = auth()->id();
        $cart = Order_details::whereHas('order', function ($query) use ($user_id) {
            $query->where('users_id', $user_id);
        })
            ->with(['order.order_details', 'product.image_features'])
            ->get();

        $groupedCart = $cart->groupBy('product.id');
        $order_detail = Order_details::all();
        $order = Orders::all();
        return view('users.shop', compact('categories', 'suppliers', 'products', 'selectedSupplier', 'groupedCart', 'order_detail', 'order'));
    }
}
