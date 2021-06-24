<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap 4 CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Application For Admission</title>
</head>

<body>
    <?php foreach ($students as $s) :
        $application_admission  = $s['application_admission'];
        $health_record          = $s['health_record'];
        $parents_quest          = $s['parents_quest'];
        $vehicle_regist         = $s['vehicle_regist'];
        $school_recommendation  = $s['school_recommendation'];
        $nis = $id;
        $name = $application_admission['student_detail']['name'];
        $health_description = $health_record['student_health_description'];

        $family_information = $parents_quest['student_family_information_data'];
        $prev_eval_current_service_data = $parents_quest['student_prev_eval_current_service_data'];
        $student_development_domains_data = $parents_quest['student_development_domains_data'];
        $parents_survey_data = $parents_quest['parents_survey_data'];
    ?>
    <?php endforeach; ?>
    <div class="d-flex justify-content-center mb-1">
        <table style="width: 100%;background-color:#69CEED">
            <tbody>
                <tr>
                    <td style="width: 100%; text-align:center; font-weight:bold; color:white;">E. Parents Survey</td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="font-weight: bold; width: 75%">Why do you choose Kids Republic for your child’s education?</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['why_choose'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">What kind of education method you think Kids Republic offers?</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['method_think'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">What is your hope for your child’s education at Kids Republic School?</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['hope'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">Elaborate your opinion on education responsibilities for a child?</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['responsibilities_opinion'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">What does your child want to become when he/she grow up?</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['want_to_become'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">What do you wish for your child to become when he/she grow up?</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['wish'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">What is an ideal curriculum method in your opinion?</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['ideal_curriculum'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">What is your opinion on the National Exam (UN) / National Curriculum?</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['un_opinion'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">What is your opinion on International exams / curriculums, such as IB or Cambridge? Which do you prefer?</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['international_exam_opinion'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">Which do you prefer using both National and International curriculum, or just one? Please specify</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['curriculum_prefer'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">Your hope and expectations for your child in terms of the objectives : Spiritual development target</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['spiritual_hope'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">Your hope and expectations for your child in terms of the objectives : Academics Development target</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['academics_hope'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">Your hope and expectations for your child in terms of the objectives : Global view development target</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['global_view_hope'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">Your hope and expectations for your child in terms of the objectives : Nationality development target</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['nationality_hope'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">Your hope and expectations for your child in terms of the objectives : Social emotional development target</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['social_emotional_hope'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">What effort will you make to achieve the targets : Spiritual development target</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['spirit_effort'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">What effort will you make to achieve the targets : Academics Development target</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['academics_effort'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">What effort will you make to achieve the targets : Global view development target</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['global_view_effort'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">What effort will you make to achieve the targets : Nationality development target</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['nationality_effort'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">What effort will you make to achieve the targets : Social emotional development target</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['social_emotional_effort'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">Write 5 words to describe your child</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['child_describe'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">If you find your children in these situations, how do you choose to respond? Demotivation?</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['demotivation_respond'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">If you find your children in these situations, how do you choose to respond? Bullying?</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['bullying_respond'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">If you find your children in these situations, how do you choose to respond? Cheating?</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['cheating_respond'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">If you find your children in these situations, how do you choose to respond? Failure to complete homework / assignment?</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['failure_respond'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">If you find your children in these situations, how do you choose to respond? Lateness to School?</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['lateness_respond'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">Who interacts most often with your child at home?</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['most_interacts'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">How is your communication with your child at home? Please give examples</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['communication'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">How is the idea's school - parent's relationship in helping the child to excel?</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['ideas'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">As parents may be aware, Kids Republic School is a private school which the school fees are obligated to parent. If you deal with financing problem in the future what will you do to finance your child's education?</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['finance'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">What is your opinion on student's independence?</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['student_independence'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">What will you do to train your child's independence at home?</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['independence_train'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">According to your opinion, are the student's belongings be the school or student's reponsibilities? Please explain your answer.</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['parents_opinion'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">Why do you think that you are eligible to be accepted at Kids Republic School?</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['eligible'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">What contribution will you make to the school, once you are accepted?</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['contribution'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">Personal notes to the school</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['school_notes'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">Personal notes to homeroom teachers</td>
                    <td colspan="4"><?= ($parents_survey_data != NULL) ? $parents_survey_data['teacher_notes'] : "N/A"; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>