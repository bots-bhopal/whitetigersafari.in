<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class LanguageSwitcher
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Session()->has('locale') and array_key_exists(Session()->get('locale'), config('languages'))) {
            App::setLocale(Session()->get('locale'));
        } else { // This is optional as Laravel will automatically set the fallback language if there is none specified
            Session::put('locale', Config::get('app.locale'));
            // App::setLocale(config('app.locale'));
        }
        return $next($request);

        // if (!Session::has('locale')) {
        //     Session::put('locale', Config::get('app.locale'));
        // }
        // App::setLocale(Session::get('locale'));
        // return $next($request);
    }
}
