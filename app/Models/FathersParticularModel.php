<?php

namespace App\Models;

use CodeIgniter\Model;

class FathersParticularModel extends Model
{
    protected $DBGroup  = 'db_student';
    protected $table = 'fathers_particulars';
    protected $primarykey = "id";
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'id', 'name', 'pob', 'dob', 'nationality', 'religion', 'id_type', 'id_number', 'last_education', 'major', 'univ_name', 'city', 'home_address', 'postal', 'phone_number', 'email', 'occu', 'post', 'inst_name', 'office_address', 'child_relation', 'marital_status', 'child_live'
    ];

    public function getFathersParticularDetail($id = false)
    {
        if ($id != false) {
            return $this->where(['id' => $id])->first();
        }
        return NULL;
    }
}
