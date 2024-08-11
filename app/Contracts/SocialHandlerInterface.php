<?php
namespace App\Contracts;

interface SocialHandlerInterface{
    public function Handlelogin(LoginOption $loginOption);
    public function HandleRedirect(LoginOption $loginlLogin);
}