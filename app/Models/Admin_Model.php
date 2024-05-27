<?php

namespace App\Models;

use CodeIgniter\Model;

class Admin_Model extends Model
{
    protected $table = 'tbl_register';
    public function getstudentlist()
    {
        return $this->db->table('tbl_register')
                        ->where('role', 'student')
                        ->get()
                        ->getResult();
    }
    public function checkCredentials($where)
    {
        $user = $this->table('tbl_register') // Set the table explicitly
                     ->where($where)
                     ->first();
        if ($user) {
                return $user; // Login successful  
        }
        return null; // Login failed
    }
}
