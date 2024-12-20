<?php


namespace App\Controllers;

// use App\Models\RegisteredStudentsModel;

class StudentProfile extends BaseController
{
    public function profile()
    {
       
        return view('student_profile/student_profile');

    }

  
}
