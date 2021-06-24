<?php

namespace App\Controllers;

use \App\Models\StudentDetailModel;
use \App\Models\UsersModel;
use \App\Models\StudentPsychologyModel;

class Executiveteacher extends BaseController
{
    protected $studentDetail;
    protected $userDetail;
    protected $studentPsychology;

    public function __construct()
    {
        $this->studentDetail                     = new StudentDetailModel();
        $this->userDetail                        = new UsersModel();
        $this->studentPsychology                = new StudentPsychologyModel();
    }

    public function index()
    {
        /**
         *  Mencari data siswa yang belum terisi Result Psychology
         */
        $psychology_data = $this->studentPsychology->select('student_nis')->where('result_teacher !=', NULL)->orWhere('file_teacher !=', NULL)->findAll();
        $psychology = array();
        foreach ($psychology_data  as $key => $value) {
            array_push($psychology, $value['student_nis']);
        }
        $students = $this->userDetail->getStudentMin($psychology);
        $data['title'] = "Dashboard";
        $data['students'] = $students;
        return view('teacher/index', $data);
    }

    public function input($nis)
    {
        $result   = $this->request->getVar('result');
        if ($this->request->getFile('psychology')) {
            $files   = $this->request->getFile('psychology');
            $psychology = $files->getRandomName();
            $dir_path = WRITEPATH . 'uploads/doc/psychology/teacher/';
            $files->move($dir_path, $psychology);
        } else {
            $psychology   = NULL;
        }

        $data = [
            'student_nis'         => $nis,
            'result_teacher'     => $result,
            'file_teacher'         => $psychology
        ];

        $psychology = $this->studentPsychology->getStudentPsychology($nis);

        if ($psychology) {
            $psychology_id = $psychology['id'];
            $this->studentPsychology->where(['id' => $psychology_id])->set($data)->update();
        } else {
            $this->studentPsychology->insert($data);
        }

        /**
         * Set Message Alert
         */
        $session = session();
        $session->setFlashdata('success', 'Success');
        return redirect()->to('/teacher');
    }

    public function principal()
    {
        /**
         *  Mencari data siswa yang belum terisi School Recommendation
         */
        $psychology_data = $this->studentPsychology->select('student_nis')->where('result_principal !=', NULL)->orWhere('file_principal !=', NULL)->findAll();
        $psychology = array();
        foreach ($psychology_data  as $key => $value) {
            array_push($psychology, $value['student_nis']);
        }
        $students = $this->userDetail->getStudentMin($psychology);
        $data['title'] = "Dashboard";
        $data['students'] = $students;
        return view('teacher/principal', $data);
    }

    public function inputSchoolRecomendation($nis)
    {
        $result   = $this->request->getVar('result');
        if ($this->request->getFile('psychology')) {
            $files   = $this->request->getFile('psychology');
            $psychology = $files->getRandomName();
            $dir_path = WRITEPATH . 'uploads/doc/principal/';
            $files->move($dir_path, $psychology);
        } else {
            $psychology   = NULL;
        }

        $data = [
            'student_nis'         => $nis,
            'result_principal'     => $result,
            'file_principal'     => $psychology
        ];

        $psychology = $this->studentPsychology->getStudentPsychology($nis);

        if ($psychology) {
            $psychology_id = $psychology['id'];
            $this->studentPsychology->where(['id' => $psychology_id])->set($data)->update();
        } else {
            $this->studentPsychology->insert($data);
        }

        /**
         * Set Message Alert
         */
        $session = session();
        $session->setFlashdata('success', 'Success');
        return redirect()->to('teacher/principal');
    }
}
