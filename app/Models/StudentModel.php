<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table = 'registered_students';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'fullname', 'phonenumber','address','email', 'gender', 'literacy', 'guardian_phone', 
        'guardian_address', 'story', 'registered_date'
    ];

    public function getAllStudents()
    {
        return $this->findAll();
    }

    public function getThreeStudentNames()
    {
        return $this->select('fullname')
                ->limit(4)
                ->findAll();
    }
}
