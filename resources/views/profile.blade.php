@extends('master')

@section('title', 'Profile - Furnid')

@section('content')
    {{-- admin --}}
    @if($user->role == 'admin')
        <div class="flex flex-row justify-center align-center">
            <div class="p-4 m-5 bg-c-gray rounded shadow-md">
                <a href='user' class="text-lg font-black text-white"> View User </a>
            </div>
            <div class="p-4 m-5 bg-c-gray rounded shadow-md">
                <a href="addproduct" class="text-lg font-black text-white"> Add Product </a>
            </div>
            <div class="p-4 m-5 bg-c-gray rounded shadow-md">
                <a href="editproduct" class="text-lg font-black text-white"> Edit Product </a>
            </div>
            <div class="p-4 m-5 bg-c-gray text-c-black rounded shadow-md">
                <a href="removeproduct" class="text-lg font-black text-white"> Remove product </a>
            </div>
            <div class="p-4 m-5 bg-c-gray rounded shadow-md">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="text-lg font-black text-white"> Logout </button>
                </form>
            </div>
        </div>
    @endif
    
    @if($user->role == 'customer')
        <div>
            <table class="table-auto border-solid flex justify-center border-solid rounded">
                <tr class="bg-c-gray m-4">
                    <td>Name</td>
                    <td>:</td>
                    <td>{{$user->name}}</td>
                </tr>
                <tr class=" bg-c-gray m-4">
                    <td>Email</td>
                    <td>:</td>
                    <td>{{$user->email}}</td>
                </tr>
                <tr class="bg-c-gray m-4">
                    <td>Phone number</td>
                    <td>:</td>
                    <td>{{$user->phone_number}}</td>
                </tr>
            </table>
            <div class="flex justify-center m-3">
                <a href="editProfile" class="bg-c-gray text-white font-bold rounded-lg px-3"> Edit Profile </a>
            </div>

            <div class="flex justify-center mt-3">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="bg-c-pink text-white font-bold rounded-lg px-3"> Logout </button>
                </form>
            </div>

        </div>
    @endif
@endsection
