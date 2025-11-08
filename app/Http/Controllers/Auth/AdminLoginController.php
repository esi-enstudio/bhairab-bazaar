<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Show the admin login form.
     */
    public function showLoginForm(): Factory|\Illuminate\Contracts\View\View
    {
        return view('auth.admin-login'); // আমরা এই ভিউটি তৈরি করব
    }

    /**
     * Handle a login request to the application.
     */
    public function login(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            $user = Auth::user();
            if ($user->hasRole(['SuperAdmin, Admin'])) {
                return redirect()->intended(route('admin.dashboard'));
            }

            // Admin না হলে লগ আউট করে দিন
            Auth::logout();
        }

        return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
            'email' => 'These credentials do not match our records or you do not have admin access.',
        ]);
    }
}
