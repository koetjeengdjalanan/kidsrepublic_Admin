<?php

namespace App\Controllers;

use TCPDF;
use Dompdf\Dompdf;
use \App\Models\StudentPsychologyModel;
use \App\Models\UsersModel;
use \App\Models\StudentDetailModel;
use \App\Models\StudentInterestModel;
use \App\Models\StudentBackgroundEduModel;
use \App\Models\StudentBackgroundNonFormalEduModel;
use \App\Models\StudentRelationshipModel;
use \App\Models\StudentMessageModel;
use \App\Models\FathersParticularModel;
use \App\Models\MothersParticularModel;
use \App\Models\StudentImmunizationModel;
use \App\Models\StudentHealthHistoryModel;
use \App\Models\StudentAllergiesModel;
use \App\Models\StudentPregnancyHistoryModel;
use \App\Models\StudentHealthDescriptionModel;
use \App\Models\StudentVehicleModel;
use \App\Models\FormFileModel;
use \App\Models\StudentFamilyInformationModel;
use \App\Models\StudentPrevEvalCurrentServiceModel;
use \App\Models\StudentDevelopmentDomainsModel;
use \App\Models\ParentsSurveyModel;
use \App\Models\A2FormModel;
use \App\Models\A1FormModel;
use \App\Models\BuyFormModel;
use \App\Models\InvoiceStatusModel;
use \App\Models\GroupModel;

class Admission extends BaseController
{
    protected $studentPsychology;
    protected $userDetail;
    protected $studentDetail;
    protected $studentInterest;
    protected $studentBackgroundEdu;
    protected $studentBackgroundNonFormalEdu;
    protected $studentRelationship;
    protected $studentMessage;
    protected $mothersParticular;
    protected $fathersParticular;
    protected $studentImmunization;
    protected $studentHealthHistory;
    protected $studentAllergies;
    protected $studentPregnancyHistory;
    protected $studentHealthDescription;
    protected $studentVehicle;
    protected $formFile;
    protected $studentFamilyInformation;
    protected $studentPrevEvalCurrentService;
    protected $studentDevelopmentDomains;
    protected $parentsSurvey;
    protected $a2form;
    protected $a1form;
    protected $buyForm;
    protected $invoiceStatus;
    protected $group;

    public function __construct()
    {
        # code...
        $this->studentPsychology    = new StudentPsychologyModel();
        $this->userDetail           = new UsersModel();
        $this->studentDetail                     = new StudentDetailModel();
        $this->studentInterest                     = new StudentInterestModel();
        $this->studentBackgroundEdu             = new StudentBackgroundEduModel();
        $this->studentBackgroundNonFormalEdu     = new StudentBackgroundNonFormalEduModel();
        $this->studentRelationship                 = new StudentRelationshipModel();
        $this->studentMessage                     = new StudentMessageModel();
        $this->fathersParticular                 = new FathersParticularModel();
        $this->mothersParticular                 = new MothersParticularModel();
        $this->studentImmunization                = new StudentImmunizationModel();
        $this->studentHealthHistory                = new StudentHealthHistoryModel();
        $this->studentAllergies                    = new StudentAllergiesModel();
        $this->studentPregnancyHistory            = new StudentPregnancyHistoryModel();
        $this->studentHealthDescription            = new StudentHealthDescriptionModel();
        $this->studentVehicle                    = new StudentVehicleModel();
        $this->formFile                            = new FormFileModel();
        $this->studentFamilyInformation            = new StudentFamilyInformationModel();
        $this->studentPrevEvalCurrentService    = new StudentPrevEvalCurrentServiceModel();
        $this->studentDevelopmentDomains        = new StudentDevelopmentDomainsModel();
        $this->parentsSurvey                    = new ParentsSurveyModel();
        $this->a2form                            = new A2FormModel();
        $this->a1form                            = new A1FormModel();
        $this->buyForm                            = new BuyFormModel();
        $this->invoiceStatus = new InvoiceStatusModel();
        $this->group = new GroupModel();
    }

