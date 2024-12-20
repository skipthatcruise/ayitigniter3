<?php


namespace App\Controllers;

// use App\Models\RegisteredStudentsModel;

class PendingStudents extends BaseController
{
    public function pending()
    {
       
        return view('pending_students/pending_students');

    }

  
}