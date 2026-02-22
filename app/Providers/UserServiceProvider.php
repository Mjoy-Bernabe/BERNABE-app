<?php

namespace App\Providers;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;


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
                ]
                
            ];
            return new UserService($users);
        });
    }
   
}
