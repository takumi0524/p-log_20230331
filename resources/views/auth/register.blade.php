<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- UserName -->
            <div>
                {{-- <x-input-label for="name" :value="__('Name')" /> --}}
                <x-input-label for="username" :value="__('ユーザネーム')" />

                <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />
            </div>

            <!-- UserID -->
            <div class="mt-4">
                {{-- <x-input-label for="userid" :value="__('userid')" /> --}}
                <x-input-label for="userid" :value="__('ユーザID')" />

                <x-text-input id="userid" class="block mt-1 w-full" type="text" name="userid" :value="old('userid')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                {{-- <x-input-label for="email" :value="__('Email')" /> --}}
                <x-input-label for="email" :value="__('メール')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                {{-- <x-input-label for="password" :value="__('Password')" /> --}}
                <x-input-label for="password" :value="__('パスワード')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                {{-- <x-input-label for="password_confirmation" :value="__('Confirm Password')" /> --}}
                <x-input-label for="password_confirmation" :value="__('パスワード再入力')" />


                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{-- {{ __('Already registered?') }} --}}
                    {{ __('ログイン画面') }}
                </a>

                <x-primary-button class="ml-4">
                    {{-- {{ __('Register') }} --}}
                    {{ __('登録') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
