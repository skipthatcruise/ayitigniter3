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
                'registered_date' => date('Y-m-d'), // Auto set date on registration
               

            ];
                $data['image'] = $this->uploadImage();
                // print_r($data);
               

            if ($model->save($data)) {
                return redirect()->to('/success'); // Redirect to success page on successful save
            } else {
                return 'Error saving data!';
            }

            
       
        
    }

    public function uploadImage(){
         // Handle the image upload
         $file = $this->request->getFile('image');

         if ($file && $file->isValid() && !$file->hasMoved()) {
            // Define the upload path using FCPATH
            $uploadPath = FCPATH . 'uploads/';
                   
            // Generate a unique name for the file
            $fileName = $file->getRandomName();
           
           //  print_r($uploadPath);
           //  exit;
           
            // Move the file to the uploads directory
            $file->move($uploadPath, $fileName);
           
            // Save the public URL to the database
            return base_url('uploads/' . $fileName); // Generate the public UR
           
         }

        

    }

    public function success()
    {
        return view('success');
    }

  
    

  

}
