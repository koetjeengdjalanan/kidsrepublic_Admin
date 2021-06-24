<?php

namespace App\Models;

use CodeIgniter\Model;

class ParentsSurveyModel extends Model
{
    protected $DBGroup  = 'db_student';
    protected $table = 'parents_survey';
    protected $primarykey = "id";
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'student_nis', 'why_choose', 'method_think', 'hope', 'responsibilities_opinion', 'want_to_become', 'wish', 'ideal_curriculum', 'un_opinion', 'international_exam_opinion',
        'curriculum_prefer',
        'spiritual_hope',
        'academics_hope',
        'global_view_hope',
        'nationality_hope',
        'social_emotional_hope',
        'spirit_effort',
        'academics_effort',
        'global_view_effort',
        'nationality_effort',
        'social_emotional_effort',
        'child_describe',
        'demotivation_respond',
        'bullying_respond',
        'cheating_respond',
        'failure_respond',
        'lateness_respond',
        'most_interacts',
        'communication',
        'ideas',
        'finance',
        'student_independence',
        'independence_train',
        'parents_opinion',
        'eligible',
        'contribution',
        'school_notes',
        'teacher_notes'
    ];

    public function getParentsSurvey($nis = NULL, $id = NULL)
    {
        if ($id != NULL) {
            return $this->where(['id' => $id])->first();
        } else if ($nis != NULL) {
            return $this->where(['student_nis' => $nis])->first();
        }
        return NULL;
    }
}
