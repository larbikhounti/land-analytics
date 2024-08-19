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
        if($this->user){
            return [
                'id' => $this->user->id,
                'name' => $this->user->name,
                'email' => $this->user->email,
                'ad_id' => $this->user->ad_id
            ];
        }
    }
}

