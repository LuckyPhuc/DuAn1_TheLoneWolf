<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="login__head d-flex justify-content-center">
        <h1 class="fs-3 py-4">Đăng nhập</h1>
    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Mật Khẩu')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember"
                    style="display:block">
                <span class="ms-2 text-sm text-gray-600">{{ __('Ghi nhớ mật khẩu') }}</span>
            </label>
        </div>
        <div class="login__ d-flex">
            <x-primary-button class="w-100 justify-content-center py-3 my-3">
                {{ __('Đăng nhập') }}
            </x-primary-button>
        </div>

        <div class="float left">
            @if (Route::has('password.request'))
                <a class="underline my-3 d-block text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Quên Mật khẩu?') }}
                </a>
                <a class="underline my-3 d-block text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('register') }}">
                    {{ __('Bạn chưa có tài khoản') }}
                </a>
            @endif
        </div>
    </form>
</x-guest-layout>
