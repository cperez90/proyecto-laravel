<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisteredUserController
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(){

    }
}
