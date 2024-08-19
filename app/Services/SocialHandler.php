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
        try {
            return  $this->socialLogin->login();
        } catch (\Throwable $th) {
            return redirect('/');
        }
        
    }
    public function HandleRedirect()
    {
        return $this->socialLogin->redirect();
    }
}
