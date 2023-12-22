@extends('master')

@section('title', 'Login - Furnid')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 mt-auto mb-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full">
        <img src="img\logo_furnid\logo.png" class="mx-auto mb-4 box content w-10 h-10">
        <form action="/processLogin" method="POST">
            @csrf
            <input type="hidden" name="remember" value="True">
            <div class="rounded-md shadow-sm -space-y-px">
                <div>
                    <label for="email-address" class="sr-only">Email address</label>
                    <input id="email-address" name="email" type="email" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email address">
                </div>
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password">
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="border font-medium rounded-md text-c-black bg-c-pink px-3 py-1 m-2">
                    Log in
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
