<?php

namespace App\Services;

use App\Contracts\LoginOption;
use App\Contracts\SocialHandlerInterface;

class SocialHandler implements SocialHandlerInterface
{
    private $socialLogin;
    
    function __construct(LoginOption $socialLogin)
    {
        $this->socialLogin = $socialLogin;
    }

    public function Handlelogin()
    {
        return  $this->socialLogin->login();
    }
    public function HandleRedirect()
    {
        return $this->socialLogin->redirect();
    }
}
