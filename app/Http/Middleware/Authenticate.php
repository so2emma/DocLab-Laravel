<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
//        return $request->expectsJson() ? null : route('login');

        if(!$request->expectsJson())
        {
            if(Route::is('doctor.*')){
                Auth::shouldUse('doctor');
                return route('doctor.login');
            }elseif (Route::is('user.*')) {
                Auth::shouldUse('user');
                return route('user.login');
            }
        }

        return null;
    }

}
