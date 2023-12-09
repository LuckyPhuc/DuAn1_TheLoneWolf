<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view('users.index');
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
