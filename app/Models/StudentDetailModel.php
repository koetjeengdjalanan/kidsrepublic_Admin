<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentDetailModel extends Model
{
    protected $DBGroup  = 'db_student';
    protected $table = 'student_details';
    protected $primarykey = "nis";
    protected $useAutoIncrement = true;
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $deletedField  = 'deleted_at';
    protected $allowedFields = [
        'nis', 'name', 'gender', 'pob', 'dob', 'nationality', 'religion', 'birth_o', 'tnoc', 'prev_school', 'addprev_school', 'nisn', 'language', 'address', 'city', 'postal_code', 'phone', 'distance', 'vehicle', 'mothers_id', 'fathers_id', 'users_id', 'height', 'weight', 'blood_type', 'created_at', 'deleted_at'
    ];

    public function getStudentDetail($nis = NULL, $users_id = NULL)
    {
        if ($users_id != NULL) {
            return $this->where(['users_id' => $users_id])->first();
        } else if ($nis != NULL) {
            return $this->where(['nis' => $nis])->first();
        }
        return NULL;
    }

    public function getStudentMin()
    {
        $this->join('form_file', 'form_file.users_id = users.id', 'RIGHT');
        $this->join('student_details', 'student_details.users_id = users.id', 'RIGHT');
        $this->select('form_file.profile_pict');
        $this->select('student_details.*');
        return $this->findAll();
    }
}
