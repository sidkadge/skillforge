<?php

namespace App\Controllers;
use App\Models\Admin_Model;
class AdminController extends BaseController
{
    public function Admindasboard()
    {
        $session = \Config\Services::session();
        if (!$session->has('user_id')) {
            return redirect()->to('/');
        }

        $model = new Admin_Model();
        $data['studentList'] = $model->getstudentlist();
        $data['studentCount'] = !empty($studentList) ? count($studentList) : 0;

     

        echo view('Admin/Admindasboard', $data);
    }


   public function Studentdashboard()
   {
      $model = new Admin_Model;
      $data['studentlist'] = $model->getstudentlist();
      echo view('student/Studentdashboard');
   }

   public function uplodefiles()
   {
      echo view('student/uploadmedia');
   }

    public function upload_img()
    {
        $db = \Config\Database::connect();
        $this->session = \Config\Services::session();
        $model = new Admin_Model();

   
        $imageFile = $this->request->getFile('input_image');

        if ($imageFile && $imageFile->isValid() && $imageFile->getClientMimeType() && strpos($imageFile->getClientMimeType(), 'image') !== false && !$imageFile->hasMoved()) {
            $imageName = $imageFile->getRandomName();

            try {
                $imageFile->move(ROOTPATH . 'public/uploads/student/Images', $imageName);
            } catch (FileException $e) {
                return redirect()->back()->with('error', 'Failed to upload image.');
            }

            $student_id = $this->session->get('user_id');
            
            $faculty_id =$model->getasignfacultyid($student_id);
            // print_r($faculty_id);die;
            $data = [
                'image_name' => $imageName,
                'student_id' => $student_id,
                'assign_teacher_id'=>$faculty_id,
            ];

            $builder = $db->table('upload_img');
            $builder->insert($data);

            session()->setFlashdata('success', 'image uploaded successfully.');
             return redirect()->to('uploadmedia');
             session()->setFlashdata('error', 'Invalid file or file upload failed.');
          
            return redirect()->to('uploadmedia');
        }
    }

    public function upload_video()
    {       
        $db = \Config\Database::connect();
        $this->session = \Config\Services::session();
        $model = new Admin_Model();
        $videoFile = $this->request->getFile('input_video');
        // Check if a file was uploaded and if it's a video
        if ($videoFile && $videoFile->isValid() && $videoFile->getClientMimeType() && strpos($videoFile->getClientMimeType(), 'video') !== false && !$videoFile->hasMoved()) {
            $videoName = $videoFile->getRandomName();
    
            try {
                $videoFile->move(ROOTPATH . 'public/uploads/student/Videos', $videoName);
            } catch (FileException $e) {
                return redirect()->back()->with('error', 'Failed to upload video.');
            }
    
            $student_id = $this->session->get('user_id');
            $faculty_id =$model->getasignfacultyid($student_id);
            $data = [
                'video_name' => $videoName,
                'student_id' => $student_id,
                'assign_teacher_id'=>$faculty_id,
            ];
    
            $builder = $db->table('upload_video');
            $builder->insert($data);

            session()->setFlashdata('success', 'video uploaded successfully.');
            return redirect()->to('uploadmedia');
            session()->setFlashdata('error', 'Invalid file or file upload failed.');
         
           return redirect()->to('uploadmedia');
        }
    }

    public function upload_doc()
    {
        $db = \Config\Database::connect();
    
        $DocFile = $this->request->getFile('input_doc');
        $model = new Admin_Model();
        // Define allowed MIME types
        $allowedMimeTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
    
        if ($DocFile && $DocFile->isValid() && in_array($DocFile->getClientMimeType(), $allowedMimeTypes) && !$DocFile->hasMoved()) {
            $DocName = $DocFile->getRandomName();
    
            try {
                $DocFile->move(ROOTPATH . 'public/uploads/student/Doc', $DocName);
            } catch (FileException $e) {
                return redirect()->back()->with('error', 'Failed to upload document');
            }
    
            $session = \Config\Services::session();
            $student_id = $session->get('user_id');
            $faculty_id =$model->getasignfacultyid($student_id);
            $data = [
                'Doc_name' => $DocName,
                'student_id' => $student_id,
                'assign_teacher_id'=>$faculty_id,
            ];
    
            $builder = $db->table('upload_doc');
            $builder->insert($data);
    
            session()->setFlashdata('success', 'Document uploaded successfully.');
            return redirect()->to('uploadmedia');
        } else {
            session()->setFlashdata('error', 'Invalid file or file upload failed. Please upload a PDF, DOC, or DOCX file.');
            return redirect()->back()->withInput(); // Redirect back with input if needed
        }
    }
    
