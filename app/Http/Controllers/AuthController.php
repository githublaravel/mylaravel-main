<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function show_login(){
        return view("auth.login");
    }
    public function show_register(){
        return view("auth.register");
    }
}
