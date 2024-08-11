<?php


namespace App\Services\LoginOptions;

use App\Contracts\GoogleRepositoryInterface;
use App\Contracts\LoginOption;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class google implements LoginOption
{
    private $googleRepository;

    public function  __construct(GoogleRepositoryInterface $googleRepository)
    {
        $this->googleRepository = $googleRepository;
    }
    function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    function Login()
    {
        $gUser = Socialite::driver('google')->user();

        $user = $this->googleRepository->saveUser($gUser);

        Auth::login($user, true);

        return  Auth::check();
        
    }
}