    public function Studentimages()
{
    $db = \Config\Database::connect();
    $this->session = \Config\Services::session();
    $model = new Admin_Model();
    $student_id = $this->session->get('user_id');
    $faculty_id = $model->getasignfacultyid($student_id);
    $wherecond = array('student_id' => $student_id, 'is_deleted' => 'N');
    $data['facultyuplodedimg'] = $model->getalldata('tbl_upload_img', $wherecond);
    $builder = $db->table('tbl_register');
    $builder->select('username'); 
    $builder->where('r_id', $student_id);
    $student = $builder->get()->getRowArray();
    if ($student) {
        $student_name = $student['username'];
    } else {
        $student_name = 'Unknown';
    }
    foreach ($data['facultyuplodedimg'] as &$img) {
        $img['student_name'] = $student_name;
    }
    // echo '<pre>'; print_r($data['facultyuplodedimg']); die;
    echo view('student/Studentimages', $data);
}

public function Studentvideos()
{
    $db = \Config\Database::connect();
    $this->session = \Config\Services::session();
    $model = new Admin_Model();
    $student_id = $this->session->get('user_id');
    $faculty_id = $model->getasignfacultyid($student_id);
    $wherecond = array('student_id' => $student_id, 'is_deleted' => 'N');
    $data['facultyuplodedimg'] = $model->getalldata('tbl_upload_video', $wherecond);
    $builder = $db->table('tbl_register');
    $builder->select('username'); 
    $builder->where('r_id', $student_id);
    $student = $builder->get()->getRowArray();
    if ($student) {
        $student_name = $student['username'];
    } else {
        $student_name = 'Unknown';
    }
    foreach ($data['facultyuplodedimg'] as &$img) {
        $img['student_name'] = $student_name;
    }
    // echo '<pre>'; print_r($data['facultyuplodedimg']); die;
    echo view('student/Studentvideos', $data);
}
 
public function Studentdoc()
{
    $db = \Config\Database::connect();
    $this->session = \Config\Services::session();
    $model = new Admin_Model();
    $student_id = $this->session->get('user_id');
    // print_r($_SESSION);die;
    $faculty_id = $model->getasignfacultyid($student_id);
    $wherecond = array('student_id' => $student_id, 'is_deleted' => 'N');
    $data['facultyuplodedimg'] = $model->getalldata('tbl_upload_doc', $wherecond);
    // echo '<pre>'; print_r($data['facultyuplodedimg']); die;

    $builder = $db->table('tbl_register');
    $builder->select('username'); 
    $builder->where('r_id', $student_id);
    $student = $builder->get()->getRowArray();
    if ($student) {
        $student_name = $student['username'];
    } else {
        $student_name = 'Unknown';
    }
    foreach ($data['facultyuplodedimg'] as &$img) {
        $img['student_name'] = $student_name;
    }
    // echo '<pre>'; print_r($data['facultyuplodedimg']); die;
    echo view('student/Studentdoc', $data);
}

