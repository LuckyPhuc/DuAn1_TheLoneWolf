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
        $request->validate([
            'fullname' => 'required',
            'password' => 'required',
            'Address' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'role' => 'required',
        ]);
        $userData = $request->only(['fullname', 'Address', 'phone', 'email', 'role', 'password']);
        $userData['role'] = ($request->role === 'admin') ? 1 : 0;
        $userData['password'] = Hash::make($request->password);
        User::create($userData);
        return redirect()->route('admin.users.create')->with(['success' => 'User created successfully!']);
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
            return redirect()->route('admin.users.list', compact('user'))->with('success', 'User deleted successfully');
        } else {
            return redirect()->route('admin.users.list', compact('user'))->with('error', 'User not found');
        }
    }
}
