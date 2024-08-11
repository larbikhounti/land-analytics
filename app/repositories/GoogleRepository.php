<?php

namespace App\repositories;

use App\Contracts\GoogleRepositoryInterface;
use App\Models\User;
use \Laravel\Socialite\Contracts\User as AuthUser;

class GoogleRepository implements GoogleRepositoryInterface {
    
    public function saveUser(AuthUser $user){

        return  User::updateOrCreate([
            'email' => $user->email,
        ], [
            'google_id' => $user->id,
            'name' => $user->name,
            'google_token' => $user->token,
            'google_refresh_token' => $user->refreshToken,
            'ad_id' => $user->id
        ]);
    }
}