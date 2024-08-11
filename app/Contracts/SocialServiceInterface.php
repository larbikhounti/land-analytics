<?php
namespace App\Contracts;

interface SocialServiceInterface{
    public function redirect($socialtype);
    public function callback();
}