<?php

namespace App\Controllers; 

use CodeIgniter\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('organization/loginVw');
    }

    public function process()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if ($username === 'user' && $password === 'user') {
            session()->setFlashdata('success', 'Login successful.');
            return redirect()->to('/dashboard');
        } else {
            session()->setFlashdata('error', 'Invalid username or password.');
            return redirect()->to('/login');
        }
    }
}
