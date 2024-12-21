<?php


namespace App\Controllers;

use App\Models\StudentModel;

class Dashboard extends BaseController
{
    public function dash()
    {
    
        $studentModel = new StudentModel();
        
        // Fetch only the first 3 pending students
        $data['students'] = $studentModel->where('status', 'Pending')->limit(3)->find();
        
        // Load the view and pass the student data 
        return view('dashboard/dashboard', $data);
    }
  
}





