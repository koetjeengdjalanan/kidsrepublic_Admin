<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentDevelopmentDomainsModel extends Model
{
    protected $DBGroup  = 'db_student';
    protected $table = 'student_development_domains';
    protected $primarykey = "id";
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'student_nis', 'eat_drink', 'dress', 'use_toilet', 'respond_approiately', 'seek_out_playing', 'play_cooperatively', 'speak', 'people_unfamiliar', 'verbally', 'write_words', 'can_read'
    ];

    public function getStudentDevelopmentDomains($nis = NULL, $id = NULL)
    {
        if ($id != NULL) {
            return $this->where(['id' => $id])->first();
        } else if ($nis != NULL) {
            return $this->where(['student_nis' => $nis])->first();
        }
        return NULL;
    }
}
