<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentPrevEvalCurrentServiceModel extends Model
{
    protected $DBGroup  = 'db_student';
    protected $table = 'student_prev_eval_current_service';
    protected $primarykey = "id";
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'student_nis', 'evaluations', 'text_evaluations', 'result_evaluations', 'service', 'results_service', 'provided_service'
    ];

    public function getStudentPrevEvalCurrentService($nis = NULL, $id = NULL)
    {
        if ($id != NULL) {
            return $this->where(['id' => $id])->first();
        } else if ($nis != NULL) {
            return $this->where(['student_nis' => $nis])->first();
        }
        return NULL;
    }
}
