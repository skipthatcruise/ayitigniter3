<?php

namespace App\Controllers;

class Blog extends BaseController{
    public function index(){
        $data = [
            "page_title" => "CodeIgniter 4",
            "page_heading" => "CodeIgniter 4 Views",
            "subjects" => ["PHP", "MYSQL", "AJAX", "BOOTSTRAP","CDN","LARAVEL"]
        ];
  
        echo view("myview", $data);
       
    }
}