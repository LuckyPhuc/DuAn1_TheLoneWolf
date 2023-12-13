<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Suppliers;
use App\Models\image_features;
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
        // dd($products);
        return view('users.index', compact('categories', 'suppliers', 'products'));
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