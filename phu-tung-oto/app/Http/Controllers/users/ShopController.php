<?php

namespace App\Http\Controllers\users;

use App\Models\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\image_features;
use App\Models\Posts;
use App\Models\Products;
use App\Models\Suppliers;
use App\Models\Orders;
use App\Models\Order_details;

class ShopController extends Controller
{
    function index()
    {
        $categories = Categories::all();
        $suppliers = Suppliers::all();
        $products = Products::with(['category', 'image_features' => function ($query) {
            $query->where('number', 0);
        }])->paginate(6);
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
        return view('users.shop', compact('categories', 'suppliers', 'products', 'posts', 'groupedCart', 'order_detail', 'order'));
    }
    function show($id)
    {
        $categories = Categories::all();
        $suppliers = Suppliers::all();
        $products = Products::with(['category', 'image_features'])->find($id);
        $product = Products::with(['category', 'supplier', 'image_features' => function ($query) {
            $query->where('number', 0);
        }])->get();
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
        return view('users.detail', compact('categories', 'suppliers', 'products', 'product', 'posts', 'order', 'order_detail', 'groupedCart'));
    }
    public function showProductsByCategory(Categories $category)
    {
        $categories = Categories::all();
        $suppliers = Suppliers::all();
        $products = Products::where('category_id', $category->id)->with(['category', 'image_features'])->paginate(6);

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

        return view('users.shop', compact('categories', 'suppliers', 'products', 'category', 'posts', 'order', 'order_detail', 'groupedCart'));
    }
    public function showsuppliers(Suppliers $supplier)
    {
        $categories = Categories::all();
        // $suppliers = Suppliers::all();
        // Consider renaming $supplier to $suppliers for clarity
        $products = Products::where(
            ['supplier_id' => $supplier->id]
        )->with(['supplier', 'image_features'])
            ->paginate(6);
        // dd($products);
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

        return view('users.shop', compact('categories', 'suppliers', 'products', 'posts', 'order', 'order_detail', 'groupedCart'));
    }
    public function locProducts(Request $request)
    {
        $luaChonSapXep = $request->input('sorting_option');

        // Sắp xếp mặc định nếu không có lựa chọn
        $theoCot = 'ten';
        $huongSapXep = 'asc';

        switch ($luaChonSapXep) {
            case 2:
                $theoCot = 'price'; // Thay thế bằng cột phổ biến thực tế của bạn
                break;
            case 3:
                $theoCot = 'created_at';
                break;
            case 4:
                $theoCot = 'price';
                $huongSapXep = 'asc';
                break;
            case 5:
                $theoCot = 'price';
                $huongSapXep = 'desc';
                break;
            case 6:
                $theoCot = 'ten';
                $huongSapXep = 'desc';
                break;
                // Thêm các case khác nếu cần

            default:
                // Theo bảng chữ cái, A-Z (mặc định)
                $theoCot = 'ten';
                $huongSapXep = 'asc';
                break;
        }
        $categories = Categories::all();
        $suppliers = Suppliers::all();
        $products = Products::orderBy($theoCot, $huongSapXep)->get();
        $user_id = auth()->id();
        $cart = Order_details::whereHas('order', function ($query) use ($user_id) {
            $query->where('users_id', $user_id);
        })
            ->with(['order.order_details', 'product.image_features'])
            ->get();

        $groupedCart = $cart->groupBy('product.id');
        $order_detail = Order_details::all();
        $order = Orders::all();
        $posts = Posts::all();
        return view('users.shop', compact('products', 'categories', 'suppliers', 'posts', 'order', 'order_detail', 'groupedCart'));
    }
}