    protected function studentData($nis = null)
    {
        $students = [];
        if ($nis === null) {
            $student_detail = $this->studentDetail->findAll();
        } else {
            $student_detail = $this->studentDetail->where(['nis' => $nis])->findALl();
        }
        foreach ($student_detail as $s) {

            $new['application_admission'] = null;
            $new['health_record'] = null;
            $new['parents_quest'] = null;
            $new['vehicle_regist'] = null;
            $new['school_recommendation'] = null;
            $new['a1_form'] = null;
            $new['a2_form'] = null;

            $user_id = $s['users_id'];
            $nis = $s['nis'];
            $fathersParticular_id = $s['fathers_id'];
            $mothersParticular_id = $s['mothers_id'];
            $new_students = ["student_detail" => $s];
            $fathersParticular = $this->fathersParticular->getFathersParticularDetail($fathersParticular_id);
            if ($fathersParticular != null) {
                $new_students['father_particular'] = $fathersParticular;
            }
            $mothersParticular = $this->mothersParticular->getMothersParticularDetail($mothersParticular_id);
            if ($mothersParticular != null) {
                $new_students['mother_particular'] = $mothersParticular;
            }

            $studentInterest = $this->studentInterest->getStudentInterest($nis);
            $new_students['student_interest'] = $studentInterest;

            $studentBackgroundEdu = $this->studentBackgroundEdu->where(["student_nis" => 1])->get()->getResultArray();
            $new_students['student_background_edu'] = $studentBackgroundEdu;

            $new_students['student_background_nonformal_edu_data'] = $this->studentBackgroundNonFormalEdu->getStudentBackgroundNonFormalEdu($nis);

            $new_students['student_relationship_data'] = $this->studentRelationship->getStudentRelationship($nis);

            $new_students['student_message_data'] = $this->studentMessage->getStudentMessage($nis);
            $new_students['profile_pict'] = $this->formFile->getFormFile($user_id, NULL, 'profile_pict');

            $new_students_health['student_immunization_data'] = $this->studentImmunization->getStudentImmunization($nis);
            $new_students_health['student_health_history_data'] = $this->studentHealthHistory->getStudentHealthHistory($nis);
            $new_students_health['student_allergies_data'] = $this->studentAllergies->getStudentAllergies(($nis));
            $new_students_health['student_pregnancy_history_data'] = $this->studentPregnancyHistory->getStudentPregnancyHistory($nis);
            $new_students_health['student_health_description'] = $this->studentHealthDescription->getStudentHealthDescription($nis);

            $new_student_parents_quest['student_family_information_data'] = $this->studentFamilyInformation->getStudentFamilyInformation($nis);
            $new_student_parents_quest['student_prev_eval_current_service_data'] = $this->studentPrevEvalCurrentService->getStudentPrevEvalCurrentService($nis);
            $new_student_parents_quest['student_development_domains_data'] = $this->studentDevelopmentDomains->getStudentDevelopmentDomains($nis);
            $new_student_parents_quest['parents_survey_data'] = $this->parentsSurvey->getParentsSurvey($nis);

            $new_student_vehicle['student_vehicle_data']         = $this->studentVehicle->getStudentVehicle($nis);
            $new_school_recommendation = $this->formFile->getFormFile($user_id, NULL, 'prevschool');

            $a1_form_student = $this->a1form->getA1Form($nis);
            $a2_form_student = $this->a2form->getA2Form($nis);

            $group = $this->group->getGroupsForUser($user_id);

            $new['application_admission'] = $new_students;
            $new['health_record'] = $new_students_health;
            $new['parents_quest'] = $new_student_parents_quest;
            $new['vehicle_regist'] = $new_student_vehicle;
            $new['school_recommendation'] = $new_school_recommendation;
            $new['a1_form'] = $a1_form_student;
            $new['a2_form'] = $a2_form_student;
            if ($group) {
                $new['group'] = $group[0];
            } else {
                $new['group'] = ['description' => null, 'name' => null];
            }

            $students[$nis] = $new;
        }
        return $students;
    }



