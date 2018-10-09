<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Laravel\Socialite\Contracts\Factory as Socialite;

class SocialController extends Controller
{

    protected $socialite;

    public function __construct(Socialite $socialite)
    {
        $this->socialite = $socialite;
    }

    function redirect(){
        return $this->socialite->driver('line')->redirect();
    }

    function callback(){
        $user = $this->socialite->driver('line')->user();
        var_dump($user);
    }
}
