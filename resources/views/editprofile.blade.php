@extends('master')

@section('title', 'Edit Profile - Furnid')

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
    
                <form action="{{route('updateProfile')}}" method="POST">
                    @csrf
                    <h1 class="font-extrabold text-c-black text-center m-2">Update your data!</h1>
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
                            <td colspan="3" class="text-center">
                                <button type="Submit" class=" mt-2 px-3 py-1 border font-medium rounded-md text-c-black bg-c-pink " >
                                    Update data
                                </button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
@endsection