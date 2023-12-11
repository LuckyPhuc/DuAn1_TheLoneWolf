<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suppliers;
use App\Models\Categories;
use App\Models\image_features;
use App\Models\Products;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.products.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $suppliers = Suppliers::all();
        $categories = Categories::all();
        return view("admin.products.create", compact('suppliers', 'categories'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $suppliers = Suppliers::all();
        $categories = Categories::all();
        // $request->validate([
        //     'name' => ['required', 'string', 'max:100'],
        //     'quantity' => ['required', 'numeric', 'min:1', 'max:99999999.99'],
        //     'price' => ['required', 'numeric', 'min:1', 'max:99999999.99'],
        //     'category_id' => ['required', 'string', 'max:100'],
        //     'supplier_id' => ['required', 'string', 'max:100'],
        //     'description' => ['required', 'string', 'min:10', 'max:512'],
        //     // 'images' => ['required', 'array', 'max:60000'],
        //     // 'images.*' => ['image', 'mimes:jpeg,png,jpg,gif'],
        // ], [
        //     'required' => ':attribute không được để trống',
        //     'min' => ':attribute không ít hơn :min',
        //     'max' => ':attribute không vượt quá :max',
        //     'mimes' => ':attribute phải có đuôi .jpeg, .png, .jpg, .gif',
        //     'image' => ':attribute phải là hình ảnh.',
        //     'numeric' => ':attribute phải là một số',
        // ], [
        //     'name' => 'Tên sản phẩm',
        //     'quantity' => 'Số lượng sản phẩm',
        //     'price' => 'Giá sản phẩm',
        //     'category_id' => 'Mã danh mục',
        //     'supplier_id' => 'Mã nhà cung cấp',
        //     'description' => 'Mô tả sản phẩm',
        //     // 'images' => 'Hình ảnh sản phẩm',
        // ]);

        // $images = $request->file('images');

        // $avatarName = time() . '_' . $images[0]->getClientOriginalName();
        $product = Products::create([
            'name' => $request->input('name'),
            'quantity' => $request->input('quantity'),
            'price' => $request->input('price'),
            'category_id' => $request->input('category_id'),
            'supplier_id' => $request->input('supplier_id'),
            'description' => $request->input('description'),
            // 'images[]' = 
        ]);
        return $product;
        // foreach ($request->file('images') as $image) {
        //     $imageName = time() . '_' . $image->getClientOriginalName();

        //     $image->move(public_path('uploads/products'), $imageName);

        //     image_product::create([
        //         'url_im' => 'uploads/products/' . $imageName,
        //         'product_id' => $product->id
        //     ]);
        // }
        session()->flash('status', 'Thêm mới thành công!');
        return view('admin.products.create', compact('categories', 'suppliers'))
            ->with('status', 'Thêm mới thành công!');
    }


    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
