<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentPregnancyHistoryModel extends Model
{
    protected $DBGroup  = 'db_student';
    protected $table = 'student_pregnancy_history';
    protected $primarykey = "id";
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'student_nis', 'during_pregnancy', 'during_labour', 'during_first_year', 'during_second_third_year', 'mother_physical', 'mother_mental', 'birth_proses', 'time_of_birth', 'baby_nutritional', 'birth_height', 'birth_weight', 'text_during_pregnancy', 'text_during_labour', 'text_during_first_year', 'text_during_second_third_year', 'text_mother_physical', 'text_mother_mental', 'text_birth_proses', 'text_baby_nutritional_breastmilk', 'text_baby_nutritional_others',
    ];

    public function getStudentPregnancyHistory($nis = NULL, $id = NULL)
    {
        if ($id != NULL) {
            return $this->where(['id' => $id])->first();
        } else if ($nis != NULL) {
            return $this->where(['student_nis' => $nis])->first();
        }
        return NULL;
    }
}
