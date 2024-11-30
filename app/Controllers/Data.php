<?php
namespace App\Controllers;
use \CodeIgniter\View\Table;

class Data extends BaseController
{
    public function index()
    {
        $table = new Table();
        $data = [
            ['Name', 'City', 'State'],
            ['John', 'Lagos', 'Lagos'],
            ['Chilo', 'Mowe', 'Ogun'],
            ['Naza', 'Ukoro', 'Kwara']

        ];
        // 
        echo $table->generate($data);
    }
}