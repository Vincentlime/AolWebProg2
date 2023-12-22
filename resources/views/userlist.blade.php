@extends('master')

@section('title', 'User List- Furnid')

@section('content')
    <div class="">
        <h1 class="text-lg font-black text-center m-3">User Data Table</h1>
    <div class="flex flex-col overflow-scroll shadow-md rounded-lg m-5">
        <table class="w-full text-left table-auto min-w-max">
            <tr class="bg-c-gray text-white font-medium">
                <th class="p-4"> id</th>
                <th class="p-4">Name</th>
                <th class="p-4">Email</th>
                <th class="p-4">Phone Number</th>
            </tr>
            
            @for ($i=0; $i<count($user); $i++)
            <tr>
                <td class="p-4">{{$user[$i]->user_id}}</td>
                <td class="p-4">{{$user[$i]->name}}</td>
                <td class="p-4">{{$user[$i]->email}}</td>
                <td class="p-4">{{$user[$i]->phone_number}}</td>
            </tr>
                
            @endfor
        </table>
    </div>
    </div>
@endsection