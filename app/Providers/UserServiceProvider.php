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
                    'id' => 1,
                    'name' => 'Maria',
                    'gender' => 'Female',
                ],
                [
                    'id' => 2,
                    'name' => 'Ando',
                    'gender' => 'Male',
                ]
                
            ];
            return new UserService($users);
        });
    }
   
}
