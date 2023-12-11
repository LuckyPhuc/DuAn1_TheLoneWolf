<?php

namespace App\Http\Controllers;

use App\Models\Suppliers;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Suppliers::all();
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
                'avatar' => "required"
            ],
            [
                'required' => 'vui lòng ko để trống Tên nhà cung cấp',
                'address.required' => 'vui lòng ko để trống Địa chỉ nhà cung cấp',
                'email.required' => 'vui lòng ko để trống Email nhà cung cấp',
                'phone.required' => 'vui lòng ko để trống số điện thoại',
                'avatar.required' => 'vui lòng upload file',
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
        $input = $request->all();
        if ($request->hasFile('avatar')) {
            $file = $request->avatar;

            $filename = $file->getClientOriginalName();

            $path = $file->move('uploads/suppliers', $file->getClientOriginalName());
            $thumbnail = 'uploads/suppliers/' . $filename;
            $input['avatar'] = $thumbnail;
        } else {
            return redirect()->route('admin.supplier.list');
        }

        Suppliers::create($input);

        return redirect()->route('admin.supplier.list')->with('success', 'Thêm mới thành công!');
    }
    public function show(string $id)
    {
        //
    }
    public function edit(string $id)
    {
        $suppliers = Suppliers::findOrFail($id);
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

        $update = Suppliers::where('id', $id)->update([
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
        $suppliers = Suppliers::find($id);
        if ($suppliers->delete($id)) {
            return redirect()->route('admin.supplier.list')
                ->with('success', 'Xóa thành công thành công');
        } else {
            return redirect()->route('admin.supplier.list',)->with('error', 'Lỗi');
        }
    }
}
