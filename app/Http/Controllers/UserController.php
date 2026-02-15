<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $users = [
            ['name' => 'Emman L',
            'gender' => 'Male'],
            
            ['name' => 'Joy B',
            'gender' => 'Female']

        ];
           return response()->json($users);
    }
    public function index(UserService $userService)
    {
      return $userService->listUsers();
    }
}