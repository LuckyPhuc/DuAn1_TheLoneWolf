<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\image_features;
use App\Models\Categories;
use App\Models\Suppliers;
use App\Models\User;
use App\Models\Orders;

class DashbardController extends Controller
{
    function index()
    {
        $products = Products::with('image_features')->orderBy('created_at', 'desc')->get();
        $suppliersCount = Suppliers::distinct('name')->count();
        $users = User::distinct('name')->count();
        $order = Orders::distinct('id')->count();
        return view('admin.dashboard', compact('products', 'suppliersCount', 'users', 'order'));
    }
}
