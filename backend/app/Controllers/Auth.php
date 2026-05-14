<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Auth extends BaseController
{
    public function showLoginForm()
    {
        return view('auth/login');
    }

    public function login()
    {
        $request = service('request');
        $session = session();

        $email = $request->getPost('email');
        $password = $request->getPost('password');

        $userModel = new UsersModel();
        $user = $userModel->where('email', $email)->first();

        if (! $user || ! password_verify($password, $user['password_hash'])) {
            $session->setFlashdata('error', 'Invalid email or password');
            return redirect()->back()->withInput();
        }

        $session->set('username', $user['first_name']);
        $session->set('role', $user['type']);

        return redirect()->to('/');
    }

    public function showSignupForm()
    {
        return view('auth/register');
    }

    public function signup()
    {
        $request = service('request');
        $userModel = new UsersModel();

        $data = [
            'first_name' => $request->getPost('first_name'),
            'last_name'  => $request->getPost('last_name'),
            'email'      => $request->getPost('email'),
            'password_hash' => password_hash($request->getPost('password'), PASSWORD_DEFAULT),
            'type'       => 'client',
            'account_status' => 1,
            'email_activated' => 0,
        ];

        $userModel->insert($data);
        return redirect()->to('/');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
    public function showForgotForm()
    {
        return view('auth/forgot_password');
    }

    public function sendResetLink()
    {
        $email = $this->request->getPost('email');

        // Check if user exists
        $userModel = new \App\Models\UserModel();
        $user = $userModel->where('email', $email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Email not found');
        }
        $token = bin2hex(random_bytes(32));
        return redirect()->to('/login')->with('success', 'Password reset link sent to your email');
    }
}
