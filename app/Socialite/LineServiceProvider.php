<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2017/10/18
 * Time: 上午 10:06
 */


namespace App\Socialite;

use Laravel\Socialite\SocialiteServiceProvider;

class LineServiceProvider extends SocialiteServiceProvider
{
    public function register()
    {
        $this->app->singleton('Laravel\Socialite\Contracts\Factory',function($app){
            return new LineManager($app);
        });
    }
}