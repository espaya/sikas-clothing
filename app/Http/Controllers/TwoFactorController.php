<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PragmaRX\Google2FA\Google2FA;

class TwoFactorController extends Controller
{
    public function showForms()
    {
        return view('auth.2fa-setup');
    }

    public function verify(Request $request)
    {
        $request->validate([
            'otp' => ['required']
        ]);

        try 
        {
            $user = Auth::user();
            $otp = $request->otp;

            $google2Fa = new Google2FA();

            $window = 5;

            $isValid = $google2Fa->verifyKey($user->two_factor_secret, $otp, $window);

            if($isValid)
            {
                $user->two_factor_secret = null;
                $user->two_factor_enabled = true;
                $user->otp = null;

                $user->save();

                $request->session()->put('2fa:user:id', $user->id);
                $request->session()->put('2fa_verified', true);

                if($user->role == 'ADMIN')
                {
                    return redirect()->route('admin');
                }

                if($user->role == 'CUSTOMER')
                {
                    return redirect()->route('home');
                }

                return redirect()->route('login');
            }

            return redirect()->back()->withErrors(['otp' => 'Invalid confirmation code']);
        }
        catch(Exception $ex)
        {
            return redirect()->back()->withErrors(['otp' => $ex->getMessage()]);
        }
    }

}
