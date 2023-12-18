<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserController extends Controller
{
    use Notifiable;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        if (isset($users)) {
            return view('admin.users.index', compact('users'));
        }
        return view('admin.users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'fullname' => 'required',
                'password' => 'required',
                'Address' => 'required',
                'phone' => 'required|numeric|digits:10',
                'email' => 'required|email|',
                'role' => 'required',
            ],
            [
                'required' => "Trường :attribute không được bỏ trống.",
                'numeric' => ":attribute phải là số.",
                'digits' => ":attribute phải có :digit chữ số."
            ],
            [
                'name' => 'Họ tên',
                'password' => 'Mật khẩu',
                'address' => 'Địa chỉ',
                'phone' => 'Số điện thoại',
                'email' => 'Email',
                'role' => 'Quyền hạn',
            ]
        );

        $input = $request->all();

        // Map role names to numerical values
        $roleMappings = [
            'admin' => 0,
            'users' => 1,
        ];

        // Assign the numerical value to the 'role' field
        $input['role'] = $roleMappings[$request->input('role')];

        $user = User::create($input);

        return redirect()->route('admin.users.create')
            ->with('success', 'Người dùng đã được tạo thành công!', compact('user'));
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
    public function edit(request $request, string $id)
    {
        $id = $request->route('id');
        $users = User::find($id);
        return view('admin.users.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'fullname' => 'required',
                'password' => 'required',
                'Address' => 'required',
                'phone' => 'required|numeric|digits:10',
                'email' => 'required|email|',
                'role' => 'required',
            ],
            [
                'required' => "Trường :attribute không được bỏ trống.",
                'numeric' => ":attribute phải là số.",
                'digits' => ":attribute phải có :digit chữ số."
            ],
            [
                'name' => 'Họ tên',
                'password' => 'Mật khẩu',
                'address' => 'Địa chỉ',
                'phone' => 'Số điện thoại',
                'email' => 'Email',
                'role' => 'Quyền hạn',
            ]
        );
        $roleValue = ($request->role === 'admin') ? 1 : 0;
        $user = User::find($id);
        $user->name = $request->fullname;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->role = $roleValue;
        $user->password = Hash::make($request->password);
        if (!empty($request->password)) {
            $user->password = Hash::make($request->password);
        }
        $user->save();
        // Chuyển hướng về trang index
        return redirect()->route('admin.users.list')->with(['success' => 'cập nhật thành công']);
    }
    public function destroy(string $id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();
            return redirect()->route('admin.users.list', compact('user'))->with('success', 'Người dùng đã xóa thành công');
        } else {
            return redirect()->route('admin.users.list', compact('user'))->with('error', 'Không tìm thấy người dùng');
        }
    }
}
