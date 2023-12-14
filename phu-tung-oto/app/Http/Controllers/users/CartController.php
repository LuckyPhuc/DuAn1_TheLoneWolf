<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Suppliers;

class CartController extends Controller
{
    function index()
    {
        $categories = Categories::all();
        $suppliers = Suppliers::all();
        return view('users/cart', compact('categories', 'suppliers'));
    }
    // function addToCart()
    // {
    //     return 'hihi';
    // }
}