<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentHealthHistoryModel extends Model
{
    protected $DBGroup  = 'db_student';
    protected $table = 'student_health_history';
    protected $primarykey = "id";
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'student_nis', 'sickness_disorder', 'age', 'prevention_medication'
    ];
    protected $useSoftDeletes = true;
    protected $deletedField  = 'deleted_at';

    public function getStudentHealthHistory($nis = NULL, $id = NULL)
    {
        if ($id != NULL) {
            return $this->where(['id' => $id])->first();
        } else if ($nis != NULL) {
            return $this->where(['student_nis' => $nis])->findAll();
        }
        return NULL;
    }
}
