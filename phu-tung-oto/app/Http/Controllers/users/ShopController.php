<?php

namespace App\Http\Controllers\users;

use App\Models\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\image_features;
use App\Models\Posts;
use App\Models\Products;
use App\Models\Suppliers;

class ShopController extends Controller
{
    function index()
    {
        $categories = Categories::all();
        $suppliers = Suppliers::all();
        $products = Products::with(['category', 'image_features' => function ($query) {
            $query->where('number', 0);
        }])->paginate(6);
        $posts = Posts::all();
        return view('users.shop', compact('categories', 'suppliers', 'products', 'posts'));
    }
    function show($id)
    {
        $categories = Categories::all();
        $suppliers = Suppliers::all();
        $products = Products::with(['category', 'image_features'])->find($id);
        $product = Products::with(['category', 'supplier', 'image_features' => function ($query) {
            $query->where('number', 0);
        }])->get();
        $posts = Posts::all();
        return view('users.detail', compact('categories', 'suppliers', 'products', 'product', 'posts'));
    }
    public function showProductsByCategory(Categories $category)
    {
        $categories = Categories::all();
        $suppliers = Suppliers::all();
        $products = Products::where('category_id', $category->id)->with(['category', 'image_features'])->paginate(6);
        $posts = Posts::all();

        return view('users.shop', compact('categories', 'suppliers', 'products', 'category', 'posts'));
    }
}
