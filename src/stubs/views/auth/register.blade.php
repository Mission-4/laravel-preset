@extends('layouts.app')

@section('content')
<div class="bg-white max-w-sm mx-auto mt-8 p-8 shadow-lg rounded">
    <h2 class="mb-8 font-medium text-gray-700 text-2xl">Register</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group mb-6">
            <label for="name" class="control-label">{{ __('Name') }}</label>

            <input id="name" type="text" name="name" value="{{ old('name') }}"
                placeholder="John Doe" 
                class="form-control{{ $errors->has('name') ? ' border-red-500' : '' }}" required autofocus />

            @if ($errors->has('name'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group mb-6">
            <label for="email" class="control-label">{{ __('E-Mail Address') }}</label>

            <input id="email" type="email" name="email" value="{{ old('email') }}"
                placeholder="john@example.com" 
                class="form-control{{ $errors->has('email') ? ' border-red-500' : '' }}" required>

            @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group mb-6">
            <label for="password" class="control-label">{{ __('Password') }}</label>

            <input id="password" type="password" name="password"
                placeholder="••••••••" 
                class="form-control{{ $errors->has('password') ? ' border-red-500' : '' }}" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group mb-6">
            <label for="password-confirm" class="control-label">{{ __('Confirm Password') }}</label>

            <input id="password-confirm" type="password" name="password_confirmation"
                placeholder="••••••••" 
                class="form-control" required>
        </div>

        <div class="form-group mb-0">
            <button type="submit" class="btn-shadow text-white bg-blue-500">
                {{ __('Register') }}
            </button>
        </div>
    </form>
</div>
@endsection
