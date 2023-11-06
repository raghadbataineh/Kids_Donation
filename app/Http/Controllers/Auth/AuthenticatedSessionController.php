<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        if (session('Donate_login')) {
            return redirect()->route('go-donate', ['kit' => session('Donate_login')]);
        }

        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public const HOME = '/pages';
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        if (session('currenturl')) {
            return redirect(session('currenturl'));
        }


        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();


        if (session('currenturl')) {
            return redirect(session('currenturl'));
        }

        // return redirect('w');
        return redirect('/pages');
    }
}