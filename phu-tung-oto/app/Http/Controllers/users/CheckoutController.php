<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Suppliers;
use App\Models\Posts;

class CheckoutController extends Controller
{
    function index()
    {
        $posts = Posts::all();
        $categories = Categories::all();
        $suppliers = Suppliers::all();
        return view('users.checkout', compact('categories', 'suppliers', 'posts'));
    }
}
