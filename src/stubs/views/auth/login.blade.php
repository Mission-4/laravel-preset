@extends('layouts.app')

@section('content')
<div class="bg-white max-w-sm mx-auto mt-8 p-8 shadow-lg rounded">
    <h2 class="mb-8 font-medium text-grey-darkest text-xxl">Log In</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group mb-6">
            <label for="email" class="control-label">{{ __('E-Mail Address') }}</label>

            <input id="email" type="email" name="email" value="{{ old('email') }}"
                placeholder="john@example.com" 
                class="form-control{{ $errors->has('email') ? ' border-red-lighter' : '' }}" required autofocus>

            @if ($errors->has('email'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </div>
            @endif
        </div>

        <div class="form-group mb-6">
            <label for="password" class="control-label">{{ __('Password') }}</label>
            <input id="password" type="password" name="password"
                placeholder="••••••••"
                class="form-control{{ $errors->has('password') ? ' border-red-lighter' : '' }}" required>

            @if ($errors->has('password'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </div>
            @endif
        </div>

        <div class="form-group mb-8">
            <label class="font-semibold text-grey-darker">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} class="mr-1"> {{ __('Remember Me') }}
            </label>
        </div>

        <div class="flex flex-row-reverse items-center justify-between">
                <button type="submit" class="btn-shadow text-white bg-blue">
                    {{ __('Login') }}
                </button>

                <a class="text-grey-dark font-medium hover:text-grey-darkest no-underline" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
        </div>
    </form>
</div>
@endsection
