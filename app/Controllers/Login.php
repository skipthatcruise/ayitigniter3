<?php


namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\StudentModel;

class Login extends BaseController
{
    public function login()
    { 
        return view('login/login');
    }

 

    public function authenticate()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $model = new AdminModel();
        $admin = $model->where('email', $email)->first();

      

        if ($admin && $password === $admin['password']) {
            // Set session data
            session()->set([
                'admin_email' => $admin['email'],
                'isAdminLoggedIn' => true,
            ]);

            // return view('dashboard/dashboard');

            return redirect()->to('/dashboard');
          
        } else{
            // return redirect()->back()->with('error', 'Invalid username or password.');
            // echo ("Email or password is incorrect");
            // return redirect()->to('admin/login');

              // Set flashdata for incorrect username or password
            session()->setFlashdata('loginError', 'Incorrect username or password');
            return redirect()->to('admin/login');


        }

       
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('admin/login');
    }
  
}





