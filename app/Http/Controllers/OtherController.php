<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtherController extends Controller
{
    public function home(){
        return view("basic.home.home");
    }
}
