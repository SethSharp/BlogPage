@extends('layouts.app')

@section('content')
    <div class="justify-center items-center mt-5 w-1/4 rounded border-2 border-gray-200
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

                        @error('email')
                        <span class="" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror
                                                                    rounded-xl p-1
                                                                    border-2 border-gray-100 selection:border-gray-200"
                               name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="text-red-600" role="alert">
{{--                                <strong>{{ $message }}</strong>--}}
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="px-4 py-2 rounded-2xl bg-blue-600 text-white">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
