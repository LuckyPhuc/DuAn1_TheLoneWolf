<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'lowercase', 'email', 'min:5', 'max:255', 'unique:' . User::class],
                'password' => ['required', 'confirmed'],
                'password_confirmation' => ['required']
            ],
            [
                'required' => ':attribute không được để trống',
                'confirmed' => ':attribute không khớp ',
                'max' => ':attribute không vượt quá :max',
                'min' => ':attribute không dược ít hơn :min',

            ],
            [
                'name' => 'Tên người dùng',
                'email' => 'Địa chỉ email',
                'password' => 'Mật khẩu',
                'password_confirmation' => 'Xác nhận lại mật khẩu',
            ]
        );

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
