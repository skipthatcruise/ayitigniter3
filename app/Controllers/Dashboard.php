<?php


namespace App\Controllers;

use App\Models\StudentModel;

class Dashboard extends BaseController
{
    public function dash()
    {
        if (!session()->get('isAdminLoggedIn')) {
            return redirect()->to('admin/login');
        } //newlines
    
        $studentModel = new StudentModel();
        
        // Fetch only the first 3 pending students
        $data['students'] = $studentModel->where('status', 'Pending')->limit(3)->find();

        $totalActiveStudents = $studentModel->where('status', 'active')->countAllResults();

        $totalPendingStudents = $studentModel->where('status', 'pending')->countAllResults();

        $data['totalActiveStudents'] = $totalActiveStudents;

        $data['totalPendingStudents'] = $totalPendingStudents;

        
        // Load the view and pass the student data 
        return view('dashboard/dashboard', $data );
    }
  
}





