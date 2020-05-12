<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use App\User;
use Auth;

class SocialAuthController extends Controller
{
    //
    public function loginGoogleCallback(Request $request){
        $googleUSer = Socialite::driver('Google')->user();
        if(!$googleUSer){
            return 'Cannot Authenticate!';
        }

        $systemUser = User::where('google_id', $googleUSer->id)->get()->first();

        // Chua co tren he thong

        if(!$systemUser){
            $systemUser = User::Create([
                'name' => $googleUSer->name,
                'email' => $googleUSer->email,
                'google_id' => $googleUSer->id,
            ]);
        }

        return $this->loginAndRedirect($systemUser);
    }

    public function loginFacebookCallback(Request $request){
        $facebookUSer = Socialite::driver('Facebook')->user();
        if(!$facebookUSer){
            return 'Cannot Authenticate!';
        }

        $systemUser = User::where('facebook_id', $facebookUSer->id)->get()->first();
        // Chua co tren he thong
        if(!$systemUser){
            $systemUser = User::Create([
                'name' => $facebookUSer->name,
                'email' => ($facebookUSer->email) ?? '',
                'facebook_id' => $facebookUSer->id,
            ]);
        }
        return $this->loginAndRedirect($systemUser);
    }

    protected function loginAndRedirect($systemUser){
        Auth::loginUsingId($systemUser->id);
        
        if(Auth::user()->role->name == 'admin'){
            $routeTo = 'adminDashboard';
        }else{
            $routeTo = 'userIndex';
        }
        return redirect()->route($routeTo);
    }
}
