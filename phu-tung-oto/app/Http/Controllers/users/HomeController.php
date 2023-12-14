<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Suppliers;
use App\Models\image_features;
use App\Models\Posts;
use App\Models\Products;

class HomeController extends Controller
{
    function index()
    {
        $categories = Categories::all();
        $suppliers = Suppliers::all();
        $products = Products::with(['category', 'supplier', 'image_features' => function ($query) {
            $query->where('number', 0);
        }])->get();
        $posts = Posts::all();
        // dd($products);
        return view('users.index', compact('categories', 'suppliers', 'products', 'posts'));
    }
    function login()
    {
        return view('users.login');
    }
    function register()
    {
        return view('users.Register');
    }
}
