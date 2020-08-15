@extends('layouts.main')

@section('content')
    <div class="container mx-auto">
        <div class="flex flex-wrap justify-center">
            <div class="w-full max-w-sm">
                <div class="flex flex-col break-words bg-cggray-700 border-gray-500 border-2 rounded shadow-md">

                    <div class="font-semibold bg-cggray-900 text-cgwhite py-3 px-6 mb-0">
                        {{ __('Reset Password') }}
                    </div>

                    <form class="w-full p-6" method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="flex flex-wrap mb-6">
                            <label for="email" class="block text-cgwhite text-sm mb-2">
                                {{ __('E-Mail Address') }}:
                            </label>

                            <input id="email" type="email" class="form-field w-full @error('email') border-red-500 @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="password" class="block text-cgwhite text-sm mb-2">
                                {{ __('Password') }}:
                            </label>

                            <input id="password" type="password" class="form-field w-full @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="password-confirm" class="block text-cgwhite text-sm mb-2">
                                {{ __('Confirm Password') }}:
                            </label>

                            <input id="password-confirm" type="password" class="form-field w-full" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="flex flex-wrap">
                            <input type="submit" class="button-primary" value="{{ __('Reset Password') }}">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
