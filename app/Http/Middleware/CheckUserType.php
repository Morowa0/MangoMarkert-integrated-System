<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  int  $usertype
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, int $usertype): Response
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Check if the user type matches the required user type
            if (Auth::user()->usertype === $usertype) {
                return $next($request);
            } else {
                // Redirect back with an error if unauthorized
                return redirect()->back()->withErrors('Unauthorized access.');
            }
        } else {
            // Redirect to the login route if the user is not authenticated
            return redirect()->route('login');
        }
    }
}
