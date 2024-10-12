<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CalendarController extends BaseController
{
    public function index()
    {
        return view('organization/calendar');
    }

    
    public function fetchEvents()
    {

        $events = [
            ['title' => 'Finals Examination', 'start' => '2024-06-10', "end" => '2024-06-15'],
            ['title' => 'Clearance Week', 'start' => '2024-06-17', "end" => '2024-06-22'],
            ['title' => 'Submition of Organization Files - OSA', 'start' => '2024-06-17', "end" => '2024-06-19']
        ];
        
        return $this->response->setJSON($events);
    }
}
