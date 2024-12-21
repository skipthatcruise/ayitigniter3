<?php


namespace App\Controllers;

use App\Models\StudentModel;

class ActiveStudents extends BaseController
{
    public function active()
    {
        $studentModel = new StudentModel();

        // Fetch active students
        $data['students'] = $studentModel->where('status', 'Active')->findAll();

        // Load the view and pass data
        return view('active_students/active_students', $data);

    }

  
}
