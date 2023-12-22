<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

// mostly taken care about user data

class accountController extends Controller
{
    public function viewSignUp(){
        $user = User::all();

        return view('account', );
    }
    
    public function viewLogIn(){

        return view('login');
    }

    public function newUser(){
        return view('account');
    }

    public function profile(){
        return view('profile');
    }
    public function editProfile(){
        return view('editprofile');
    }

    public function processForm(Request $request)
    {
        $validateData = $request->validate([
            'fullname' => 'required|min:3|max:50',
            'email' => 'required|email|unique:users',
            'phoneNumber' => 'required|min:10|max:13',
            'password' => 'min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6'
        ]);

        $user = new User();
        $user->name = $validateData['fullname'];
        $user->email = $validateData['email'];
        $user->password = $validateData['password_confirmation'];
        $user->phone_number = $validateData['phoneNumber'];
        $user->role = 'customer';
        $user->save();

        redirect()->route('login');
    }

    public function updateProfile(Request $request)
    {
        $user = $request->session()->get('user');

        if ($user) {
            $validateData = $request->validate([
                'fullname' => 'required|min:3|max:50',
                'email' => 'required|email|unique:users,email,'.$user->id,
                'phone_number' => 'required|min:10|max:13',
            ]);

            $user->name = $validateData['fullname'];
            $user->email = $validateData['email'];
            $user->phone_number = $validateData['phone_number'];
            $user->save();

            // Optionally, you might want to update the user data in the session
            $request->session()->put('user', $user);

            return redirect()->route('profile')->with('success', 'Profile updated successfully.');
        } else {
            // Redirect to login if user data is not found in the session
            return redirect()->route('login')->with('error', 'Please log in first.');
        }
    }


    public function processLogin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where(function ($query) use ($email) {
            $query->where('role', 'customer')
              ->orWhere('role', 'admin');
        })->where('email', $email)->first();

        if ($user) {
            // User found based on email and role
            if (strcmp($password, $user->password) == 0) {
                $request->session()->put('user', $user);
                return redirect()->route('showProfile');
            } else {
                // Password is incorrect
                echo "Invalid login credentials- pass incorect";
            }
        } else {
            // User not found based on email and role
            echo "Invalid login credentials";
        }
    }

    public function showProfile(Request $request)
    {

        // Retrieve user data from the session
        $user = $request->session()->get('user');

        if ($user) {
            // Display user profile
            return view('profile', ['user' => $user]);
        } else {
            // Redirect to login if user data is not found in the session
            return redirect()->route('login')->with('error', 'Please log in first.');
        }
    }
    public function logout(Request $request)
    {
        $request->session()->forget('user'); // Remove user data from the session
        return redirect()->route('login'); // Redirect to the login page
    }

}