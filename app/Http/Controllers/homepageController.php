<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\userProduct;


//controller untuk page gpenting - gbutuh data rumit

class homepageController extends Controller
{
    public function viewHomepage(){
        $user = User::all();
        $products = Product::all();
        $userproduct = userProduct::all();

        return view('home', ['user' => $user, 'products' => $products]);
    }

    public function viewAboutUs(){

        return view('aboutus');
    }
}
