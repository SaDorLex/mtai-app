<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;



class LoginController extends Controller
{

    public function register(Request $request){
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user);

        return redirect(route('dashboard'));
    }

    public function login(Request $request){
        $credentials = [
            "usuario" => $request->email,
            "password" => $request->password
        ];
        Log::info("Vino por aquí INGRESO 1??");
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            Log::info("Vino por aquí INGRESO 2??");
            return redirect()->intended('dashboard');
        }else{
            Log::info("Vino por aquí OUT??");
            return redirect(route('login'));
        }
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}
