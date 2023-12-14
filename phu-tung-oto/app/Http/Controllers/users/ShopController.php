<?php

namespace App\Http\Controllers\users;

use App\Models\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\image_features;
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
        }])->paginate(5);
        return view('users.shop', compact('categories', 'suppliers', 'products',));
    }
    function show($id)
    {
        return view('users.detail');
    }
}
