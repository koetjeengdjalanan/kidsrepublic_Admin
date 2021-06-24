<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentBackgroundEduModel extends Model
{
    protected $DBGroup  = 'db_student';
    protected $table = 'student_background_edu';
    protected $primarykey = "id";
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'student_nis', 'prev_school_name', 'year', 'address', 'city', 'prev_school_type'
    ];

    public function getStudentBackgroundEdu($nis = NULL, $id = NULL, $prev_school_type = NULL)
    {
        if ($id != NULL) {
            return $this->where(['id' => $id])->first();
        } else if ($nis != NULL) {
            if ($prev_school_type != NULL) {
                $this->where(['prev_school_type' => $prev_school_type]);
                return $this->where(['student_nis' => $nis])->first();
            }
            return $this->where(['student_nis' => $nis])->first();
        }
        return NULL;
    }
}
