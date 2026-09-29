<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Login - PowerFlow Electric',
            'page' => 'login'
        ];

        return view('login', $data);
    }
}