@extends('layouts.app')

@section('content')
<div class="max-w-md px-6 mx-auto">
    <div class="flex flex-col break-words bg-white rounded shadow-md dark:bg-cool-gray-700 overflow-hidden">

		<div class="font-semibold bg-gray-200 py-3 px-6 mb-0 dark:bg-cool-gray-800">
            {{ __('Register') }}
        </div>


        <div class="w-full p-6">
	        <form class="w-full" method="POST" action="{{ route('register') }}">
	            @csrf

	            <div class="flex flex-wrap mb-6">
	                <label for="name" class="block text-sm font-bold mb-2">
	                    {{ __('Name') }}:
	                </label>

	                <input id="name" type="text" class="dark:border-cool-gray-900 dark:bg-cool-gray-800 dark:focus:border-cool-gray-900 dark:focus:bg-cool-gray-700 dark:text-cool-gray-100 form-input w-full @error('name')  border-red-500 @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

	                @error('name')
	                    <p class="text-red-500 text-xs italic mt-4">
	                        {{ $message }}
	                    </p>
	                @enderror
	            </div>

	            <div class="flex flex-wrap mb-6">
	                <label for="email" class="block text-sm font-bold mb-2">
	                    {{ __('E-Mail Address') }}:
	                </label>

	                <input id="email" type="email" class="dark:border-cool-gray-900 dark:bg-cool-gray-800 dark:focus:border-cool-gray-900 dark:focus:bg-cool-gray-700 dark:text-cool-gray-100 form-input w-full @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

	                @error('email')
	                    <p class="text-red-500 text-xs italic mt-4">
	                        {{ $message }}
	                    </p>
	                @enderror
	            </div>

	            <div class="flex flex-wrap mb-6">
	                <label for="password" class="block text-sm font-bold mb-2">
	                    {{ __('Password') }}:
	                </label>

	                <input id="password" type="password" class="dark:border-cool-gray-900 dark:bg-cool-gray-800 dark:focus:border-cool-gray-900 dark:focus:bg-cool-gray-700 dark:text-cool-gray-100 form-input w-full @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">

	                @error('password')
	                    <p class="text-red-500 text-xs italic mt-4">
	                        {{ $message }}
	                    </p>
	                @enderror
	            </div>

	            <div class="flex flex-wrap mb-6">
	                <label for="password-confirm" class="block text-sm font-bold mb-2">
	                    {{ __('Confirm Password') }}:
	                </label>

	                <input id="password-confirm" type="password" class="dark:border-cool-gray-900 dark:bg-cool-gray-800 dark:focus:border-cool-gray-900 dark:focus:bg-cool-gray-700 dark:text-cool-gray-100 form-input w-full" name="password_confirmation" required autocomplete="new-password">
	            </div>

	            <div class="flex flex-wrap">
	                <button type="submit" class="inline-flex items-center border-2 border-cool-gray-300 rounded leading-none px-4 py-2 h-10 uppercase font-medium text-cool-gray-800 hover:bg-cool-gray-100 focus:bg-cool-gray-100 focus:border-cool-gray-400 focus:outline-none focus:shadow-outline dark:border-cool-gray-900 dark:text-cool-gray-200 dark:hover:bg-cool-gray-800 dark:focus:bg-cool-gray-800 dark:focus:border-cool-gray-800">
	                    {{ __('Register') }}
	                </button>

	                <p class="w-full text-xs text-center mt-8">
	                    {{ __('Already have an account?') }}
	                    <a class="text-blue-500 hover:text-blue-700 no-underline" href="{{ route('login') }}">
	                        {{ __('Login') }}
	                    </a>
	                </p>
	            </div>
	        </form>
	    </div>
    </div>
</div>
@endsection
