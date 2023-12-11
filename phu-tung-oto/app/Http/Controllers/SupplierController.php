<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return view("admin.supplier.index", compact("suppliers"));
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
                'name' => "required|min:2|max:100|string",
                'address' => "required|min:10|max:100|string",
                'email' => "required|email|min:2|max:100|string",
                'phone' => "required|min:7|max:11|string",

            ],
            [
                'required' => 'vui lòng ko để trống Tên nhà cung cấp',
                'address.required' => 'vui lòng ko để trống Địa chỉ nhà cung cấp',
                'email.required' => 'vui lòng ko để trống Email nhà cung cấp',
                'phone.required' => 'vui lòng ko để trống số điện thoại',
                'min' => ':attribute không ít hơn :min ký tự',
                'max' => ':attribute không vượt quá :max ký tự',
                'email' => 'Định dạng email không hợp lệ',
                'numeric' => ':attribute phải là số '

            ],
            [
                'name' => 'Tên nhà cung cấp',
                'address' => 'Địa chỉ nhà cung cấp',
                'email' => 'Email nhà cung cấp',
                'phone' => 'Số điện thoại nhà cung cấp',
            ]
        );
        Supplier::create([
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        return redirect()->route('admin.supplier.list')->with('success', 'Thêm mới thành công!');
    }
    public function show(string $id)
    {
        //
    }
    public function edit(string $id)
    {
        $suppliers = Supplier::findOrFail($id);
        return view('admin.supplier.edit', compact('suppliers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'name' => "required|min:2|max:100|string",
                'address' => "required|min:3|max:100|string",
                'email' => "required|min:2|max:100|string",
                'phone' => "required|min:7|max:10|string",

            ],
            [
                'name.required' => 'vui lòng ko để trống Tên nhà cung cấp',
                'address.required' => 'vui lòng ko để trống Địa chỉ nhà cung cấp',
                'email.required' => 'vui lòng ko để trống Email nhà cung cấp',
                'phone.required' => 'vui lòng ko để trống Số điện thoại',
                'min' => ':attribute không ít hơn :min ký tự',
                'max' => ':attribute không vượt quá :max ký tự'

            ],
            [
                'name' => 'Tên nhà cung cấp',
                'address' => 'Địa chỉ nhà cung cấp',
                'email' => 'Email nhà cung cấp',
                'phone' => 'Số điện thoại nhà cung cấp',
            ]
        );

        $update = Supplier::where('id', $id)->update([
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone
        ]);
        if ($update) {
            return redirect()->route('admin.supplier.list')->with('success', 'Sửa thành công!');
        } else {
            return redirect()->route('admin.supplier.edit', ['id' => $id]);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $suppliers = Supplier::find($id);
        if ($suppliers->delete($id)) {
            return redirect()->route('admin.supplier.list')
                ->with('success', 'Xóa thành công thành công');
        } else {
            return redirect()->route('admin.supplier.list',)->with('error', 'Lỗi');
        }
    }
}
