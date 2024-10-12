<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ActivityRequestController extends BaseController
{
    public function index()
    {
   
        return view('organization/ActivityRequest');
    }

    public function submit()
    {
        // Validate form data
        $validationRules = [
            'title' => 'required',
            'participants' => 'required',
            'when' => 'required',
            'where' => 'required',
            'budget' => 'required|numeric',

        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }


        $title = $this->request->getPost('title');
        $participants = $this->request->getPost('participants');
        $when = $this->request->getPost('when');
        $where = $this->request->getPost('where');
        $budget = $this->request->getPost('budget');

        return redirect()->to('/activity-request-success')->with('success', 'Activity request submitted successfully!');
    }
    public function success()
    {

        return view('organization/activity_request');
    }
}
