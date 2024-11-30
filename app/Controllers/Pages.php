<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class Pages extends BaseController
{
public function index()
{
return view('welcome_message');
}
public function view($page = 'home')
{
    if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
    }
    return view('pages/' . $page);
}
}