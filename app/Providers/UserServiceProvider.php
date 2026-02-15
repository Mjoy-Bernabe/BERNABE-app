<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\UserService;


class UserServiceProvider extends ServiceProvider
{
    public function register(): void
    {
         $this->app->singleton(UserService::class, function ($app) {
            $users = [
                [
                    'name' => 'Maria',
                    'age' => 20, 
                ],
                [
                    'name' => 'Ando',
                    'age' => 20, 
                ],
            ];
            return new UserService($users);
        });
    }
   
}
