<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Laravel\Socialite\Facades\Socialite;



class LoginController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *c
     * @var string
     */
    protected $redirectTo = '/home';



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    /**
     * Redirect the user to the facebook authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from facebook.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
       $user = Socialite::driver('facebook')->user();
       var_dump($user);

     }

   /* public function redirect(){
        return Socialite::driver('line')->redirect();
    }

    public function callback(){
        $user = Socialite::driver('line')->user();
        var_dump($user);
    }*/

}


