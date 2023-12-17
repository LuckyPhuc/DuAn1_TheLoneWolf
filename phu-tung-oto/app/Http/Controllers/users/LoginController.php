<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Suppliers;
use App\Models\User;
use App\Models\image_features;
use App\Models\Posts;
use App\Models\Products;

class LoginController extends Controller
{
    function index()
    {
        $categories = Categories::all();
        $suppliers = Suppliers::all();
        $posts = Posts::all();
        return view('users.login', compact('categories', 'suppliers', 'posts'));
    }
    public function login(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ],
            [
                'required' => ':attribute không được để trống',
                'email' => ':attribute phải đúng định dạng'
            ],
            [
                'email' => 'Email',
                'password' => 'Mật khẩu'
            ]
        );
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            $user = auth()->user();

            if ($user->role == 0) {
                return redirect()->route('user.index', ['user' => $user->id]);
            } elseif ($user->role == 1) {
                return redirect()->route('admin.dashboard');
            }
        } else {
            return view('users.login')->with('error', 'Thông tin đăng nhập không đúng');
        }
        $categories = Categories::all();
        $suppliers = Suppliers::all();
        return view('users.login', compact('categories', 'suppliers'));
    }
}
