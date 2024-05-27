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
   
}
