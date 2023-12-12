<?php

namespace App\Http\Controllers\users;

use App\Models\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    function index()
    {
        $categories = Categories::all();
        return view('users.shop', compact('categories'));
    }
    function show($id)
    {
        return view('users.detail');
    }
}
