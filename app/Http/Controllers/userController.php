<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\userProduct;

//taken care of user product relationship

class userController extends Controller
{
    public function viewUserList(){
        $user = User::where('role', 'customer')->get();
        $product = Product::all();
        $userproduct = userProduct::all();

        return view('userlist', ['user' => $user, 'product' => $product, 'userproduct' => $userproduct]);
    }

    public function viewProfile(){
        $user = User::all();
        $product = Product::all();
        $userproduct = userProduct::all();

        return view('profile', ['user' => $user, 'product' => $product, 'userproduct' => $userproduct]);
    }

}
