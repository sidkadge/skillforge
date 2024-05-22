<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }
    public function about()
    {
         echo view('aboutus');
    }
    public function typrography()
    {
         echo view('typrography');
    }
    public function contact_us()
    {
         echo view('contact_us');
    }
    public function register()
    {
         echo view('register');
    }
    public function login()
    {
         echo view('login');
    }
}
