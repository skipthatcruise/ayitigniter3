<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function canBark() {
        return view('fiyinview');
    }

    public function login(): string
    {
        return view('welcome_message');
    }
}
