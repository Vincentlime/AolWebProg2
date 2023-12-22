@extends('master')

@section('title', 'Account - Furnid')

@section('content')
        <div class="min-h-screen flex-row items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
            <div class="flex text-left justify-center text-c-black">

                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert"">
                        <ul class="list-disc list-inside mb-0">
                            @foreach ($errors->all() as $error)
                                <li> {{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    
                @endif
    
                <form action="{{url('/processForm')}}" method="POST">
                    <h1 class="font-extrabold text-c-black text-center m-2">Make Your Account!</h1>
                    @csrf
                    <table class="table-auto border-solid text-sm">
                        <tr>
                            <td class=""> <label for="fullname">Full name</label></td>
                            <td>: </td>
                            <td><input type="text" name="fullname" id="fullname" placeholder="Your name" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" >
                                @error('fullname')
                                    <div class="text-red-500"> 
                                        {{$message}}
                                    </div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td ><label for="email">Email</label></td>
                            <td>: </td>
                            <td><input type="text" name="email" id="email" placeholder="Your email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" >
                                @error('email')
                                    <div class="text-red-500"> 
                                        {{$message}}
                                    </div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><label for="phoneNumber" class="mr-2">Phone Number</label></td>
                            <td>: </td>
                            <td><input type="text" name="phoneNumber" id="phoneNumber" placeholder="+62**********" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" >
                                @error('phoneNumber')
                                    <div class="text-red-500"> 
                                        {{$message}}
                                    </div>
                                @enderror
    
                            </td>
                        </tr>
                        <tr>
                            <td><label for="password" class="mr-2">Password</label></td>
                            <td>: </td>
                            <td><input type="password" name="password" id="password" placeholder="Password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" ></td>
                        </tr>
                        <tr>
                            <td><label for="password_confirmation" class="mr-2">Confirm Password</label></td>
                            <td>: </td>
                            <td><input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"></td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-center">
                                <button type="submit" class=" mt-2 px-3 py-1 border font-medium rounded-md text-c-black bg-c-pink " >
                                    Sign Up
                                </button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="text-center">already have an account? Do <a href="login" class="text-c-pink"><b>Log-in!</b></a></div>
        </div>
@endsection