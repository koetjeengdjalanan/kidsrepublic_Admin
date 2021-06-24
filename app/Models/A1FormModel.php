<?php

namespace App\Models;

use CodeIgniter\Model;

class A1FormModel extends Model
{
    protected $DBGroup  = 'db_student';
    protected $table = 'a1_form';
    protected $primarykey = "id";
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'student_nis', 'uniform_daily', 'uniform_sport', 'uniform_batik', 'id_card', 'daily_report', 'weekly_lesson', 'report_card', 'montessori_report', 'progress_report', 'handbook', 'time_table_educ', 'time_table_gym', 'uniform_schedule', 'academic_calendar', 'excul_form', 'birthday_form', 'flyer_kr_mnj', 'kwitansi', 'vehicle_sticker', 'enrollment_letter', 'created_at', 'updated_at', 'deleted_at'
    ];
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getA1Form($nis = NULL, $id = NULL)
    {
        if ($id != NULL) {
            return $this->where(['id' => $id])->first();
        } else if ($nis != NULL) {
            return $this->where(['student_nis' => $nis])->first();
        }
        return NULL;
    }
}
