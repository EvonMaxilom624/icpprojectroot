<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AdminController extends BaseController
{

    public function loginForm()
    {
        return view('admin/adminLogin');
    }

    public function login()
    {

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if ($username === 'admin' && $password === 'password') {
            return redirect()->to('/admin/dashboard'); 
        } else {
            return redirect()->back()->with('error', 'Invalid username or password');
        }
    }

    public function forgotPasswordForm()
    {
        return view('admin/forgot_password');
    }

    public function forgotPassword()
    {

        $email = $this->request->getPost('email');

        return redirect()->to('/admin/login')->with('success', 'Password reset instructions sent to your email.');
    }
    public function dashboard()
    {
        // Logic for admin dashboard
        return view('admin/adminDashboard');
    }

    public function viewOrganizations()
    {
        // Logic to retrieve and display organizations
        $organizationModel = new OrganizationModel();
        $data['organizations'] = $organizationModel->findAll();
        return view('admin/view_organizations', $data);
    }

    public function viewEventReports()
    {
        // Logic to retrieve and display event reports
        $eventReportModel = new EventReportModel();
        $data['eventReports'] = $eventReportModel->findAll();
        return view('admin/view_event_reports', $data);
    }

    public function deleteAccount($userId)
    {
        // Logic to delete user account
        $userModel = new UserModel();
        $userModel->delete($userId);
        return redirect()->back()->with('success', 'Account deleted successfully');
    }

    public function viewAccount($userId)
    {
        // Logic to view user account details
        $userModel = new UserModel();
        $data['user'] = $userModel->find($userId);
        return view('admin/view_account', $data);
    }

    public function updateAccount($userId)
    {
        // Logic to update user account
        // Retrieve input data and update database
        return redirect()->to('/admin/accounts/' . $userId)->with('success', 'Account updated successfully');
    }

    public function manageAccounts()
    {
        // Logic to manage user accounts
        $userModel = new UserModel();
        $data['users'] = $userModel->findAll();
        return view('admin/manage_accounts', $data);
    }

    public function registerOrganization()
    {
        // Logic to register a new organization
        // Retrieve input data and insert into database
        return redirect()->to('/admin/organizations')->with('success', 'Organization registered successfully');
    }
}
