<?php


namespace App\Controllers;

use App\Models\StudentModel;

class Dashboard extends BaseController
{
    public function dash()
    {
        $studentModel = new StudentModel();

       
        $data['students'] = $studentModel->getThreeStudentNames();
    
        
        return view('dashboard/dashboard', $data);
    }
  
}





