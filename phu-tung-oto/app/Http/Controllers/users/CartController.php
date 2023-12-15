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
        return view("users.cart");
    }
    function addToCart($id, $quantity)
    {
        $categories = Categories::all();
        $suppliers = Suppliers::all();
        $products = Products::with(
            ['category', 'image_features']
        )->findOrFail($id);
        // $cartItem = Order_details::where('product_id', $id)->first();
        return view('users.cart', compact('categories', 'suppliers', 'products', 'subtotal'));
    }
}
