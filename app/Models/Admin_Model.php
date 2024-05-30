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

    public function getalldata($table, $wherecond)
    {
        $result = $this->db->table($table)->where($wherecond)->get()->getResultArray();
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    public function saveCareerData($data)
    {
        $careerTable = 'tbl_career_applications';
        return $this->db->table($careerTable)->insert($data);
    }

    public function get_single_data($table, $wherecond)
    {
        $result = $this->db->table($table)->where($wherecond)->get()->getRow();

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    public function get_media_with_student_names($table, $wherecond)
    {
        return $this->db->table($table)
                        ->select("$table.*, tbl_register.username as student_name")
                        ->join('tbl_register', "$table.student_id = tbl_register.r_id", 'left')
                        ->where($wherecond)
                        ->get()
                        ->getResultArray();
    }
    public function get_media_with_faculty_names($table, $wherecond)
    {
        return $this->db->table($table)
                        ->select("$table.*, tbl_register.username as student_name")
                        ->join('tbl_register', "$table.faculty_id = tbl_register.r_id", 'left')
                        ->where($wherecond)
                        ->get()
                        ->getResultArray();
    }
}
