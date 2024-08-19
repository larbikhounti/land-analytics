<?php

namespace App\Http\Controllers\Auth;

use App\Contracts\SocialServiceInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AuthController extends Controller
{

   function redirect(Request $request, SocialServiceInterface $socialService)
   {
      return $socialService->redirect($request->socialtype);
   }

   function callback(SocialServiceInterface $socialService)
   {
      if ($socialService->callback()) {
         return Inertia::render('Show', [
            "user" => Auth::user()
         ]);
      }
   }
}
