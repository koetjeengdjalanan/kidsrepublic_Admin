<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentImmunizationModel extends Model
{
    protected $DBGroup  = 'db_student';
    protected $table = 'student_immunization';
    protected $primarykey = "id";
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'student_nis', 'type', 'year'
    ];
    protected $useSoftDeletes = true;
    protected $deletedField  = 'deleted_at';

    public function getStudentImmunization($nis = NULL, $id = NULL)
    {
        if ($id != NULL) {
            return $this->where(['id' => $id])->first();
        } else if ($nis != NULL) {
            return $this->where(['student_nis' => $nis])->findAll();
        }
        return NULL;
    }
}
