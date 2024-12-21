<?php


namespace App\Controllers;

use App\Models\StudentModel;

class InactiveStudents extends BaseController
{
    public function inactive()
    {
        $studentModel = new StudentModel();

        // Fetch active students
        $data['students'] = $studentModel->where('status', 'Inactive')->findAll();

        // Load the view and pass data
        return view('inactive_students/inactive_students', $data);
       

    }

  
}
