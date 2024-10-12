<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view('organization/forgotPasswordVw');
    }

    public function process()
    {
 
        $email = $this->request->getPost('email');

        session()->setFlashdata('success', 'A password reset link has been sent to your email.');
        return redirect()->to('/forgotpassword');
    }
}