   public function addAbroadclass()
{
    $model = new Admin_Model();
    $wherecond = array('is_deleted' => 'N');
    $data['abroad_class'] = $model->getalldata('tbl_abroad_class', $wherecond);
    $menu_id = $this->request->getUri()->getSegment(2);
    $wherecond1 = array('is_deleted' => 'N', 'ab_id' => $menu_id);
    $data['single_data'] = $model->get_single_data('tbl_abroad_class', $wherecond1);
    echo view('Admin/addabroadclass', $data);
}
public function abroadclasslist()
{
    $model = new Admin_Model();
    $wherecond = array('is_deleted' => 'N');
    $data['abroad_class'] = $model->getalldata('tbl_abroad_class', $wherecond);
    echo view('Admin/abroadclasslist',$data);
}

public function setabrordclassname() {

    $abrordclassname = $this->request->getPost('abrordclassname');
    $data = [
        'abrordclassname' => $abrordclassname
    ];
    
    $db = \Config\Database::connect();
    $mainTaskTable = $db->table('tbl_abroad_class');
    $existingTask = $mainTaskTable->where('abrordclassname', $abrordclassname)->get()->getFirstRow();
    if ($existingTask && ($this->request->getVar('id') == "" || $existingTask->ab_id  != $this->request->getVar('id'))) {
        session()->setFlashdata('error', 'Task name already exists.');
        return redirect()->to('add_abroadclass');
    }
    if ($this->request->getVar('id') == "") {
        $add_data = $db->table('tbl_abroad_class');
        $add_data->insert($data);
        session()->setFlashdata('success', 'data added successfully.');
        return redirect()->to('abroadclasslist');
    } else {
        $update_data = $db->table('tbl_abroad_class')->where('ab_id', $this->request->getVar('id'));
            $update_data->update($data);
            session()->setFlashdata('success', 'data updated successfully.');
            return redirect()->to('abroadclasslist');
    }

    return redirect()->to(base_url('add_abroadclass'));
  
    }


