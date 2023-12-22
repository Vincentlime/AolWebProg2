<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\userProduct;

class productController extends Controller
{
    public function viewUserList(){
        $products = Product::all();
        return view('product', ['products' => $products]);
    }
    

    public function addProduct(){
        return view('addproduct', );
    }

    public function processProduct(){
        $product = Product::all();
        return view('processProduct', ['product' => $product]);
    }

    public function removeProduct(){
        $product = Product::all();
        return view('removeproduct', ['product' => $product]);
    }

    public function editProduct(){
        $product = Product::all();
        return view('editproduct', ['product' => $product]);
    }
}
