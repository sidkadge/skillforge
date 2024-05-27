<?php

namespace App\Models;

use CodeIgniter\Model;

class Admin_Model extends Model
{
    public function getstudentlist()
    {
        return $this->db->table('register')
                        ->where('role', 'student')
                        ->get()
                        ->getResult();
    }
    
}
