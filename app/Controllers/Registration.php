<?php


namespace App\Controllers;

use App\Models\RegisteredStudentsModel;

class Registration extends BaseController
{
    public function reg()
    {
       
        return view('registration/registration');

    }

    public function save()
    {
        // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //     echo 'POST request received!';
        // } else {
        //     echo 'This is not a POST request.';
        // }
      
      


        $model = new RegisteredStudentsModel();

        //form validation
       
            $data = [
                'fullname' => $this->request->getPost('fullname'),
                'phonenumber' => $this->request->getPost('phonenumber'),
                'address' => $this->request->getPost('address'),
                'email' => $this->request->getPost('email'),
                'gender' => $this->request->getPost('gender'),
                'literacy' => $this->request->getPost('literacy'),
                'guardian_phone' => $this->request->getPost('guardian_phone'),
                'guardian_address' => $this->request->getPost('guardian_address'),
                'story' => $this->request->getPost('story'),
                'registered_date' => date('Y-m-d') // Auto set date on registration
            ];

            if ($model->save($data)) {
                return redirect()->to('/success'); // Redirect to success page on successful save
            } else {
                return 'Error saving data!';
            }
       
        
    }
    public function success()
    {
        return view('success');
    }

}


