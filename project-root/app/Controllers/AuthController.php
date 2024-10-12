<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function logoutConfirmation()
    {
        $referrer = $this->request->getServer('HTTP_REFERER') ?? '/dashboard';
        return view('logout_confirmation', ['referrer' => $referrer]);
    }

    public function logout()
    {
        // Destroy session and perform logout
        session()->destroy();
        return redirect()->to('/');
    }
}
