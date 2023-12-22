@extends('master')

@section('title', 'Add product - Furnid')

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
    
                <form action="{{url('/processProduct')}}" method="POST">
                    <h1 class="font-extrabold text-c-black text-center m-2">Add more product!</h1>
                    @csrf
                    <table class="table-auto border-solid text-sm">
                        <tr>
                            <td class=""> <label for="productName">Product name</label></td>
                            <td>: </td>
                            <td><input type="text" name="productName" id="productName" placeholder="Product name" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" >
                                @error('productName')
                                    <div class="text-red-500"> 
                                        {{$message}}
                                    </div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td class="">
                                <label for="productImage">Product image</label>
                            </td>
                            <td>: </td>
                            <td>
                                <input type="file" name="productImage" id="productImage" accept="image/*" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                                @error('productImage')
                                    <div class="text-red-500"> 
                                        {{$message}}
                                    </div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td ><label for="stock">Stock</label></td>
                            <td>: </td>
                            <td><input type="text" name="stock" id="stock" placeholder="Product stock" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" >
                                @error('stock')
                                    <div class="text-red-500"> 
                                        {{$message}}
                                    </div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><label for="price" class="mr-2">Price</label></td>
                            <td>: </td>
                            <td><input type="text" name="price" id="price" placeholder="Product price" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" >
                                @error('price')
                                    <div class="text-red-500"> 
                                        {{$message}}
                                    </div>
                                @enderror
    
                            </td>
                        </tr>
                        <tr>
                            <td><label for="series" class="mr-2">Series</label></td>
                            <td>: </td>
                            <td><input type="text" name="series" id="series" placeholder="Product series" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" ></td>
                        </tr>
                        <tr>
                            <td><label for="detail" class="mr-2">Detail</label></td>
                            <td>: </td>
                            <td><input type="text" name="detail" id="detail" placeholder="Product detail" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" ></td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-center">
                                <button type="submit" class=" mt-2 px-3 py-1 border font-medium rounded-md text-c-black bg-c-pink " >
                                    Add
                                </button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
@endsection