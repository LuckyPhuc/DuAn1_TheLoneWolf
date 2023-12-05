<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

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

        $fullname = $request->fullname;
        $password = $request->password;
        $Address = $request->Address;
        $phone = $request->phone;
        $email = $request->email;
        $role = $request->role;
        $roleValue = ($role === 'admin') ? 1 : 0;

        if (!isset($fullname) || empty($fullname)) {
            $messenger[] = 'Please enter your full name';
        }

        if (!isset($password) || empty($password)) {
            $messenger[] = 'Please enter your password';
        }

        // Thêm kiểm tra dữ liệu hợp lệ cho email nếu cần

        if (!isset($Address) || empty($Address)) {
            $messenger[] = 'Please enter your address';
        }

        if (!isset($phone) || empty($phone)) {
            $messenger[] = 'Please enter your phone number';
        }

        if (!isset($email) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $messenger[] = 'Please enter a valid email address';
        }

        if (!isset($role) || empty($role)) {
            $messenger[] = 'Please enter your role';
        }

        if (!empty($messenger)) {
            // Nếu có lỗi, trả về view với thông báo lỗi
            return view('admin.users.create', compact('messenger'));
        }

        // Nếu không có lỗi, tiếp tục tạo user mới
        $user = new User;
        $user->name = $fullname;
        $user->address = $Address;
        $user->phone = $phone;
        $user->email = $email;
        $user->role = $roleValue;
        $user->password = Hash::make($password);
        $user->save();

        return redirect()->route('admin.users.create')->with(['messenger' => $messenger, 'success' => 'User created successfully!']);
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
