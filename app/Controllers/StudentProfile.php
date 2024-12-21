<?php


namespace App\Controllers;

use App\Models\StudentModel;

class StudentProfile extends BaseController
{
    public function profile($id)
    {
        $studentModel = new StudentModel();


        // Fetch student by ID
        $data['student'] = $studentModel->find($id);

        if ($data['student']) {
            return view('student_profile/student_profile', $data);
        } else {
            // Handle case when student is not found
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Student not found');
        }

    }


    public function approve($id) {
        $studentModel = new StudentModel();

        // Update the student's status to 'Active'
        $studentModel->update($id, ['status' => 'Active']);

        // Redirect back to a page (e.g., the dashboard or profile page)
        return redirect()->to(base_url('student_profile/' . $id))->with('success', 'Student approved successfully');
    }

    public function decline($id) {
        $studentModel = new StudentModel();

        // Update the student's status to 'Inactive'
        $studentModel->update($id, ['status' => 'Inactive']);

        // Redirect back to a page (e.g., the dashboard or profile page)
        return redirect()->to(base_url('student_profile/' . $id))->with('success', 'Student declined successfully');
    }
  
}
