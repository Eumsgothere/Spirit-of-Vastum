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

        $userModel = new \App\Models\UsersModel();
        $user = $userModel->where('email', $email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Email not found');
        }

        $token = bin2hex(random_bytes(32));
        $expires = date('Y-m-d H:i:s', strtotime('+1 hour'));

        $resetModel = new \App\Models\ResetTokenModel();
        $resetModel->insert([
            'user_id'    => $user['id'],
            'token'      => $token,
            'expires_at' => $expires,
        ]);


        $resetLink = base_url("reset-password/$token");

        $emailService = \Config\Services::email();
        $emailService->setTo($user['email']);
        $emailService->setSubject('Password Reset Request');
        $emailService->setMessage("
        <p>Hello {$user['first_name']},</p>
        <p>You requested a password reset. Click the link below to set a new password:</p>
        <p><a href='{$resetLink}'>{$resetLink}</a></p>
        <p>This link will expire in 1 hour.</p>
    ");

        if ($emailService->send()) {
            return redirect()->to('/login')->with('success', 'Password reset link sent to your email');
        } else {
            return redirect()->back()->with('error', 'Unable to send email. Please try again.');
        }
    }

    public function showResetForm($token)
    {
        return view('auth/reset_password', ['token' => $token]);
    }

    public function resetPassword($token)
    {
        $resetModel = new \App\Models\ResetTokenModel();
        $record = $resetModel->where('token', $token)->first();

        if (!$record || strtotime($record['expires_at']) < time()) {
            return redirect()->to('/login')->with('error', 'Invalid or expired token');
        }

        $newPassword = $this->request->getPost('password');
        $userModel = new \App\Models\UsersModel();
        $userModel->update($record['user_id'], [
            'password_hash' => password_hash($newPassword, PASSWORD_DEFAULT),
        ]);

        $resetModel->delete($record['id']); // invalidate token

        return redirect()->to('/login')->with('success', 'Password updated successfully');
    }
}