    public function index()
    {
        // $psychology_data = $this->studentPsychology->findAll();
        $psychology_data = $this->studentPsychology->select('student_nis')->where('result_psycholog !=', NULL)->orWhere('file_psycholog !=', NULL)->findAll();
        $psychology = array();
        foreach ($psychology_data  as $key => $value) {
            array_push($psychology, $value['student_nis']);
        }
        $students = $this->userDetail->getStudentMin($psychology);
        $request_form = $this->buyForm->select('count(id) AS count')->where('status', 0)->first();
        $request_form = $request_form['count'];
        $data = [
            'title'   => 'Admission Dashboard',
            'students' => $students,
            'request_form' => $request_form,
        ];
        return view('admission/index', $data);
    }

    public function psychology()
    {
        // $psychology_data = $this->studentPsychology->findAll();
        $psychology_data = $this->studentPsychology->select('student_nis')->where('result_psycholog !=', NULL)->orWhere('file_psycholog !=', NULL)->findAll();
        $psychology = array();
        foreach ($psychology_data  as $key => $value) {
            array_push($psychology, $value['student_nis']);
        }
        $students = $this->userDetail->getStudentMin($psychology);
        $data = [
            'title'   => 'Admission Dashboard',
            'students' => $students
        ];
        return view('admission/psychology', $data);
    }

    public function verification()
    {
        $students = $this->studentData();
        // $students = $this->a2form->findAll();
        $data = [
            'title'   => 'Verification',
            'students' => $students
        ];
        return view('admission/verification', $data);
    }

    /**
     * Input data admission
     */

