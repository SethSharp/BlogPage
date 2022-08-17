@extends('layouts.app')

@section('content')
    <div class="justify-center items-center mt-28 w-1/4 rounded border-2 border-gray-200
                mx-auto
                p-6">

        <div class="">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="">
                    <label for="email" class="">{{ __('Email') }}</label>

                    <div class="">
                        <input id="email" type="email" class="@error('email') is-invalid @enderror
                                                              rounded-xl p-1
                                                              border-2 border-gray-100 selection:border-gray-200"
                               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                </div>

                <div class="">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                    <div class="">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror
                                                                    rounded-xl p-1
                                                                    border-2 border-gray-100 selection:border-gray-200"
                               name="password" required autocomplete="current-password">
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit" class="px-4 py-2 rounded-2xl bg-blue-600 text-white">
                        {{ __('Login') }}
                    </button>
                </div>
                @error('email')
                    <br>
                    <span class="text-red-600" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </form>
        </div>
    </div>
@endsection
