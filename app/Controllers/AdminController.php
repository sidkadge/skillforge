<?php

namespace App\Controllers;
use App\Models\Admin_Model;
class AdminController extends BaseController
{
   public function Admindasboard()
   {
      $model = new Admin_Model;
      $data['studentlist'] = $model->getstudentlist();
      echo view('Admin/Admindasboard');
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

}

