<?php

namespace App\Models;

use CodeIgniter\Model;

class PendingStudentsModel extends Model
{
    protected $table = 'pending_students';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'fullname', 'phonenumber','address','email', 'gender', 'literacy', 'guardian_phone', 
        'guardian_address', 'story', 'registered_date'
    ];

    public function getThreeStudentNames()
    {
        return $this->select('fullname')
                ->limit(3)
                ->findAll();
    }
}
