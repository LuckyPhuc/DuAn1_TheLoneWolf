<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Suppliers;
use App\Models\User;
use App\Models\Posts;

class RegisterController extends Controller
{
    function index()
    {
        $categories = Categories::all();
        $suppliers = Suppliers::all();
        $posts = Posts::all();
        return view('users.Register', compact('categories', 'suppliers', 'posts'));
    }
    function register(Request $request)
    {
        $request->validate(
            [
                "name" => "required",
                "email" => "required|unique:users,email",
                "password" => "required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/",
                "phone" => "required|numeric",
                "address" => "required",
            ],
            [
                'required' => ':attribute không được để trống',
                'min' => ':attribute không ít hơn :min',
                'unique' => ':attribute đã tồn tại',
                'numeric' => ':attribute phải là số',
            ],
            [
                'name' => 'Tên người dùng',
                'email' => 'Email',
                'password' => 'Mật khẩu',
                'phone' => 'số điện thoại',
                'address' => 'Địa chỉ'
            ]
        );
        $input = $request->all();
        $input['role'] = 0;
        $users = User::create($input);
        $categories = Categories::all();
        $suppliers = Suppliers::all();
        return view('users.Register')->with('success', 'Thêm mới thành công!')->with(compact('suppliers', 'categories', 'users'));
    }
}
