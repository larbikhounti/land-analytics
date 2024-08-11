<?php

namespace App\Services;

use App\Contracts\LoginOption;
use App\Contracts\SocialHandlerInterface;

class SocialHandler implements SocialHandlerInterface
{

    function __construct()
    {
    }

    public function Handlelogin(LoginOption $socialLogin)
    {
        return  $socialLogin->login();
    }
    public function HandleRedirect(LoginOption $socialLogin)
    {
        return $socialLogin->redirect();
    }
}
