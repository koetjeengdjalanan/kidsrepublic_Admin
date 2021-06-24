<?php

namespace App\Models;

use CodeIgniter\Model;

class FormFileModel extends Model
{
    protected $DBGroup  = 'db_student';
    protected $table = 'form_file';
    protected $primarykey = "id";
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'users_id', 'profile_pict', 'main', 'health', 'parents', 'vehicle', 'prevschool', 'parentsdec', 'invoice'
    ];

    public function getFormFile($user_id = NULL, $id = NULL, $type = NULL)
    {
        if ($id != NULL) {
            return $this->where(['id' => $id])->first();
        } else if ($user_id != NULL) {
            if ($type != NULL) $this->select($type);
            return $this->where(['users_id' => $user_id])->first();
        }
        return NULL;
    }
}
