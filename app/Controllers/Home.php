<?php

namespace App\Controllers;
use App\Models\Admin_Model;

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


        public function userregister()
        {
          $db= \Config\Database::connect();
        //   print_r($_POST);die;

          $username = $this->request->getPost('username');
          $email = $this->request->getPost('email');
          $password = $this->request->getPost('password');

          $data = [
               'username'=> $username,
               'email'=> $email,
               'role' =>'student',
               'password'=> $password
          ];

          $builder = $db->table('tbl_register');
          $builder->insert($data);

          return redirect()->to(base_url('success_page'));
        }

   
        // public function userlogin()
        // {
        //     $model = new Admin_Model();
        //     $where = [
        //         'email' => $this->request->getVar('email'),
        //         'password' => $this->request->getVar('password')      
        //     ];
        //     $result = $model->checkCredentials($where);
        //     // print_r($result);die;
        //     if ($result != '') {
        //         session()->set('user_id', $result['r_id']);
        //         return redirect()->to('Admindasboard');
        //     } else {
        //         session()->setFlashdata('error', 'Invalid credentials');
        //         return redirect()->to(base_url('/')); 
        //     }
        // }
        public function userlogin()
        {
            $model = new Admin_Model();
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');

            // Fetch user by email
            $user = $model->checkCredentials(['email' => $email]);

            if ($user) {
                // Verify the password
                if ($password === $user['password']) { // Change this to password_verify if passwords are hashed
                    // Set session data
                    session()->set('user_id', $user['r_id']);
                    session()->set('username', $user['username']);
                    session()->set('email', $user['email']);
                    session()->set('role', $user['role']);
                    session()->set('logged_in', true);

                    // Redirect based on role
                    if ($user['role'] === 'student') {
                        return redirect()->to(base_url('studentdashboard'));
                    } elseif ($user['role'] === 'Admin') {
                        return redirect()->to(base_url('Admindasboard'));
                    } elseif ($user['role'] === 'faculty') {
                        return redirect()->to(base_url('facultydashboard'));
                    } else {
                        session()->setFlashdata('error', 'Invalid credentials');
                        return redirect()->to(base_url('/')); 
                    }
                } else {
                    session()->setFlashdata('error', 'Invalid password');
                    return redirect()->to(base_url('/'));
                }

            } else {
                session()->setFlashdata('error', 'User not found');
                return redirect()->to(base_url('/'));
            }
        }



        public function submitEnquiry()
        {
            $db = \Config\Database::connect();
               // print_r($_POST);die;
           
                $studentName = $this->request->getPost('studentName');
                $parentsName = $this->request->getPost('parentsName');
                $contactNo = $this->request->getPost('contactNo');
                $email = $this->request->getPost('email');
                $medium = $this->request->getPost('medium');
                $class = $this->request->getPost('class');
                $languages = $this->request->getPost('languages');
                $schoolName = $this->request->getPost('schoolName');
                $age = $this->request->getPost('age');
                $areaOfResidence = $this->request->getPost('areaOfResidence');
    
                $data = [
                    'student_name' => $studentName,
                    'parents_name' => $parentsName,
                    'contact_no' => $contactNo,
                    'email' => $email,
                    'medium' => $medium,
                    'class' => $class,
                    'languages' => $languages,
                    'school_name' => $schoolName,
                    'age' => $age,
                    'area_of_residence' => $areaOfResidence
                ];
   // print_r($_POST);die;
                $builder = $db->table('tbl_enquiry');
                $builder->insert($data);
    
                return redirect()->to('home');
            }
        
    }