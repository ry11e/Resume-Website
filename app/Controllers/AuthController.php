<?php

namespace App\Controllers;

class AuthController extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function attemptLogin()
    {
        
        $db = \Config\Database::connect();
        $passwordInput = $this->request->getPost('password');

        // 1. Fetch the single user record (ID 1)
        $user = $db->table('users')->where('id', 1)->get()->getRow();

        // 2. Check if user exists and verify password
        // Using password_verify handles the decryption logic
        if ($user && password_verify($passwordInput, $user->password)) {
            session()->set([
                'isLoggedIn' => true,
                'user_id'    => $user->id,
                'user_name'  => $user->first_name // Optional convenience
            ]);
            return redirect()->to(base_url('resume'));
        }

        return redirect()->to(base_url('resume'))->with('error', 'Wrong password!');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('resume'));
    }
}
