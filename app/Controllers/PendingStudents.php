<?php


namespace App\Controllers;

use App\Models\StudentModel;

class PendingStudents extends BaseController
{
    public function pending()
    {
        if (!session()->get('isAdminLoggedIn')) {
            return redirect()->to('admin/login');
        } //newlines

        $studentModel = new StudentModel();
        
        // Fetch pending students (assuming status column tracks 'Pending')
        $data['students'] = $studentModel->where('status', 'pending')->findAll();
        
        // Load the view and pass the student data
        return view('pending_students/pending_students', $data);

    }


  
}