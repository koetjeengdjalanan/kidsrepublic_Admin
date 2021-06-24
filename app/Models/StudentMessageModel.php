<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentMessageModel extends Model
{
    protected $DBGroup  = 'db_student';
    protected $table = 'student_message';
    protected $primarykey = "id";
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'student_nis', 'school_information', 'declaration'
    ];

    public function getStudentMessage($nis = NULL, $id = NULL)
    {
        if ($id != NULL) {
            return $this->where(['id' => $id])->first();
        } else if ($nis != NULL) {
            return $this->where(['student_nis' => $nis])->first();
        }
        return NULL;
    }
}
