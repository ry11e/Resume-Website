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
        $password = $this->request->getPost('password');

        // Simple hardcoded password check for now
        if ($password === '12345678') {
            session()->set('isLoggedIn', true);
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
