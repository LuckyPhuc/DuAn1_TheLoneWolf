<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $supplier = Supplier::all();
        return view("admin.supplier.index", compact("supplier"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.supplier.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => "required|min:2|max:255|string",
            ],
            [
                'required' => 'Trường này không được để trống',
                'min' => ':attribute không ít hơn :min ký tự',
                'max' => ':attribute không vượt quá :max ký tự'

            ],
            [
                'name' => 'Tên nhà cung cấp',
            ]
        );
        $name = $request->name;
        $supplier = new supplier;
        $supplier->name = $name;
        if ($supplier->save()) {
            return redirect()->route('admin.supplier.create')
                ->with('success', 'Thêm mới nhà cung thành công');
        } else {
            return redirect()->route('admin.supplier.create', compact('request'));
        }
    }
    public function show(string $id)
    {
        //
    }
    public function edit(string $id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('admin.supplier.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => "required|min:2|max:255|string",
        ], [
            'required' => 'Trường này không được để trống',
            'min' => ':attribute không ít hơn :min ký tự',
            'max' => ':attribute không vượt quá :max ký tự'
        ], [
            'name' => 'Tên danh mục',
        ]);

        $suppliers = Supplier::findOrFail($id);
        $suppliers->name = $request->name;

        if ($suppliers->save()) {
            return redirect()->route('admin.supplier.list')
                ->with('success', 'Cập nhật thành công thành công');
        } else {
            return redirect()->route('admin.supplier.edit', $id, compact('request'));
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Supplier::find($id);
        if ($category->delete($id)) {
            return redirect()->route('admin.supplier.list')
                ->with('success', 'Xóa thành công thành công');
        } else {
            return redirect()->route('admin.supplier.list',)->with('error', 'Lỗi');
        }
    }
}
