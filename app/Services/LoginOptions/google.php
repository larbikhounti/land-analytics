<?php


namespace App\Services\LoginOptions;

use App\Contracts\LoginOption;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class google implements LoginOption
{

    function __construct()
    {
    }
    function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    function Login()
    {
        $googleUser = Socialite::driver('google')->user();

        $user = User::updateOrCreate([
            'email' => $googleUser->email,
        ], [
            'google_id' => $googleUser->id,
            'name' => $googleUser->name,
            'google_token' => $googleUser->token,
            'google_refresh_token' => $googleUser->refreshToken,
            'ad_id' => $googleUser->id
        ]);
        
        $isLogged = Auth::login($user, true);
        if($isLogged){
            return  redirect("/")->status(200);
        }
        
    }
}
