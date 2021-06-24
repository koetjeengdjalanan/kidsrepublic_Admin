<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentVehicleModel extends Model
{
    protected $DBGroup  = 'db_student';
    protected $table = 'vehicle_form';
    protected $primarykey = "id";
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'student_nis', 'no_plat', 'pickup_person', 'pickup_person_phone', 'deleted_at'
    ];
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $deletedField  = 'deleted_at';

    public function getStudentVehicle($nis = NULL, $id = NULL)
    {
        if ($id != NULL) {
            return $this->where(['id' => $id])->first();
        } else if ($nis != NULL) {
            return $this->where(['student_nis' => $nis])->findAll();
        }
        return NULL;
    }
}
