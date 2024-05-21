<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }
    public function Contact()
    {
        return view('contact_us');
    }
    public function aboutus()
    {
        echo view('aboutus');
    }
  
  
}
