<?php

namespace App\Models;

use CodeIgniter\Model;

class PricelistModel extends Model
{
    protected $DBGroup  = 'db_student';
    protected $table = 'pricelist';
    protected $primarykey = "id";
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'package', 'registration', 'adm', 'adf', 'tuition', 'uniform', 'books', 'created_at', 'updated_at', 'updated_by'
    ];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getA1Form($package = NULL, $id = NULL)
    {
        if ($id != NULL) {
            return $this->where(['id' => $id])->first();
        } else if ($package != NULL) {
            return $this->where(['package' => $package])->first();
        }
        return NULL;
    }
}
