<?php

namespace App\Http\Controllers;

use App\Packages\Common\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validatedInput = $this->validate(
            $request,
            [
                'login' => 'required|string',
                'password' => 'required|string',
                'name' => 'required|string',
            ]
        );

        $user = (new User())
            ->setLogin($validatedInput['login'])
            ->setPassword($validatedInput['password'])
            ->setName($validatedInput['name']);
        dd($user);
    }
}
