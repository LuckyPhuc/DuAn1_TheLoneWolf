<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Suppliers;

class HomeController extends Controller
{
    function index()
    {
        $categories = Categories::all();
        $suppliers = Suppliers::all();
        return view('users.index', compact('categories', 'suppliers'));
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
