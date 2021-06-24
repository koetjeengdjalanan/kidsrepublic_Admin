<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentInterestModel extends Model
{
    protected $DBGroup  = 'db_student';
    protected $table = 'student_interest';
    protected $primarykey = "id";
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'student_nis', 'arts', 'music', 'cognitive', 'sport', 'organization_community', 'others'
    ];

    public function getStudentInterest($nis = NULL, $id = NULL)
    {
        if ($id != NULL) {
            return $this->where(['id' => $id])->first();
        } else if ($nis != NULL) {
            return $this->where(['student_nis' => $nis])->first();
        }
        return NULL;
    }
}
