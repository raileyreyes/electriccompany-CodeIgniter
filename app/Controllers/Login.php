<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function authenticate()
    {
        $userModel = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $userModel
            ->where('username', $username)
            ->first();


        if ($user && password_verify($password, $user['password'])) {

            session()->set([
                'user_id'   => $user['id'],
                'username'  => $user['username'],
                'logged_in' => true
            ]);

            return redirect()->to('/dashboard');
        }

        return redirect()->back()
            ->with('error', 'Invalid username or password.');
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login');
    }
}