<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;


class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categories::all();
        return view("admin.categories.index", compact("categories"));
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
                'name' => "required|min:3|max:255|string",
            ],
            [
                'required' => 'Trường này không được để trống',
                'min' => ':attribute không ít hơn :min ký tự',
                'max' => ':attribute không vượt quá :max ký tự'

            ],
            [
                'name' => 'Tên danh mục',
            ]
        );
        $name = $request->name;
        $categories = new Categories;
        $categories->name = $name;
        if ($categories->save()) {
            return redirect()->route('admin.categories.create')
                ->with('success', 'Thêm mới danh mục thành công');
        } else {
            return redirect()->route('admin.categories.create', compact('request'));
        }
    }
    public function show(string $id)
    {
        //
    }
    public function edit(string $id)
    {
        $categories = Categories::findOrFail($id);
        return view('admin.categories.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => "required|min:3|max:255|string",
        ], [
            'required' => 'Trường này không được để trống',
            'min' => ':attribute không ít hơn :min ký tự',
            'max' => ':attribute không vượt quá :max ký tự'
        ], [
            'name' => 'Tên danh mục',
        ]);

        $category = Categories::findOrFail($id);
        $category->name = $request->name;
        // Cập nhật các thuộc tính khác của danh mục tại đây

        if ($category->save()) {
            return redirect()->route('admin.categories.list')
                ->with('success', 'Cập nhật thành công thành công');
        } else {
            return redirect()->route('admin.categories.edit', $id, compact('request'));
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Categories::find($id);


        if ($category->delete($id)) {
            return redirect()->route('admin.categories.list')
                ->with('success', 'Xóa thành công thành công');
        } else {
            return redirect()->route('admin.categories.list',)->with('error', 'Lỗi');
        }
    }
    // public function search($request)
    // {
    //     $searchTerm = $request->input('search');
    //     $categories = Categories::where('name', 'LIKE', '%' . $searchTerm . '%')->get();
    //     return view("admin.categories.index", compact("categories"));
    // }
}
