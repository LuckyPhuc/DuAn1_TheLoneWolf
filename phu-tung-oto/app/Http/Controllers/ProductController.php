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
        $products = Products::with(['category', 'supplier', 'image_features' => function ($query) {
            $query->where('number', 0);
        }])->get();
        return view("admin.products.index", compact('products'));
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
        $request->validate(
            [
                'name' => "required|string|max:100",
                'quantity' => "required|numeric|min:1|max:99999999.99",
                'unit' => "required|string|min:1|max:20",
                'price' => "required|numeric|min:1|max:99999999.99",
                'description' => "required|string|min:1|max:1000",
                'images' => "required|array|max:20000",
                'images.*' => "image|mimes:jpeg,png,jpg,gif",
            ],
            [
                'required' => ':attribute không được để trống',
                'min' => ':attribute không ít hơn :min',
                'max' => ':attribute không vượt quá :max',
                'mimes' => ':attribute phải có đuôi .jpeg, .png, .jpg, .gif',
                'numeric' => ':attribute phải là một số',
            ],
            [
                'name' => 'Tên sản phẩm',
                'quantity' => 'Số lượng sản phẩm',
                'unit' => 'Đơn vị tính',
                'price' => 'Giá sản phẩm',
                'description' => 'Mô tả sản phẩm',
                'images' => 'Hình ảnh sản phẩm',
            ]
        );

        $input = $request->all();
        $product = Products::create($input);
        $number = 0;
        foreach ($input['images'] as $image) {
            $imageName = $image->getClientOriginalName();

            $image->move('uploads/products', $imageName);
            $thumbnail = 'uploads/products/' . $imageName;

            image_features::create([
                'product_id' => $product->id,
                'url_img' => $thumbnail,
                'alt_img' => $imageName,
                'number' => $number
            ]);
            $number++;
        }
        return redirect()->route("admin.products.list")->with('success', 'Thêm mới thành công!');
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
        $suppliers = Suppliers::all();
        $categories = Categories::all();
        $products = Products::find($id);
        return view('admin.products.edit', compact('products', 'suppliers', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $request->validate(
        //     [
        //         'name' => "required|string|max:100",
        //         'quantity' => "required|numeric|min:1|max:99999999.99",
        //         'unit' => "required|string|min:1|max:20",
        //         'price' => "required|numeric|min:1|max:99999999.99",
        //         'description' => "required|string|min:1|max:1000",
        //         'images' => "required|array|max:20000",
        //         'images.*' => "image|mimes:jpeg,png,jpg,gif",
        //     ],
        //     [
        //         'required' => ':attribute không được để trống',
        //         'min' => ':attribute không ít hơn :min',
        //         'max' => ':attribute không vượt quá :max',
        //         'mimes' => ':attribute phải có đuôi .jpeg, .png, .jpg, .gif',
        //         'numeric' => ':attribute phải là một số',
        //     ],
        //     [
        //         'name' => 'Tên sản phẩm',
        //         'quantity' => 'Số lượng sản phẩm',
        //         'unit' => 'Đơn vị tính',
        //         'price' => 'Giá sản phẩm',
        //         'description' => 'Mô tả sản phẩm',
        //         'images' => 'Hình ảnh sản phẩm',
        //     ]
        // );
        $input = $request->except('_token', '_method');

        $imgOld = Products::with('image_features')->where('id', $id)->first();
        dd($imgOld);
        // if ($imgOld) {
        //     $imgOld->image_features()->delete();
        // }
        // $update = Products::where('id', $id)->update($input);
        // if ($update) {
        //     return redirect()->route('admin.supplier.list')->with('success', 'Sửa thành công!');
        // } else {
        //     return redirect()->route('admin.supplier.edit', ['id' => $id]);
        // }




        // $number = 0;
        // if ($request->hasFile('images')) {
        //     foreach ($request->file('images') as $image) {

        //         $imageName = $image->getClientOriginalName();
        //         $image->move(public_path('uploads/products'), $imageName);
        //         $thumbnail = 'uploads/products/' . $imageName;

        //         $newImage = image_features::create([
        //             'product_id' => $product->id,
        //             'url_img' => $thumbnail,
        //             'alt_img' => $imageName,
        //             'number' => $number
        //         ]);
        //         $number++;
        //         $existingImages[] = $newImage->id;
        //     }
        // }
        // return redirect()->route('admin.products.list')->with('success', 'Sửa thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