    public function delete()
{
    $ab_id = $this->request->getPost('ab_id');
    $table = $this->request->getPost('table_name');
    $data = ['is_deleted' => 'Y'];
    $db = \Config\Database::connect();

    $update_data = $db->table($table)->where('ab_id', $ab_id); 
    $update_data->update($data);

    session()->setFlashdata('success', 'Data deleted successfully.');
    return redirect()->back();
}
public function deletefromschollclass()
{
    $ab_id = $this->request->getPost('sc_id');
    $table = $this->request->getPost('table_name');
    $data = ['is_deleted' => 'Y'];
    $db = \Config\Database::connect();

    $update_data = $db->table($table)->where('sc_id', $ab_id); 
    $update_data->update($data);

    session()->setFlashdata('success', 'Data deleted successfully.');
    return redirect()->back();
}
public function add_schoolstudentclass()
{
    $model = new Admin_Model();
    $wherecond = array('is_deleted' => 'N');
    $data['abroad_class'] = $model->getalldata('tbl_school_class', $wherecond);
    $menu_id = $this->request->getUri()->getSegment(2);
    $wherecond1 = array('is_deleted' => 'N', 'sc_id' => $menu_id);
    $data['single_data'] = $model->get_single_data('tbl_school_class', $wherecond1);
    echo view('Admin/addschoolstudentclass', $data);
}

public function setschoolclassname()
{
    
    $schoolclassname = $this->request->getPost('schoolclassname');
    $data = [
        'schoolclassname' => $schoolclassname
    ];
    
    $db = \Config\Database::connect();
    $mainTaskTable = $db->table('tbl_school_class');
    $existingTask = $mainTaskTable->where('schoolclassname', $schoolclassname)->get()->getFirstRow();
    if ($existingTask && ($this->request->getVar('id') == "" || $existingTask->ab_id  != $this->request->getVar('id'))) {
        session()->setFlashdata('error', 'Task name already exists.');
        return redirect()->to('add_schoolstudentclass');
    }
    if ($this->request->getVar('id') == "") {
        $add_data = $db->table('tbl_school_class');
        $add_data->insert($data);
        session()->setFlashdata('success', 'data added successfully.');
        return redirect()->to('schoolclasslist');
    } else {
        $update_data = $db->table('tbl_school_class')->where('sc_id', $this->request->getVar('id'));
            $update_data->update($data);
            session()->setFlashdata('success', 'data updated successfully.');
            return redirect()->to('schoolclasslist');
    }

    return redirect()->to(base_url('add_schoolstudentclass'));
  
}
public function schoolclasslist()
{
    $model = new Admin_Model();
    $wherecond = array('is_deleted' => 'N');
    $data['school_class'] = $model->getalldata('tbl_school_class', $wherecond);
    echo view('Admin/schoolclasslist',$data);
}

public function addfacultyskills()
{
    $model = new Admin_Model();
    $wherecond = array('is_deleted' => 'N');
    $data['faculty_skills'] = $model->getalldata('tbl_faculty_skills', $wherecond);
    $menu_id = $this->request->getUri()->getSegment(2);
    $wherecond1 = array('is_deleted' => 'N', 'id' => $menu_id);
    $data['single_data'] = $model->get_single_data('tbl_faculty_skills', $wherecond1);
    echo view('Admin/addfacultyskill', $data);
}
public function setfacultyskills()
{
     
    $facultyskill = $this->request->getPost('facultyskill');
    $data = [
        'facultyskill' => $facultyskill
    ];
    
    $db = \Config\Database::connect();
    $mainTaskTable = $db->table('tbl_faculty_skills');
    $existingTask = $mainTaskTable->where('facultyskill', $facultyskill)->get()->getFirstRow();
    if ($existingTask && ($this->request->getVar('id') == "" || $existingTask->ab_id  != $this->request->getVar('id'))) {
        session()->setFlashdata('error', 'Task name already exists.');
        return redirect()->to('add_schoolstudentclass');
    }
    if ($this->request->getVar('id') == "") {
        $add_data = $db->table('tbl_faculty_skills');
        $add_data->insert($data);
        session()->setFlashdata('success', 'data added successfully.');
        return redirect()->to('facultyskilllist');
    } else {
        $update_data = $db->table('tbl_faculty_skills')->where('id', $this->request->getVar('id'));
            $update_data->update($data);
            session()->setFlashdata('success', 'data updated successfully.');
            return redirect()->to('facultyskilllist');
    }

    return redirect()->to(base_url('add_schoolstudentclass'));
}

public function facultyskilllist()
{
    $model = new Admin_Model();
    $wherecond = array('is_deleted' => 'N');
    $data['faculty_skills'] = $model->getalldata('tbl_faculty_skills', $wherecond);
    echo view('Admin/facultyskilllist',$data);
}
public function deletefacultyskills()
{
    $ab_id = $this->request->getPost('id');
    $table = $this->request->getPost('table_name');
    $data = ['is_deleted' => 'Y'];
    $db = \Config\Database::connect();

    $update_data = $db->table($table)->where('id', $ab_id); 
    $update_data->update($data);

    session()->setFlashdata('success', 'Data deleted successfully.');
    return redirect()->back();
}

public function showCareerForm()
    {
        $model = new Admin_Model();
        $wherecond = array('is_active'=> 'Y','is_deleted' => 'N');
        $facultyskill = $model->getalldata('tbl_faculty_skills', $wherecond);
        
        $data['facultyskill'] = $facultyskill ? $facultyskill : [];
        echo view('career', $data);
    }
    public function saveCareerForm()
    {
        // print_r($_POST);die;
      
        $model = new Admin_Model();
        $data = [
            'fullName' => $this->request->getPost('fullName'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'skills' => $this->request->getPost('skills'), // This will now be an array of skill IDs
            'resume' => $this->request->getFile('resume'),
            'certificates' => $this->request->getFiles('certificates'),
            'courseCertificates' => $this->request->getFiles('courseCertificates'),
        ];
    
        // Process resume upload
        if ($data['resume'] && $data['resume']->isValid() && !$data['resume']->hasMoved()) {
            $newName = $data['resume']->getRandomName();
            $data['resume']->move(ROOTPATH . 'public/uploads/faculty_resume', $newName);
            $data['resume'] = $newName;
        } else {
            $data['resume'] = '';
        }
    
        // Process certificates upload
        $certificatePaths = [];
        if ($data['certificates']) {
            foreach ($data['certificates']['certificates'] as $certificate) {
                if ($certificate->isValid() && !$certificate->hasMoved()) {
                    $newName = $certificate->getRandomName();
                    $certificate->move(ROOTPATH . 'public/uploads/facultycertificates', $newName);
                    $certificatePaths[] = $newName;
                }
            }
        }
        $data['certificates'] = implode(',', $certificatePaths);
    
        // Process course certificates upload
        $courseCertificatePaths = [];
        if ($data['courseCertificates']) {
            foreach ($data['courseCertificates']['courseCertificates'] as $courseCertificate) {
                if ($courseCertificate->isValid() && !$courseCertificate->hasMoved()) {
                    $newName = $courseCertificate->getRandomName();
                    $courseCertificate->move(ROOTPATH . 'public/uploads/facultycourseCertificates', $newName);
                    $courseCertificatePaths[] = $newName;
                }
            }
        }
        $data['courseCertificates'] = implode(',', $courseCertificatePaths);
    
        // Prepare data for database insertion
        $dbData = [
            'full_name' => $data['fullName'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'skills' => implode(',', $data['skills']), // Convert the skill IDs array to a comma-separated string
            'resume' => $data['resume'],
            'certificates' => $data['certificates'],
            'courseCertificates' => $data['courseCertificates'],
        ];
    
        // Save the data to the database
        $model->saveCareerData($dbData);
    
        // Redirect to the career page
        return redirect()->to(base_url('career'));
    }
    
    
public function studentprofile()
{
    $model = new Admin_Model(); 
    $wherecond = array('role' => 'student');
    $data['studentlist'] = $model->getalldata('tbl_register', $wherecond);
    // print_r($data['studentlist']);die;
    echo view('Admin/studentprofile',$data);
}
public function facultyprofile()
{
    $model = new Admin_Model(); 
    $wherecond = array('role' => 'Faculty');
    $data['facultylist'] = $model->getalldata('tbl_register', $wherecond);
    // print_r($data['studentlist']);die;
    echo view('Admin/facultyprofile',$data);
}
public function facultyuplodedmedia()
{
    $model = new Admin_Model(); 

    $wherecond = ['is_deleted' => 'N'];

    $data['images'] = $model->get_media_with_faculty_names('tbl_upload_img', $wherecond);
    $data['videos'] = $model->get_media_with_faculty_names('tbl_upload_video', $wherecond);
    $data['docs'] = $model->get_media_with_faculty_names('tbl_upload_doc', $wherecond);
//   print_r($data['docs']);die;
    echo view('Admin/facultyuplodedmedia',$data);
}

public function studentuplodedmedia()
{
    $model = new Admin_Model(); 

    $wherecond = ['is_deleted' => 'N'];

    $data['images'] = $model->get_media_with_student_names('upload_img', $wherecond);
    $data['videos'] = $model->get_media_with_student_names('upload_video', $wherecond);
    $data['docs'] = $model->get_media_with_student_names('upload_doc', $wherecond);
    // print_r($data['docs']);die;
    return view('Admin/studentuplodedmedia', $data);
}

public function Facultydashboard()
   {
      $model = new Admin_Model;
      $data['studentlist'] = $model->getstudentlist();
      echo view('Faculty/Facultydashboard');
   }

   public function Faculty_uploadmedia()
   {
        $this->session = \Config\Services::session();
        $model = new Admin_Model(); 
        $faculty_id = $this->session->get('user_id');
        $wherecond = array('assign_teacher_id' => $faculty_id);
        $data['facultylist'] = $model->getalldata('tbl_register', $wherecond);
        // print_r($data['facultylist']);die;

      echo view('Faculty/Faculty_uploadmedia',$data);
   }
public function newfacultyapplications()
{ 
    $model = new Admin_Model(); 
    $wherecond = array('approved' => 'N');
    $data['facultyapplications'] = $model->getalldata('tbl_career_applications', $wherecond);
    $wherecond = array('approved' => 'A','password_created' =>'N');
    $data['acceptapplications'] = $model->getalldata('tbl_career_applications', $wherecond);
    $wherecond = array('approved' => 'P');
    $data['pendingapplications'] = $model->getalldata('tbl_career_applications', $wherecond);
    //  print_r($data['facultyapplications']);die;
    echo view('Admin/newfacultyapplications',$data);
}
public function createpassforfaculty()
{
    // Get POST data
    $email = $this->request->getPost('email');
    $password = $this->request->getPost('Password');
    $model = new Admin_Model();
    $wherecond = array('email' => $email);
    $data['facultyinfo'] = $model->getalldata('tbl_career_applications', $wherecond);

    if (!empty($data['facultyinfo'])) {
        $facultyInfo = $data['facultyinfo'][0];
        $registerData = [
            'username' => $facultyInfo['full_name'],
            'email' => $facultyInfo['email'],
            'password' => $password, 
            'role' => 'faculty',
            'phone' => $facultyInfo['phone'],
        ];
        
        $db = \Config\Database::connect();
        $builder = $db->table('tbl_register');
        $insert = $builder->insert($registerData);

        if ($insert) {
            $update_data = $db->table('tbl_career_applications')->where('id', $facultyInfo['id']);
            $update_data->update(['password_created' => 'Y']);
            session()->setFlashdata('success', 'Password created succesfullly.');
        } else {
            session()->setFlashdata('error', 'Failed to insert faculty information into the register table.');
        }
    } else {
        session()->setFlashdata('error', 'No faculty information found for the provided email.');
    }

    return redirect()->to('newfacultyapplications');
}

public function updateApplicationStatus() {
    $model = new Admin_Model();
    $db = \Config\Database::connect();

    $id = $this->request->getPost('id');
    $status = $this->request->getPost('status');
    
    $data = [
        'approved' => $status
    ];

    $update_data = $db->table('tbl_career_applications')->where('id', $id);
    if ($update_data->update($data)) {
        session()->setFlashdata('success', 'Application status updated successfully.');
    } else {
        session()->setFlashdata('error', 'Failed to update application status.');
    }

    return redirect()->to('newfacultyapplications');
}

   public function tbl_upload_image()
    {
        $db = \Config\Database::connect();
        $this->session = \Config\Services::session();
        
        $imageFile = $this->request->getFile('tbl_upload_image');

        if ($imageFile && $imageFile->isValid() && $imageFile->getClientMimeType() && strpos($imageFile->getClientMimeType(), 'image') !== false && !$imageFile->hasMoved()) {
            $imageName = $imageFile->getRandomName();

            try {
                $imageFile->move(ROOTPATH . 'public/uploads/faculty/Images', $imageName);
            } catch (FileException $e) {
                return redirect()->back()->with('error', 'Failed to upload image.');
            }

            $faculty_id = $this->session->get('user_id');
            // print_r($_POST);die;
            $id = $this->request->getPost('student_id');

            $data = [
                'image_name' => $imageName,
                'faculty_id' => $faculty_id,
                'student_id' => $id,
            ];

            $builder = $db->table('tbl_upload_img');
            $builder->insert($data);

            session()->setFlashdata('success', 'image uploaded successfully.');
             return redirect()->to('Faculty_uploadmedia');
             session()->setFlashdata('error', 'Invalid file or file upload failed.');
          
            return redirect()->to('Faculty_uploadmedia');
        }
    }


    public function tbl_upload_video()
    {       
        $db = \Config\Database::connect();
        $this->session = \Config\Services::session();
        
        $videoFile = $this->request->getFile('tbl_upload_video');
        // Check if a file was uploaded and if it's a video
        if ($videoFile && $videoFile->isValid() && $videoFile->getClientMimeType() && strpos($videoFile->getClientMimeType(), 'video') !== false && !$videoFile->hasMoved()) {
            $videoName = $videoFile->getRandomName();
    
            try {
                $videoFile->move(ROOTPATH . 'public/uploads/faculty/Videos', $videoName);
            } catch (FileException $e) {
                return redirect()->back()->with('error', 'Failed to upload video.');
            }
    
            $faculty_id = $this->session->get('user_id');
            // print_r($_POST); die;
            $id = $this->request->getPost('student_id');
            $data = [
                'video_name' => $videoName,
                'faculty_id' => $faculty_id,
                'student_id' => $id,
            ];
    
            $builder = $db->table('tbl_upload_video');
            $builder->insert($data);
            session()->setFlashdata('success', 'Video uploaded successfully.');
             return redirect()->to('Faculty_uploadmedia');
             session()->setFlashdata('error', 'Invalid file or file upload failed.');
          
            return redirect()->to('Faculty_uploadmedia');
        }
    }

    public function tbl_upload_doc()
    {
        $db = \Config\Database::connect();
    
        $DocFile = $this->request->getFile('tbl_upload_doc');
    
        if ($DocFile && $DocFile->isValid() && 
            (strpos($DocFile->getClientMimeType(), 'doc') !== false || strpos($DocFile->getClientMimeType(), 'pdf') !== false) &&
            !$DocFile->hasMoved()) {
    
            $DocName = $DocFile->getRandomName();
    
            try {
                $DocFile->move(ROOTPATH . 'public/uploads/faculty/Doc', $DocName);
            } catch (FileException $e) {
                return redirect()->back()->with('error', 'Failed to upload document');
            }
    
            $session = \Config\Services::session();
            $faculty_id = $session->get('user_id');
            $id = $this->request->getPost('student_id');
            $data = [
                'Doc_name' => $DocName,
                'faculty_id' => $faculty_id,
                'student_id' => $id,
            ];
    
            $builder = $db->table('tbl_upload_doc');
            $builder->insert($data);
    
            session()->setFlashdata('success', 'Document uploaded successfully.');
            return redirect()->to('Faculty_uploadmedia');
        } else {
            session()->setFlashdata('error', 'Invalid file or file upload failed.');
            return redirect()->to('Faculty_uploadmedia');
        }
    }
    
      

    
    public function Faculty_videos()
    {
        $db = \Config\Database::connect();
        $this->session = \Config\Services::session();
        $faculty_id = $this->session->get('user_id');

        // Fetch videos uploaded by students assigned to the logged-in faculty member
        $builder = $db->table('upload_video');
        $builder->select('upload_video.*, tbl_register.username as student_name');
        $builder->join('tbl_register', 'upload_video.student_id = tbl_register.r_id');
        $builder->where('upload_video.assign_teacher_id', $faculty_id);
        $query = $builder->get();
        $data['videos'] = $query->getResult();

        echo view('Faculty/Faculty_videos', $data);
    }

    public function Facultyimages()
    {
        $db = \Config\Database::connect();
        $this->session = \Config\Services::session();

        $faculty_id = $this->session->get('user_id');

        $builder = $db->table('upload_img');
        $builder->select('upload_img.*, tbl_register.username as student_name');
        $builder->join('tbl_register', 'upload_img.student_id = tbl_register.r_id'); // assuming student_id is in upload_img table
        $builder->where('upload_img.assign_teacher_id', $faculty_id); // ensure assign_teacher_id refers to faculty_id
        $query = $builder->get();
        $data['images'] = $query->getResult();

        echo view('Faculty/Facultyimages', $data);
    }

    public function Facultydoc()
    {
        $db = \Config\Database::connect();
        $this->session = \Config\Services::session();

        $faculty_id = $this->session->get('user_id');
       

        $builder = $db->table('upload_doc');
        $builder->select('upload_doc.*, tbl_register.username as student_name');
        $builder->join('tbl_register', 'upload_doc.student_id = tbl_register.r_id'); // assuming student_id is in upload_img table
        $builder->where('upload_doc.assign_teacher_id', $faculty_id); // ensure assign_teacher_id refers to faculty_id
        $query = $builder->get();
        $data['Doc'] = $query->getResult();
        // print_r($data['Doc'] );
        echo view('Faculty/Facultydoc', $data);
    }


    public function logout()
    {
        $session = session();
        // session_destroy();
        $session->destroy();
        // print_r($_SESSION);die;
        return redirect()->to('/');
    }




}

