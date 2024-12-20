<?php


namespace App\Controllers;

// use App\Models\RegisteredStudentsModel;

class InactiveStudents extends BaseController
{
    public function inactive()
    {
       
        return view('inactive_students/inactive_students');

    }

  
}
