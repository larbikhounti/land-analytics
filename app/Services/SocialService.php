<?php

namespace App\Services;

use App\Contracts\SocialHandlerInterface;
use App\Contracts\SocialServiceInterface;

class SocialService implements SocialServiceInterface
{

    private $socialHandler;

    public function __construct(SocialHandlerInterface $socialHandler)
    {
        $this->socialHandler = $socialHandler;
    }

    public function redirect($socialtype)
    {
        session(['social_type' => $socialtype]);
        return  $this->socialHandler->HandleRedirect();
    }

    public function callback()
    {

        return $this->socialHandler->Handlelogin();
    }
}
