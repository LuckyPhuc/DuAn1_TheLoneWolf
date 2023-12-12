<?php

namespace App\Http\Controllers;

use App\Models\Suppliers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
                'avatar' => 'required|image|mimes:jpg,jpeg,png,gif|max:20480'
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
                'numeric' => ':attribute phải là số ',
                'image' => 'attribute là phải là file có đuôi jpg,jpeg,png, hoặc git'
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

            $path = $file->move('uploads/suppliers', $filename);
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
        $suppliers = Suppliers::findOrFail($id);
        $request->validate(
            [
                'name' => "required|min:2|max:100|string",
                'address' => "required|min:10|max:100|string",
                'email' => "required|email|min:2|max:100|string",
                'phone' => "required|min:7|max:11|string",
                'avatar' => 'required|max:20480'
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
                'numeric' => ':attribute phải là số ',
            ],
            [
                'name' => 'Tên nhà cung cấp',
                'address' => 'Địa chỉ nhà cung cấp',
                'email' => 'Email nhà cung cấp',
                'phone' => 'Số điện thoại nhà cung cấp',
            ]
        );
        $file_path = $suppliers['avatar'];

        if (File::exists($file_path)) {
            File::delete($file_path);
        }
        $input = $request->except('_token', '_method');

        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar'); // Hoặc $request->avatar

            $filename = $file->getClientOriginalName();
            $path = $file->move('uploads/suppliers', $filename);

            // Cập nhật đường dẫn file trong mảng input
            $input['avatar'] = 'uploads/suppliers/' . $filename;
        } else {
            return 'lỗi';
        }
        $update = Suppliers::where('id', $id)->update($input);
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
