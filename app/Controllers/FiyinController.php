<?php

namespace App\Controllers;
use App\Models\User;

class FiyinController extends BaseController
{
    public function register() {
        return view('fiyinview');
    }
    public function save() {
        $data = [
            "firstname"=>$this->request->getpost("fname"),
            "lastname"=>$this->request->getpost("lname"),
            "emailaddress"=>$this->request->getpost("email"),
            "password"=>$this->request->getpost("password"),
            
        ];
        $modelUser = new User();
        $saving = $modelUser->insert($data);
        // if(!$saving){
        //     return redirect_back()->withinput;
        // }else{
        //     return view("fiyinview");
        // }
    }

}