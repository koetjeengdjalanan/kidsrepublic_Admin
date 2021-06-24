<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentAllergiesModel extends Model
{
    protected $DBGroup  = 'db_student';
    protected $table = 'student_allergies';
    protected $primarykey = "id";
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'student_nis', 'type', 'age', 'prevention_medication'
    ];
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $deletedField  = 'deleted_at';

    public function getStudentAllergies($nis = NULL, $id = NULL)
    {
        if ($id != NULL) {
            return $this->where(['id' => $id])->first();
        } else if ($nis != NULL) {
            return $this->where(['student_nis' => $nis])->findAll();
        }
        return NULL;
    }
}
