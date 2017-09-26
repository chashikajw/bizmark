<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
    public function showRegisterform()
    {
      return view('customer/register');
    }

    public function register(Request $request)
    {
      $this->validation($request);
      return $request->all();
    }

    public function validation($request)
    {
      $request->validate([
        'name' => 'required|max:255',
        'username' => 'required|unique:posts|max:255',
        'email' => 'required|unique:posts|email|max:255',
        'Password' => 'required|confirmed|max:255',
        'confirm_password' => 'required',

    ]);
    }


}
