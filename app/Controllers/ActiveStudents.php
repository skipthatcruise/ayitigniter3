<?php


namespace App\Controllers;

use App\Models\StudentModel;

class ActiveStudents extends BaseController
{
    public function active()
    {
        if (!session()->get('isAdminLoggedIn')) {
            return redirect()->to('admin/login');
        } //newlines

        $studentModel = new StudentModel();

        // Fetch active students with pagination (6 entries per page)
        $data = [
            'students' => $studentModel->where('status', 'Active')->paginate(6),
            'pager' => $studentModel->pager // Pass pagination object to the view
        ];

        // Load the view and pass data
        return view('active_students/active_students', $data);

    }

    public function search()
    {
        // Get the search query from the URL
        $query = $this->request->getGet('query');

        // Initialize the student model
        $studentModel = new StudentModel();

        // Search for students by name (you can adjust this to match the actual column in your database)
        $students = $studentModel->like('fullname', $query)->where('status', 'active')->findAll();

        // Pass the results and query to the view
        return view('active_students/active_students', [
            'students' => $students,
            'query' => $query,
        ]);
    }


  
}
