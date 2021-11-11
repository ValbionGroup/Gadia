<?php

namespace App\Http\Controllers\Auth;

use App\Providers\RouteServiceProvider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use pragmarx\Google2FALaravel\Support\Constants;
use PragmaRX\Google2FAQRCode\Google2FA;

class TwoFactorAuthController extends Controller
{
    public function show()
    {
        return view('auth.mfa');
    }

    /**
     * Permet d'activer la double auth
     */
    public function setup(Request $request)
    {
        $mfa = new Google2FA();

        $user_data = $request->user();
        $user_data["google2fa_secret"] = $mfa->generateSecretKey(64);
        $request->session()->flash('user_data', $user_data);

        $qrcode = $mfa->getQRCodeInline(
            config('info.etabDim') . ' ' . config('info.etabName') . ' - Gadia',
            $user_data['login'],
            $user_data['google2fa_secret']
        );

        $appname = config('info.etabDim') . ' ' . config('info.etabName') . ' - Gadia';
        $userlogin = $user_data['login'];
        $secret = $user_data['google2fa_secret'];

        $qrcode = urlencode("otpauth://totp/$userlogin?secret=$secret&issuer=$appname");

        DB::table('users')->where('login', $user_data['login'])->update(['google2fa_secret' => $user_data['google2fa_secret']]);

        Constants::SESSION_AUTH_PASSED;

        return view('common.profile.modules.mfa', [
            'qrimage' => $qrcode,
            'secret' => $secret
        ]);
    }

    public function delete(Request $request)
    {
        if ($request->user()->google2fa_secret != null) {
            DB::table('users')->where('login', $request->user()->login)->update(['google2fa_secret' => null]);

            $request->user()->google2fa_secret = null;

            return redirect()->route('profile')->with([
                'secret' => null,
                'qrimage' => null
            ]);
        } else {
            return back();
        }
    }
}
