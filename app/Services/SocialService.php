<?php

namespace App\Services;

use App\Contracts\SocialHandlerInterface;
use App\Contracts\SocialServiceInterface;

use App\Services\LoginOptions\google;

class SocialService implements SocialServiceInterface {

  
    public function __construct(SocialHandlerInterface $socialHandler)
    {
       $this->socialHandler = $socialHandler;
    }

   public function redirect($socialtype) {
        session(['social_type' => $socialtype]);

        switch ($socialtype) {
            case 'google':
                return  $this->socialHandler->HandleRedirect(new google);

            default:
                return redirect('/');
        }
    }

    public function callback() {

        $socialtype = session('social_type');
        
        if (!$socialtype) {
            return redirect('/');
        }

        switch ($socialtype) {
            case 'google':
               $this->socialHandler->Handlelogin(new google());
            default:
                return redirect('/');
        }
    }
}