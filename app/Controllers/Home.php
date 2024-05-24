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
    public function contactus()
    {
        // print_r($_POST);die;
        $db = \Config\Database::connect();
        // Check if the request method is POST
      
            // Retrieve form data
            $firstName = $this->request->getPost('first_name');
            $lastName = $this->request->getPost('last_name');
            $email = $this->request->getPost('email');
            $phone = $this->request->getPost('phone');
            $message = $this->request->getPost('message');

            // Insert the data into the database
            $data = [
                'first_name' => $firstName,
                'last_name' => $lastName,
                'email' => $email,
                'phone' => $phone,
                'message' => $message
            ];

            $builder = $db->table('tbl_contact_us');
            $builder->insert($data);

            // Redirect to a success page or display a success message
            return redirect()->to(base_url('success_page'))->with('success', 'Your message has been submitted successfully.');
        } 


}