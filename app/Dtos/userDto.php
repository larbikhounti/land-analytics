<?php 
namespace App\Dtos;

use App\Contracts\UserDtoInterface;
use Illuminate\Support\Facades\Auth;
 class userDto  implements UserDtoInterface
{
   protected $user ;
    function __construct()
    {
        $this->user =  Auth::user();
    }
    function GetUser() {
   
        if(Auth::user()){
          $user = Auth::user();
            return [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'ad_id' => $user->ad_id
            ];
        }
    }
}

