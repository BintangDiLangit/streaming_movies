<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function signInPage(){
        return view('admin.pages.auth.sign-in');
    }

    public function signIn(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if ($request->user()->role->name == 'admin') {
                return redirect()->route('admin.index');
            }

            return redirect()->route('home');
        }

        return back()->with('error', 'Email or password is incorrect');
    }

    public function signUpPage(){
        return view('admin.pages.auth.sign-up');
    }

    public function signUp(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role_id' => 2
        ]);

        Auth::login($user);

        return redirect()->route('home');
    }

    public function signOut(){
        Auth::logout();

        return redirect()->route('auth.sign-in.index');
    }
}
