<?php


namespace App\Controllers;

use App\Models\StudentModel;

class PendingStudents extends BaseController
{
    public function pending()
    {
        if (!session()->get('isAdminLoggedIn')) {
            return redirect()->to('admin/login');
        } //newlines

        $studentModel = new StudentModel();
        
        // Fetch active students with pagination (6 entries per page)
        $data = [
            'students' => $studentModel->where('status', 'Pending')->paginate(6),
            'pager' => $studentModel->pager // Pass pagination object to the view
        ];
        
        // Load the view and pass the student data
        return view('pending_students/pending_students', $data);

    }

    public function search()
    {
        // Get the search query from the URL
        $query = $this->request->getGet('query');

        // Initialize the student model
        $studentModel = new StudentModel();

        // Search for students by name (you can adjust this to match the actual column in your database)
        $students = $studentModel->like('fullname', $query)->where('status', 'pending')->findAll();

        // Pass the results and query to the view
        return view('pending_students/pending_students', [
            'students' => $students,
            'query' => $query,
        ]);
    }


  
}