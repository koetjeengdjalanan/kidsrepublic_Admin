<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentFamilyInformationModel extends Model
{
    protected $DBGroup  = 'db_student';
    protected $table = 'student_family_information';
    protected $primarykey = "id";
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'student_nis', 'parents_language', 'person_completing', 'illness', 'text_illness', 'whom_stay_during_day', 'family_circumstances', 'family_principles', 'assessment_enjoyable_time', 'assessment_development_concern'
    ];

    public function getStudentFamilyInformation($nis = NULL, $id = NULL)
    {
        if ($id != NULL) {
            return $this->where(['id' => $id])->first();
        } else if ($nis != NULL) {
            return $this->where(['student_nis' => $nis])->first();
        }
        return NULL;
    }
}
