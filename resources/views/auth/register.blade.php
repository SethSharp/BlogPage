@extends('layouts.app')
@section('content')

<div class="justify-center items-center mt-28 w-1/4 rounded border-2 border-gray-200
            mx-auto p-6">
    <div class="">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="">
                <label for="name" class="">{{ __('Name') }}</label>

                <div class="">

                    <input id="name" type="text"
                           class="@error('name') is-invalid @enderror
                           rounded-xl p-1 border-2 border-gray-100 selection:border-gray-200
                           " name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <br>
                        <span class="text-red-600" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                <div class="col-md-6">
                    <input id="email" type="text"
                           class="@error('email') is-invalid @enderror
                                    rounded-xl p-1 border-2 border-gray-100 selection:border-gray-200"
                           name="email" value="{{ old('email') }}" required autocomplete="name" autofocus>

                    @error('email')
                        <br>
                        <span class="text-red-600" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="">
                <label for="password" class="">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password"
                           class="@error('password') is-invalid @enderror
                           rounded-xl p-1 border-2 border-gray-100 selection:border-gray-200"
                           name="password" required autocomplete="new-password">
                </div>
            </div>

            <div class="row mb-3">
                <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password"
                           class="rounded-xl p-1 border-2 border-gray-100 selection:border-gray-200"
                           name="password_confirmation" required autocomplete="new-password">
                    @error('password')
                        <br>
                        <span class="text-red-600" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="px-4 py-2 rounded-2xl bg-blue-600 text-white">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
