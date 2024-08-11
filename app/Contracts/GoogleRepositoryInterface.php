<?php 
namespace App\Contracts;

use App\Models\User;
use \Laravel\Socialite\Contracts\User as AuthUser;
interface GoogleRepositoryInterface {
    public function saveUser(AuthUser $user);
}

