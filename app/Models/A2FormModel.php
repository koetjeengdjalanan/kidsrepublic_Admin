<?php

namespace App\Models;

use CodeIgniter\Model;

class A2FormModel extends Model
{
    protected $DBGroup  = 'db_student';
    protected $table = 'a2_form';
    protected $primarykey = "id";
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'student_nis', 'fotocopy_kk', 'fotocopy_ktp_ayah', 'fotocopy_ktp_ibu', 'fotocopy_ktp_nanny', 'fotocopy_akta', 'fotocopy_imunisasi', 'foto_anak_4x6', 'foto_anak_3x4', 'fotocopy_ktp_penjemput', 'vehicle_form', 'fotocopy_enrollment', 'fotocopy_handbook', 'trial_form', 'observation_form', 'parents_questionaire', 'previous_report', 'application_admission', 'physical_record', 'reenrolment_form', 'extracurricular_form', 'status', 'created_at', 'updated_at', 'deleted_at'
    ];
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getA2Form($nis = NULL, $id = NULL)
    {
        if ($id != NULL) {
            return $this->where(['id' => $id])->first();
        } else if ($nis != NULL) {
            return $this->where(['student_nis' => $nis])->first();
        }
        return NULL;
    }
}
