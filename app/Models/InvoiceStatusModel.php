<?php

namespace App\Models;

use CodeIgniter\Model;

class InvoiceStatusModel extends Model
{
    protected $DBGroup  = 'db_student';
    protected $table = 'invoice_status';
    protected $primarykey = "id";
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'student_nis', 'status', 'no_invoice', 'created_at', 'updated_at', 'deleted_at'
    ];
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getInvoiceStatus($student_nis = NULL, $id = NULL)
    {
        if ($id != NULL) {
            return $this->where(['id' => $id])->first();
        } else if ($student_nis != NULL) {
            // if ($type != NULL) $this->select($type);
            return $this->where(['student_nis' => $student_nis])->first();
        }
        return NULL;
    }
}
