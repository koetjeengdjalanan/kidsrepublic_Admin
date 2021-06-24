<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $DBGroup  = 'db_student';
    protected $table = 'users';
    protected $useTimestamps = true;

    public function getUser($email = false)
    {
        if ($email === false) {
            return $this->findAll();
        }
        return $this->where(['email' => $email])->first();
    }
    public function getStudentMin($psychology_data = NULL)
    {
        $this->join('form_file', 'form_file.users_id = users.id', 'RIGHT');
        $this->join('student_details', 'student_details.users_id = users.id', 'RIGHT');
        $this->select('form_file.profile_pict');
        $this->select('student_details.*');
        if ($psychology_data) $this->whereNotIn('student_details.nis', $psychology_data);
        return $this->findAll();
    }
}
