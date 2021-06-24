<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentBackgroundNonFormalEduModel extends Model
{
    protected $DBGroup  = 'db_student';
    protected $table = 'student_background_nonformal_edu';
    protected $primarykey = "id";
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'student_nis', 'lesson_activities', 'days_week', 'hours_session', 'start_year', 'end_year'
    ];
    protected $useSoftDeletes = true;
    protected $deletedField  = 'deleted_at';

    public function getStudentBackgroundNonFormalEdu($nis = NULL, $id = NULL)
    {
        if ($id != NULL) {
            return $this->where(['id' => $id])->first();
        } else if ($nis != NULL) {
            return $this->where(['student_nis' => $nis])->findAll();
        }
        return NULL;
    }
}
