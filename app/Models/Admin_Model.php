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

    public function getasignfacultyid($student_id)
    {
        $query = $this->select('assign_teacher_id')
                      ->where('r_id', $student_id)
                      ->get();

        if ($query->getNumRows() > 0) {
            return $query->getRow()->assign_teacher_id;
        } else {
            return null;
        }
    }
}
