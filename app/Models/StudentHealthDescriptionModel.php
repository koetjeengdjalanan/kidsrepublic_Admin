<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentHealthDescriptionModel extends Model
{
    protected $DBGroup  = 'db_student';
    protected $table = 'student_health_description';
    protected $primarykey = "id";
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'student_nis', "illness", "describe_illness", "respiratory_reaction", "medication", "serious_injuries", "wear_glasses", "vision_problem", "hearing_problem"
    ];

    public function getStudentHealthDescription($nis = NULL, $id = NULL)
    {
        if ($id != NULL) {
            return $this->where(['id' => $id])->first();
        } else if ($nis != NULL) {
            return $this->where(['student_nis' => $nis])->first();
        }
        return NULL;
    }
}
