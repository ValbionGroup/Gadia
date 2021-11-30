<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        if (DB::table('settings')->where('NAME', 'cas')->value('VALUE') == 'false') {
            $cas = false;
            $cas_url = null;
            $cas_name = null;
        } else {
            $cas = true;
            $cas_name = DB::table('cas_settings')->where('id', '1')->value('name');
            $cas_url = DB::table('cas_settings')->where('id', '1')->value('auth_link');
        }
        return view('auth.login', ['cas' => $cas, 'cas_url' => $cas_url, 'cas_name' => $cas_name]);
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        $space = Auth::user()->status;

        $status = DB::table('space_lock')->where('space', $space)->value('disabled');

        if ($status == 0) {
            return redirect()->intended($space);
        } else {
            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return view('auth.locked', ['space' => $space]);
        }
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
