<?php

namespace App\Controllers;
use App\Models\Admin_Model;
class AdminController extends BaseController
{
   public function Admindasboard()
   {
      $model = new Admin_Model();
      $data['studentList'] = $model->getstudentlist();
      $data['studentCount'] = !empty($studentList) ? count($studentList) : 0;

      // print_r($data['studentCount']);die;
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
        
        $imageFile = $this->request->getFile('input_image');

        if ($imageFile && $imageFile->isValid() && $imageFile->getClientMimeType() && strpos($imageFile->getClientMimeType(), 'image') !== false && !$imageFile->hasMoved()) {
            $imageName = $imageFile->getRandomName();

            try {
                $imageFile->move(ROOTPATH . 'public/uploads/Images', $imageName);
            } catch (FileException $e) {
                return redirect()->back()->with('error', 'Failed to upload image.');
            }

            $student_id = $this->session->get('user_id');

            $data = [
                'image_name' => $imageName,
                'student_id' => $student_id,
            ];

            $builder = $db->table('upload_img');
            $builder->insert($data);

            return redirect()->back()->with('success', 'Image uploaded successfully.');
        } else {
            return redirect()->back()->with('error', 'Invalid file or file upload failed.');
        }
    }

    public function upload_video()
    {       
        $db = \Config\Database::connect();
        $this->session = \Config\Services::session();
        
        $videoFile = $this->request->getFile('input_video');
        // Check if a file was uploaded and if it's a video
        if ($videoFile && $videoFile->isValid() && $videoFile->getClientMimeType() && strpos($videoFile->getClientMimeType(), 'video') !== false && !$videoFile->hasMoved()) {
            $videoName = $videoFile->getRandomName();
    
            try {
                $videoFile->move(ROOTPATH . 'public/uploads/Videos', $videoName);
            } catch (FileException $e) {
                return redirect()->back()->with('error', 'Failed to upload video.');
            }
    
            $student_id = $this->session->get('user_id');
   
            $data = [
                'video_name' => $videoName,
                'student_id' => $student_id,
            ];
    
            $builder = $db->table('upload_video');
            $builder->insert($data);
    
            return redirect()->back()->with('success', 'Video uploaded successfully.');
        } else {
            return redirect()->back()->with('error', 'Invalid file or file upload failed.');
        }
    }

    public function upload_doc()
    {
        $db = \Config\Database::connect();

        $DocFile = $this->request->getFile('input_doc');

        if ($DocFile && $DocFile->isValid() && strpos($DocFile->getClientMimeType(), 'doc') !== false && !$DocFile->hasMoved()) {
            $DocName = $DocFile->getRandomName();

            try {
                $DocFile->move(ROOTPATH . 'public/uploads/Doc', $DocName);
            } catch (FileException $e) {
                return redirect()->back()->with('error', 'Failed to upload document');
            }

            $session = \Config\Services::session();
            $student_id = $session->get('user_id');

            $data = [
                'Doc_name' => $DocName,
                'student_id' => $student_id,
            ];

            $builder = $db->table('upload_doc');
            $builder->insert($data);

            return redirect()->back()->with('success', 'Document uploaded successfully.');
        } else {
            return redirect()->back()->with('error', 'Invalid file or file uploading failed.');
        }
    }    

//   these all for faculty 
    public function facultydashboard()
    {
       $model = new Admin_Model;
       $data['studentlist'] = $model->getstudentlist();
       echo view('Faculty/Facultydashboard');
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
        $wherecond = array('is_deleted' => 'Y');
        $facultyskill = $model->getalldata('tbl_faculty_skills', $wherecond);
        
        $data['facultyskill'] = $facultyskill ? $facultyskill : [];
        echo view('career', $data);
    }
    public function saveCareerForm()
    {
        // Load the model
        $model = new Admin_Model();
    
        // Retrieve form data
        $data = [
            'fullName' => $this->request->getPost('fullName'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'position' => $this->request->getPost('position'),
            'skills' => implode(',', $this->request->getPost('skills')),
            'resume' => $this->request->getFile('resume'), // Note: This should be an object representing the uploaded file
            'coverLetter' => $this->request->getPost('coverLetter'),
        ];
    
        // Ensure $data['resume'] is an object before proceeding
        if ($data['resume'] && $data['resume']->isValid() && !$data['resume']->hasMoved()) {
            // Handle file upload
            $resumePath = $data['resume']->store();
            $data['resume'] = $resumePath;
        } else {
            // Handle file upload failure or empty file
            $data['resume'] = ''; // Set to empty string or handle accordingly
        }
    
        // Save data to the database
        $model->saveCareerData($data);
    
        // Redirect or load a success view
        return redirect()->to(base_url('career'));
    }
    
}

