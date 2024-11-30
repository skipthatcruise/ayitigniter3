<?php


namespace App\Controllers;

use App\Models\PendingStudentsModel;

class PendingStudents extends BaseController
{
    public function pending()
    {
       
        return view('pending_students/pending_students');

    }

    

  
}