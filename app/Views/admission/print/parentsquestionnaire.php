<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap 4 CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parents Questionnaire Form</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-spacing: 10px;
        }

        th,
        td {
            width: 25%;
            padding: 5px;
        }

        hr {
            width: 100px;
            height: 10px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    <script type="text/javascript">
        window.onload = function() {
            window.print();
        }
        var d = new Date();
        document.getElementById("current_time").innerHTML = d;
    </script>
</head>

<body>
    <?php foreach ($students as $s) :
        $application_admission  = $s['application_admission'];
        $health_record          = $s['health_record'];
        $parents_quest          = $s['parents_quest'];
        $nis = $id;
        $name = $application_admission['student_detail']['name'];

        $health_description = $health_record['student_health_description'];

        $family_information = $parents_quest['student_family_information_data'];
        $prev_eval_current_service_data = $parents_quest['student_prev_eval_current_service_data'];
        $student_development_domains_data = $parents_quest['student_development_domains_data'];
        $parents_survey_data = $parents_quest['parents_survey_data'];
    ?>
        <div class="d-flex justify-content-center mb-1">
            <div class="col-8">
                <h1 class="text-center">Parents Questionnaire Form</h1> <br />
                <h3 id="current_time"></h3>
            </div>
        </div>
        <div class="d-flex justify-content-center my-5">
            <table style="width: 98%;">
                <thead>
                    <!-- <th colspan="6">
                        <h2 class="text-center">Section 1 <br /> Child Particular's</h2>
                    </th> -->
                </thead>
                <tbody>
                    <tr>
                        <td style="font-weight: bold;">Name of Child</td>
                        <td><?= $application_admission['student_detail']['name'] ?></td>
                        <td style="font-weight: bold;">Date of Birth</td>
                        <td><?= $application_admission['student_detail']['dob'] ?></td>
                        <td style="font-weight: bold;">Gender</td>
                        <td><?= $application_admission['student_detail']['gender'] ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Mother's Name</td>
                        <td><?= $application_admission['mother_particular']['name'] ?></td>
                        <td style="font-weight: bold;">Father's Name</td>
                        <td colspan="3"><?= $application_admission['father_particular']['name'] ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Parents's Native Language</td>
                        <td colspan="5"><?= $family_information['parents_language'] ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Child's Native Language</td>
                        <td colspan="5"><?= $application_admission['student_detail']['language'] ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Person Completing this Form</td>
                        <td colspan="5"><?= $family_information['person_completing'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p>A. Child and Family Information</p>
        <div class="d-flex justify-content-center">
            <table style="width: 98%;">
                <tbody>
                    <tr>
                        <td style="font-weight: bold;">Does child have any present illness?</td>
                        <td><?= ($health_description) ? $health_description['illness'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">if yes describe:</td>
                        <td><?= ($health_description) ? $health_description['describe_illness'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td colspan="6" style="font-weight: bold;">Indicate sibling or any other individuals including nannies/caregivers living with your child :</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center my-2">
            <table style="width: 98%;">
                <thead>
                    <th>No.</th>
                    <th>Names</th>
                    <th>Ages</th>
                    <th>Relationship to Child</th>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        $x = 1;
                        foreach ($application_admission['student_relationship_data'] as $relationship_data) : ?>
                            <td><?= $x ?>.</td>
                            <td><?= $relationship_data['name'] ?></td>
                            <td><?= $relationship_data['ages'] ?></td>
                            <td><?= $relationship_data['relationship'] ?></td>
                        <?php
                            $x++;
                        endforeach; ?>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            <table style="width: 98%;">
                <tbody>
                    <tr>
                        <td style="font-weight: bold;">With whom does your child stay during the day? (Name of person and relationship to child and/or name of cate center)</td>
                        <td colspan="4"><?= ($family_information != NULL) ?  $family_information['whom_stay_during_day'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Description any unique family circumstances that have a significant impact on your child’s development</td>
                        <td colspan="4"><?= ($family_information != NULL) ?  $family_information['family_circumstances'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">What family values/principles do you implement at home?</td>
                        <td colspan="4"><?= ($family_information != NULL) ?  $family_information['family_principles'] : "N/A"; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="my-5">B. Foundations for Assessment</p>
        <div class="d-flex justify-content-center">
            <table style="width: 98%;">
                <tbody>
                    <tr>
                        <td style="font-weight: bold;">What is the most enjoyable time for you and your child?</td>
                        <td colspan="4"><?= ($family_information != NULL) ?  $family_information['assessment_enjoyable_time'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">How would you describe or label any concerns you have about your child's development, if any?</td>
                        <td colspan="4"><?= ($family_information != NULL) ?  $family_information['assessment_development_concern'] : "N/A"; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="my-5">C. Previous Evaluations and Current Service</p>
        <div class="d-flex justify-content-center">
            <table style="width: 98%;">
                <tbody>
                    <tr>
                        <td style="font-weight: bold;">Has your child ever had any other development evaluations?</td>
                        <td colspan="4"><?= ($prev_eval_current_service_data != NULL) ? $prev_eval_current_service_data['evaluations'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">If yes, when and where was the evaluation conducted? Please specify</td>
                        <td colspan="4"><?= ($prev_eval_current_service_data != NULL) ? $prev_eval_current_service_data['text_evaluations'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">What were the results?</td>
                        <td colspan="4"><?= ($prev_eval_current_service_data != NULL) ? $prev_eval_current_service_data['results_evaluations'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Has your child ever been referred for any development service (Psychologist, Speech/Language)?</td>
                        <td colspan="4"><?= ($prev_eval_current_service_data != NULL) ? $prev_eval_current_service_data['service'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">What were the results?</td>
                        <td colspan="4"><?= ($prev_eval_current_service_data != NULL) ? $prev_eval_current_service_data['results_service'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Who provided the service? Please specify</td>
                        <td colspan="4"><?= ($prev_eval_current_service_data != NULL) ? $prev_eval_current_service_data['provided_service'] : "N/A"; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="my-5">D. Development Domains</p>
        <div class="d-flex justify-content-center">
            <table style="width: 98%;">
                <tbody>
                    <tr>
                        <td style="font-weight: bold;">Does your child eat and drink independently?</td>
                        <td colspan="4"><?= ($student_development_domains_data != NULL) ? $student_development_domains_data['eat_drink'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Does your child dress himself/herself independently?</td>
                        <td colspan="4"><?= ($student_development_domains_data != NULL) ? $student_development_domains_data['dress'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Can your child use the toilet independently?</td>
                        <td colspan="4"><?= ($student_development_domains_data != NULL) ? $student_development_domains_data['use_toilet'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Does your child respond appropriately to adult requests?</td>
                        <td colspan="4"><?= ($student_development_domains_data != NULL) ? $student_development_domains_data['respond_approiately'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Does your child seek out playing with other children?</td>
                        <td colspan="4"><?= ($student_development_domains_data != NULL) ? $student_development_domains_data['seek_out_playing'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Does your child play cooperatively with other children?</td>
                        <td colspan="4"><?= ($student_development_domains_data != NULL) ? $student_development_domains_data['play_cooperatively'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Does your child speak in complete sentences?</td>
                        <td colspan="4"><?= ($student_development_domains_data != NULL) ? $student_development_domains_data['speak'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Do people who are unfamiliar with your child have difficulty understanding him/her?</td>
                        <td colspan="4"><?= ($student_development_domains_data != NULL) ? $student_development_domains_data['people_unfamiliar'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Does your child verbally express his/her wants and needs?</td>
                        <td colspan="4"><?= ($student_development_domains_data != NULL) ? $student_development_domains_data['verbally'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Can your child write words or simple sentences?</td>
                        <td colspan="4"><?= ($student_development_domains_data != NULL) ? $student_development_domains_data['write_words'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Can your child read?</td>
                        <td colspan="4"><?= ($student_development_domains_data != NULL) ? $student_development_domains_data['can_read'] : "N/A"; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="my-5">E. Parents Survey</p>
        <div class="d-flex justify-content-center">
            <table style="width: 98%;">
                <tbody>
                    <tr>
                        <td style="font-weight: bold;">Why do you choose Kids Republic for your child’s education?</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['why_choose'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">What kind of education method you think Kids Republic offers?</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['method_think'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">What is your hope for your child’s education at Kids Republic School?</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['hope'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Elaborate your opinion on education responsibilities for a child?</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['responsibilities_opinion'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">What does your child want to become when he/she grow up?</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['want_to_become'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">What do you wish for your child to become when he/she grow up?</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['wish'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">What is an ideal curriculum method in your opinion?</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['ideal_curriculum'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">What is your opinion on the National Exam (UN) / National Curriculum?</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['un_opinion'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">What is your opinion on International exams / curriculums, such as IB or Cambridge? Which do you prefer?</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['international_exam_opinion'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Which do you prefer using both National and International curriculum, or just one? Please specify</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['curriculum_prefer'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Your hope and expectations for your child in terms of the objectives : Spiritual development target</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['spiritual_hope'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Your hope and expectations for your child in terms of the objectives : Academics Development target</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['academics_hope'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Your hope and expectations for your child in terms of the objectives : Global view development target</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['global_view_hope'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Your hope and expectations for your child in terms of the objectives : Nationality development target</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['nationality_hope'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Your hope and expectations for your child in terms of the objectives : Social emotional development target</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['social_emotional_hope'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">What effort will you make to achieve the targets : Spiritual development target</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['spirit_effort'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">What effort will you make to achieve the targets : Academics Development target</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['academics_effort'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">What effort will you make to achieve the targets : Global view development target</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['global_view_effort'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">What effort will you make to achieve the targets : Nationality development target</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['nationality_effort'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">What effort will you make to achieve the targets : Social emotional development target</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['social_emotional_effort'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Write 5 words to describe your child</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['child_describe'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">If you find your children in these situations, how do you choose to respond? Demotivation?</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['demotivation_respond'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">If you find your children in these situations, how do you choose to respond? Bullying?</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['bullying_respond'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">If you find your children in these situations, how do you choose to respond? Cheating?</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['cheating_respond'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">If you find your children in these situations, how do you choose to respond? Failure to complete homework / assignment?</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['failure_respond'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">If you find your children in these situations, how do you choose to respond? Lateness to School?</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['lateness_respond'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Who interacts most often with your child at home?</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['most_interacts'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">How is your communication with your child at home? Please give examples</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['communication'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">How is the idea's school - parent's relationship in helping the child to excel?</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['ideas'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">As parents may be aware, Kids Republic School is a private school which the school fees are obligated to parent. If you deal with financing problem in the future what will you do to finance your child's education?</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['finance'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">What is your opinion on student's independence?</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['student_independence'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">What will you do to train your child's independence at home?</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['independence_train'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">According to your opinion, are the student's belongings be the school or student's reponsibilities? Please explain your answer.</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['parents_opinion'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Why do you think that you are eligible to be accepted at Kids Republic School?</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['eligible'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">What contribution will you make to the school, once you are accepted?</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['contribution'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Personal notes to the school</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['school_notes'] : "N/A"; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Personal notes to homeroom teachers</td>
                        <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['teacher_notes'] : "N/A"; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row mx-3">
            <div class="col-5" style="height: 250px; width:100%; border-bottom:2px solid black;">
            </div>
            <div class="col-1">
            </div>
            <div class="col-5" style="height: 250px; width:100%; border-bottom:2px solid black;">
            </div>
            <div class="col-1">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="row w-100">
                <div class="col-6">
                    <h3>Name and Signature of Parent (Mother)</h3>
                </div>
                <div class="col-6">
                    <h3>Date</h3>
                </div>
            </div>
        </div>
        <div class="row mx-3">
            <div class="col-5" style="height: 250px; width:100%; border-bottom:2px solid black;">
            </div>
            <div class="col-1">
            </div>
            <div class="col-5" style="height: 250px; width:100%; border-bottom:2px solid black;">
            </div>
            <div class="col-1">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="row w-100">
                <div class="col-6">
                    <h3>Name and Signature of Parent (Father)</h3>
                </div>
                <div class="col-6">
                    <h3>Date</h3>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</body>

</html>