<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    public function login() {
        return view('login');
    }
    public function authenticate() {
        $credentials = [
            'email' => Input::get('email'),
            'password' => Input::get('password')
          ];
        
        if (Auth::attempt($credentials)) {
            return redirect()
              ->intended('/');
          }
          else {
            auth()->logout();
            return redirect()
              ->back()
              ->with('flash_error', 'Wrong email/password!')
              ->withInput(Input::all());
          }
    }
    public function logout() {
        auth()->logout();
        return view('home');
    }
}
