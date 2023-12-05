<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Danh_muc_san_pham;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.categories.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.categories.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $request->validate(
            [
                'category-name' => "required|min:3|max:255|string",
            ],
            [
                'required' => 'Trường này không được để trống',
                'min' => ':attribute không ít hơn :min ký tự',
                'max'=>':attribute không vượt quá :max ký tự'

            ],
            [
                'category-name'=> 'Tên danh mục',
            ]
            );
    //Proceed with your logic if validation passes
    $category_name = $request->input("category-name");
    $category = new danh_muc_san_pham;
    $category->ten_danh_muc = $category_name;
    $category->save();

    // Redirect or further processing
    return redirect()->route('admin.categories.create')->with('success', 'Danh mục đã được tạo thành công.');
    }

    /**
     * Display the specified resource.
     */
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