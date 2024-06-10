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
    public function our_courses()
    {
         echo view('our_courses');
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
    public function abroadstudent()
    {
         echo view('abroadstudent');
    }
    public function schoolstudent()
    {
         echo view('schoolstudent');
    }
    public function career()
    {
         echo view('career');
    }
    public function cart()
    {
         echo view('cart');
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
            return redirect()->to(base_url('register'))->with('success', 'Your message has been submitted successfully.');
        } 


        public function userregister()
        {
          $db= \Config\Database::connect();
        //   print_r($_POST);die;

        $username = $this->request->getPost('username');
        $age = $this->request->getPost('age');
        $gender = $this->request->getPost('gender');
        $email = $this->request->getPost('email');
        $mobile = $this->request->getPost('mobile');
        $visitcountry = $this->request->getPost('visitcountry');
        $school_grade = $this->request->getPost('school_grade');
        $schoolname = $this->request->getPost('schoolname');
        $selectedLanguages = $this->request->getPost('selectedLanguages');
        $state = $this->request->getPost('state');
        $city = $this->request->getPost('city');
        $area = $this->request->getPost('area');
        $password = $this->request->getPost('password');
        $studentType = $this->request->getPost('student_type'); 
    
        $data = [
            'username' => $username,
            'age' => $age,
            'gender' => $gender,
            'email' => $email,
            'phone' => $mobile,
            'visit_country' => $visitcountry,
            'school_grade' => $school_grade,
            'school_name' => $schoolname,
            'language_known' => $selectedLanguages,
            'state' => $state,
            'city' => $city,
            'area' => $area,
            'role' => 'student',
            'student_type' => $studentType, 
            'password' => $password
        ];
          $builder = $db->table('tbl_register');
          $builder->insert($data);


          return redirect()->to(base_url('/'));

          return redirect()->to(base_url('checkout'));

        }
            public function checkout()
            {
                if (!session()->has('user_id')) {
                    // If user is not logged in, redirect to the login page
                    // Also, store the intended URL in the session to redirect back after successful login
                    session()->set('intended_url', 'checkout');
                    return redirect()->to(base_url('loginpage'));
                }
            
                // If user is logged in, show the checkout page
                return view('checkout');
            }
        
        


        public function internal_register()
        {
            $db = \Config\Database::connect();
            
            $username = $this->request->getPost('username');
            $parentname = $this->request->getPost('parentname');
            $email = $this->request->getPost('email');
            $mobile = $this->request->getPost('mobile');
            $age = $this->request->getPost('age');
            $school_grade = $this->request->getPost('school_grade');
            $gender = $this->request->getPost('gender');
            $schoolname = $this->request->getPost('schoolname');
            $selectedLanguages = $this->request->getPost('selectedLanguages');
            $state = $this->request->getPost('state');
            $city = $this->request->getPost('city');
            $area = $this->request->getPost('area');
            $password = $this->request->getPost('password');
            $studentType = $this->request->getPost('student_type');

            $data = [
                'username' => $username,
                'parentname' => $parentname,
                'email' => $email,
                'phone' => $mobile,
                'age' => $age,
                'school_grade' => $school_grade,
                'gender' => $gender,
                'school_name' => $schoolname,
                'language_known' => $selectedLanguages,
                'state' => $state,
                'city' => $city,
                'area' => $area,
                'role' => 'student',
                'student_type' => $studentType,
                'password' => $password
            ];

            $builder = $db->table('tbl_register');

            if ($builder->insert($data)) {
                session()->setFlashdata('success', 'Data uploaded successfully.');
            } else {
                session()->setFlashdata('error', 'Data could not be uploaded successfully.');
            }

            return redirect()->to(base_url('/'));
        }


        protected function isLoggedIn()
    {
        return session()->has('user_id');
    }
   
     


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

                // Check if there's an intended URL and redirect to it
                $intendedUrl = session()->get('intended_url');
                print_r($intendedUrl);die;
                if ($intendedUrl) {
                    session()->remove('intended_url');
                    return redirect()->to(base_url($intendedUrl));
                }
                echo '<pre>';print_r($intendedUrl);die;

                // Redirect based on role
                if ($user['role'] === 'student') {
                    return redirect()->to(base_url('studentdashboard'));
                } elseif ($user['role'] === 'Admin') {
                    return redirect()->to(base_url('Admindasboard'));
                } elseif ($user['role'] === 'faculty') {
                    return redirect()->to(base_url('Facultydashboard'));
                } else {
                    session()->setFlashdata('error', 'Invalid credentials');
                    return redirect()->to(base_url('/checkout'));
                }
            } else {
                session()->setFlashdata('error', 'Invalid password');
                return redirect()->to(base_url('/checkout'));
            }
        } else {
            session()->setFlashdata('error', 'User not found');
            return redirect()->to(base_url('/checkout'));
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

            public function School_register()
            {
                echo view('School_register');
            }
    }