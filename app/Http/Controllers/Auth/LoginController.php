<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected function authenticated(Request $request, $user)
    {
        // Check if the user's status is disabled
        if ($user->status === 'disabled') {
            Auth::logout();
            return redirect('/login')->with('success' , 'Your account is disabled. Please contact support.');
        }
         
        // Update the last_login_at timestamp
         $user->last_login_at = Carbon::now();
         $user->login_status = 'online';
         $user->save();

        // Store session variable indicating user is logged in
        $request->session()->put('loggedIn', true);

        // Check the user's role and redirect accordingly
        if ($user->usertype === '1') {
            // If the user is an buyer, redirect to buyer dashboard
            return redirect()->route('buyershome')->with('message', 'You have logged in successfully');
        } elseif ($user->usertype === '2') {
            // If the user is admin, redirect to admin' view
            return redirect()->route('adminhome')->with('message', 'You have logged in successfully');
        }else  {
            // for farmer
            return redirect()->route('farmershome')->with('message', 'You have logged in successfully');
        }
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
        /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        // Get the currently authenticated user
        $user = Auth::user();

        if ($user) {
            // Update the user's status to 'offline'
            $user->login_status = 'offline';
            $user->save();

            // Log the user out
            Auth::logout();

            // Invalidate the user's session
            $request->session()->invalidate();

            // Regenerate the session token
            $request->session()->regenerateToken();
        }

        // Redirect to the homepage after logout
        return redirect('/');
    }
}
