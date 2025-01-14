<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Miembro;
use App\Models\Cargo;
use Illuminate\Support\Facades\Log;

class CheckMiembroCargo
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check()){
            
            $miembro = Auth::user();

            if(!$miembro->cargo){
                return redirect()->route('login')->with('error','Usted no cuenta con un cargo');
            }
        }
        
        return $next($request);
    }
}
