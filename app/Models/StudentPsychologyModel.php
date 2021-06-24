<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentPsychologyModel extends Model
{
    protected $DBGroup  = 'db_student';
    protected $table = 'student_psychology';
    protected $primarykey = "id";
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'student_nis', 'result_teacher', 'file_teacher', 'result_psycholog', 'file_psycholog', 'result_principal', 'file_principal', 'created_at', 'updated_at', 'deleted_at'
    ];
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getStudentPsychology($nis = NULL, $id = NULL)
    {
        if ($id != NULL) {
            return $this->where(['id' => $id])->first();
        } else if ($nis != NULL) {
            return $this->where(['student_nis' => $nis])->first();
        }
        return NULL;
    }

    public function getStudents()
    {
        # code...

        $this->join('form_file', 'form_file.users_id = users.id', 'RIGHT');
        $this->join('student_details', 'student_details.users_id = users.id', 'RIGHT');
        $this->select('form_file.profile_pict');
        $this->select('student_details.*');
        $this->whereNotIn('student_details.nis');
        return $this->findAll();
    }
}
