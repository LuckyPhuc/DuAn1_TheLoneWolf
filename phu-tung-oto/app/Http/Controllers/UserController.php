<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
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
        $messenger = [];

        $rules = [
            'fullname' => 'required',
            'password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
            'Address' => 'required',
            'phone' => 'required|numeric|digits:10',
            'email' => 'required|email|unique:users,email',
            'role' => 'required',
        ];

        $messages = [
            'fullname.required' => 'Vui lòng nhập tên đầy đủ của bạn',
            'password.required' => 'Vui lòng nhập mật khẩu của bạn',
            'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
            'password.regex' => 'Mật khẩu phải chứa ít nhất một chữ cái viết hoa, một chữ cái viết thường và một số',
            'Address.required' => 'Vui lòng nhập địa chỉ của bạn',
            'phone.required' => 'Xin vui lòng điền số điện thoại của bạn',
            'phone.numeric' => 'Số điện thoại chỉ được chứa chữ số',
            'phone.digits' => 'Số điện thoại phải chứa đúng 10 chữ số',
            'email.required' => 'Vui lòng nhập địa chỉ email hợp lệ',
            'email.email' => 'Vui lòng nhập địa chỉ email hợp lệ',
            'email.unique' => 'Email này đã được đăng ký',
            'role.required' => 'Vui lòng nhập vai trò của bạn',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return view('admin.users.create')->withErrors($validator);
        }

        // Create new user
        $user = new User([
            'name' => $request->fullname,
            'address' => $request->Address,
            'phone' => $request->phone,
            'email' => $request->email,
            'role' => ($request->role === 'admin') ? 1 : 0,
            'password' => Hash::make($request->password),
        ]);

        $user->save();

        return redirect()->route('admin.users.create')->with(['success' => 'Người dùng đã được tạo thành công!']);
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
        $request->validate([
            'fullname' => 'required',
            'password' => 'required',
            'Address' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'role' => 'required',
        ]);
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
