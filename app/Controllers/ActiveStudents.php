<?php


namespace App\Controllers;

// use App\Models\RegisteredStudentsModel;

class ActiveStudents extends BaseController
{
    public function active()
    {
       
        return view('active_students/active_students');

    }

  
}
