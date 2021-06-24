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
                    <td style="width: 100%; text-align:center; font-weight:bold; color:white;">B. Foundations for Assessment</td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="font-weight: bold; width: 100%">What is the most enjoyable time for you and your child?</td>
                </tr>
                <tr>
                    <td colspan="4"><?= ($family_information != NULL) ?  $family_information['assessment_enjoyable_time'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 100%">How would you describe or label any concerns you have about your child's development, if any?</td>
                </tr>
                <tr>
                    <td colspan="4"><?= ($family_information != NULL) ?  $family_information['assessment_development_concern'] : "N/A"; ?></td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;background-color:#69CEED">
            <tbody>
                <tr>
                    <td style="width: 100%; text-align:center; font-weight:bold; color:white;">C. Previous Evaluations and Current Service</td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="font-weight: bold; width: 100%">Has your child ever had any other development evaluations?</td>
                </tr>
                <tr>
                    <td colspan="4"><?= ($prev_eval_current_service_data != NULL) ? $prev_eval_current_service_data['evaluations'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 100%">If yes, when and where was the evaluation conducted? Please specify</td>
                </tr>
                <tr>
                    <td colspan="4"><?= ($prev_eval_current_service_data != NULL) ? $prev_eval_current_service_data['text_evaluations'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 100%">What were the results?</td>
                </tr>
                <tr>
                    <td colspan="4"><?= ($prev_eval_current_service_data != NULL) ? $prev_eval_current_service_data['results_evaluations'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 100%">Has your child ever been referred for any development service (Psychologist, Speech/Language)?</td>
                </tr>
                <tr>
                    <td colspan="4"><?= ($prev_eval_current_service_data != NULL) ? $prev_eval_current_service_data['service'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 100%">What were the results?</td>
                </tr>
                <tr>
                    <td colspan="4"><?= ($prev_eval_current_service_data != NULL) ? $prev_eval_current_service_data['results_service'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 100%">Who provided the service? Please specify</td>
                </tr>
                <tr>
                    <td colspan="4"><?= ($prev_eval_current_service_data != NULL) ? $prev_eval_current_service_data['provided_service'] : "N/A"; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>