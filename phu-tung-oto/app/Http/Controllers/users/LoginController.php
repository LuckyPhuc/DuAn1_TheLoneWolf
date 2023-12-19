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
use App\Models\Orders;
use App\Models\Order_details;

class LoginController extends Controller
{
    function index()
    {
        $categories = Categories::all();
        $suppliers = Suppliers::all();
        $posts = Posts::all();
        $user_id = auth()->id();
        $cart = Order_details::whereHas('order', function ($query) use ($user_id) {
            $query->where('users_id', $user_id);
        })
            ->with(['order.order_details', 'product.image_features'])
            ->get();

        $groupedCart = $cart->groupBy('product.id');
        $order_detail = Order_details::all();
        $order = Orders::all();
        return view('users.login', compact('categories', 'suppliers', 'posts', 'groupedCart', 'order_detail', 'order'));
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
