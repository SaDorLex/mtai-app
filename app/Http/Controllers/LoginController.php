<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function entrar(Request $request){
        return view('dashboard');
    }
}
