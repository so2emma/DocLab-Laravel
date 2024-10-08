<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

//        foreach ($guards as $guard) {
//            if (Auth::guard($guard)->check()) {
////                return redirect(RouteServiceProvider::HOME);
//                if(Auth::guard("doctor")->check()){
//                    return redirect(RouteServiceProvider::DOCTOR_DASHBOARD);
//                }else{
//                return redirect(RouteServiceProvider::HOME);
//                }
//
//            }
//        }

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if ($guard === 'doctor') {
                    return redirect(RouteServiceProvider::DOCTOR_DASHBOARD);
                }elseif ($guard === 'laboratory') {
                    return redirect(RouteServiceProvider::LABORATORY_DASHBOARD);
                }elseif ($guard === 'patient') {
                    return redirect(RouteServiceProvider::PATIENT_DASHBOARD);
                }
                return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
}
