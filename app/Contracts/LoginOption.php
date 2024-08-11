<?php
namespace App\Contracts;

interface LoginOption {
    function login();
    function redirect();
}