    public function print($page, $nis)
    {
        // $dompdf = new Dompdf();
        $students = $this->studentData($nis);
        $data = [
            'title'   => 'Verification',
            'students' => $students,
            'id'    => $nis
        ];
        $pdf = new TCPDF('potrait', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Kids Republic');
        $pdf->SetSubject('Registration Form');
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->SetMargins(5, 1, 5);
        $pdf->SetHeaderMargin(0);
        $pdf->SetFooterMargin(0);
        switch ($page) {
            case '1':
                // return view('admission/print/applicationforadmission', $data);
                $pdf->SetTitle('Application for Admission Form');
                $body = view('admission/print/applicationforadmission/section_1', $data);
                $body_2 = view('admission/print/applicationforadmission/section_2', $data);
                $body_3 = view('admission/print/applicationforadmission/section_3_4', $data);
                $body_4 = view('admission/print/applicationforadmission/section_5_6', $data);
                $body_5 = view('admission/print/applicationforadmission/section_7_8', $data);
                $pdf->AddPage();
                $pdf->writeHTML($body, true, false, true, false, '');
                $pdf->AddPage();
                $pdf->writeHTML($body_2, true, false, true, false, '');
                $pdf->AddPage();
                $pdf->writeHTML($body_3, true, false, true, false, '');
                $pdf->AddPage();
                $pdf->writeHTML($body_4, true, false, true, false, '');
                $pdf->AddPage();
                $pdf->writeHTML($body_5, true, false, true, false, '');
                $this->response->setContentType('application/pdf');
                $pdf->Output('applicationforadmission.pdf', 'I');
                exit;
                break;
            case '2':
                // return view('admission/print/healthexaminationrecord', $data);
                $pdf->SetTitle('Health Examination Form');
                $body = view('admission/print/healthexaminationrecord/section_1_2', $data);
                $body_2 = view('admission/print/healthexaminationrecord/section_3_4', $data);
                $body_3 = view('admission/print/healthexaminationrecord/section_5', $data);
                $body_4 = view('admission/print/healthexaminationrecord/section_6', $data);
                $pdf->AddPage();
                $pdf->writeHTML($body, true, false, true, false, '');
                $pdf->AddPage();
                $pdf->writeHTML($body_2, true, false, true, false, '');
                $pdf->AddPage();
                $pdf->writeHTML($body_3, true, false, true, false, '');
                $pdf->AddPage();
                $pdf->writeHTML($body_4, true, false, true, false, '');
                $this->response->setContentType('application/pdf');
                $pdf->Output('healthexaminationrecord.pdf', 'I');
                exit;
                break;
            case '3':
                // return view('admission/print/parentsquestionnaire', $data);
                $pdf->SetTitle("Parent's Questionnaire Form");
                $body = view('admission/print/parentsquestionnaire/section_1', $data);
                $body_2 = view('admission/print/parentsquestionnaire/section_2_3', $data);
                $body_3 = view('admission/print/parentsquestionnaire/section_4', $data);
                $body_4 = view('admission/print/parentsquestionnaire/section_5', $data);
                $body_5 = view('admission/print/parentsquestionnaire/section_6', $data);
                $pdf->AddPage();
                $pdf->writeHTML($body, true, false, true, false, '');
                $pdf->AddPage();
                $pdf->writeHTML($body_2, true, false, true, false, '');
                $pdf->AddPage();
                $pdf->writeHTML($body_3, true, false, true, false, '');
                $pdf->AddPage();
                $pdf->writeHTML($body_4, true, false, true, false, '');
                $pdf->AddPage();
                $pdf->writeHTML($body_5, true, false, true, false, '');
                $this->response->setContentType('application/pdf');
                $pdf->Output('parentsquestionnaire.pdf', 'I');
                exit;
                break;
            case '4':
                // return view('admission/print/vehicleregistration', $data);
                $pdf->SetTitle("Vehicle Registration Form");
                $body = view('admission/print/vehicleregistration/section_1', $data);
                $pdf->AddPage();
                $pdf->writeHTML($body, true, false, true, false, '');
                $this->response->setContentType('application/pdf');
                $pdf->Output('vehicleregistration.pdf', 'I');
                exit;
                break;
            case '5':
                // return $this->response->download(APPPATH . 'assets/upload/doc/' . $nis);
                break;
            case '6':
                // dd($data);
                // $body = view('admission/print/testadmission', $data);
                $pdf->SetTitle('Registration Form');
                /**
                 * Application Admission
                 */
                $body = view('admission/print/applicationforadmission/section_1', $data);
                $body_2 = view('admission/print/applicationforadmission/section_2', $data);
                $body_3 = view('admission/print/applicationforadmission/section_3_4', $data);
                $body_4 = view('admission/print/applicationforadmission/section_5_6', $data);
                $body_5 = view('admission/print/applicationforadmission/section_7_8', $data);
                $pdf->AddPage();
                $pdf->writeHTML($body, true, false, true, false, '');
                $pdf->AddPage();
                $pdf->writeHTML($body_2, true, false, true, false, '');
                $pdf->AddPage();
                $pdf->writeHTML($body_3, true, false, true, false, '');
                $pdf->AddPage();
                $pdf->writeHTML($body_4, true, false, true, false, '');
                $pdf->AddPage();
                $pdf->writeHTML($body_5, true, false, true, false, '');

                /**
                 * Health
                 */
                $body = view('admission/print/healthexaminationrecord/section_1_2', $data);
                $body_2 = view('admission/print/healthexaminationrecord/section_3_4', $data);
                $body_3 = view('admission/print/healthexaminationrecord/section_5', $data);
                $body_4 = view('admission/print/healthexaminationrecord/section_6', $data);
                $pdf->AddPage();
                $pdf->writeHTML($body, true, false, true, false, '');
                $pdf->AddPage();
                $pdf->writeHTML($body_2, true, false, true, false, '');
                $pdf->AddPage();
                $pdf->writeHTML($body_3, true, false, true, false, '');
                $pdf->AddPage();
                $pdf->writeHTML($body_4, true, false, true, false, '');

                /**
                 * Parents quest
                 */
                $body = view('admission/print/parentsquestionnaire/section_1', $data);
                $body_2 = view('admission/print/parentsquestionnaire/section_2_3', $data);
                $body_3 = view('admission/print/parentsquestionnaire/section_4', $data);
                $body_4 = view('admission/print/parentsquestionnaire/section_5', $data);
                $body_5 = view('admission/print/parentsquestionnaire/section_6', $data);
                $pdf->AddPage();
                $pdf->writeHTML($body, true, false, true, false, '');
                $pdf->AddPage();
                $pdf->writeHTML($body_2, true, false, true, false, '');
                $pdf->AddPage();
                $pdf->writeHTML($body_3, true, false, true, false, '');
                $pdf->AddPage();
                $pdf->writeHTML($body_4, true, false, true, false, '');
                $pdf->AddPage();
                $pdf->writeHTML($body_5, true, false, true, false, '');

                /**
                 * Vehicle
                 */
                $body = view('admission/print/vehicleregistration/section_1', $data);
                $pdf->AddPage();
                $pdf->writeHTML($body, true, false, true, false, '');
                $pdf->AddPage();
                $this->response->setContentType('application/pdf');
                $pdf->Output('registrationform.pdf', 'I');
                exit;
                break;
            default:
                return view('errors/html/error_404');
                break;
        }
    }

    public function inputpsychology($nis)
    {
        $result   = $this->request->getVar('result');
        if ($this->request->getFile('psychology')) {
            $files   = $this->request->getFile('psychology');
            $psychology = $files->getRandomName();
            $dir_path = WRITEPATH . 'uploads/doc/psychology/psycholog/';
            $files->move($dir_path, $psychology);
        } else {
            $psychology   = NULL;
        }

        $data = [
            'student_nis'             => $nis,
            'result_psycholog'       => $result,
            'file_psycholog'         => $psychology
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
        return redirect()->to('/admission');
    }

    public function inputA1($nis)
    {
        $data = [];
        $a1 = $this->a1form->getA1Form($nis);
        if ($a1) {
            foreach ($a1 as $keys => $values) {
                if ($keys == "id") {
                    $data[$keys] = $values;
                    continue;
                }
                if ($keys == "created_at") break;
                $data[$keys] = 0;
            }
        }
        foreach ($this->request->getVar() as $key => $value) {
            # code...
            if ($key === "csrf_test_name") continue;
            if ($key === "pma_lang") break;
            $data[$key] = 1;
        }
        if (count($data) != 0) {
            $data['student_nis'] = $nis;
            $this->a1form->save($data);
        }
        $session = session();
        $session->setFlashdata('success', 'Success');
        return redirect()->to('/admission/verification');
    }

    public function inputA2($nis)
    {
        $data = [];
        $a2 = $this->a2form->getA2Form($nis);
        if ($a2) {
            foreach ($a2 as $keys => $values) {
                if ($keys == "id") {
                    $data[$keys] = $values;
                    continue;
                }
                if ($keys == "created_at") break;
                $data[$keys] = 0;
            }
        }
        foreach ($this->request->getVar() as $key => $value) {
            # code...
            if ($key === "csrf_test_name") continue;
            if ($key === "pma_lang") break;
            $data[$key] = 1;
        }
        if (count($data) != 0) {
            $data['student_nis'] = $nis;
            $this->a2form->save($data);
            if ($data['status'] == 1) {
                $invoiceStatus = $this->invoiceStatus->getInvoiceStatus($nis);
                if (!$invoiceStatus) {
                    $data_invoice['student_nis'] = $nis;
                    $data_invoice['status'] = 0;
                    $data_invoice['no_invoice'] = "INV" . date("ymd") . mt_rand(1000, 9999);
                    $this->invoiceStatus->save($data_invoice);
                }
            }
        }
        $session = session();
        $session->setFlashdata('success', 'Success');
        return redirect()->to('/admission/verification');
    }
}
