<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Suppliers;
use App\Models\Posts;
use App\Models\User;

class postController extends Controller
{
    function Posts()
    {
        $categories = Categories::all();
        $suppliers = Suppliers::all();
        $posts = Posts::all();
        $posts = Posts::paginate(3);
        return view('users/blog', compact('categories', 'suppliers', 'posts'));
    }
    function ShowPosts($id)
    {
        $categories = Categories::all();
        $suppliers = Suppliers::all();
        $posts = Posts::find($id);
        return view('users.detaiposts', compact('categories', 'suppliers', 'posts'));
    }
}
