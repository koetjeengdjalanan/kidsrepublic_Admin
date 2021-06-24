<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentRelationshipModel extends Model
{
    protected $DBGroup  = 'db_student';
    protected $table = 'student_relationship';
    protected $primarykey = "id";
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'student_nis', 'name', 'relationship', 'address', 'phone_number', 'email'
    ];
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $deletedField  = 'deleted_at';

    public function getStudentRelationship($nis = NULL, $id = NULL)
    {
        if ($id != NULL) {
            return $this->where(['id' => $id])->first();
        } else if ($nis != NULL) {
            return $this->where(['student_nis' => $nis])->findAll();
        }
        return NULL;
    }
}
