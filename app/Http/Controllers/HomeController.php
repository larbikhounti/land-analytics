<?php

namespace App\Http\Controllers;

use App\Contracts\UserDtoInterface;
use Inertia\Inertia;
class HomeController extends Controller
{
    public function index(UserDtoInterface $user) {
        return Inertia::render('Show', [
            'user' => $user->getUser()
        ]);
    }
}
