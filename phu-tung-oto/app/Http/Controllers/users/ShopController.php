<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    function index()
    {
        return view('users.shop');
    }
    function show($id){
        return view('users.detail');
    }
}