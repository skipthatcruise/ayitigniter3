<?php


namespace App\Controllers;

use App\Models\RegisteredStudentsModel;
use App\Models\PendingStudentsModel;

class PendingStudents extends BaseController
{
    public function pendingg()
    {
       
        return view('pending_students/pending_students');

    }

    public function pending()
    {
        $registeredModel = new RegisteredStudentsModel();
        $pendingModel = new PendingStudentsModel();

        // Fetch data from `registered_students` table
        $registeredStudents = $registeredModel->findAll();

        foreach ($registeredStudents as $student) {
            // Check if the student already exists in `pending_students`
            $exists = $pendingModel->where('email', $student['email'])->first();

            // Insert into `pending_students` if not already present
            if (!$exists) {
                $pendingModel->insert([
                    'fullname'        => $student['fullname'],
                    'phonenumber'     => $student['phonenumber'],
                    'address'         => $student['address'],
                    'email'           => $student['email'],
                    'gender'          => $student['gender'],
                    'literacy'        => $student['literacy'],
                    'guardian_phone'  => $student['guardian_phone'],
                    'guardian_address'=> $student['guardian_address'],
                    'story'           => $student['story'],
                    'registered_date' => $student['registered_date'],
                    'status'          => $student['status'],
                    
                ]);
            }
        }

        // Fetch data from `pending_students` to display
        $data['students'] = $pendingModel->findAll();

        

        // Pass data to the view
        return view('pending_students/pending_students', $data);
    }
    

  
}