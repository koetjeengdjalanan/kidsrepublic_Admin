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
                    <td style="width: 100%; text-align:center; font-weight:bold; color:white;">D. Development Domains</td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="font-weight: bold; width: 75%">Does your child eat and drink independently?</td>
                    <td colspan="4"><?= ($student_development_domains_data != NULL) ? $student_development_domains_data['eat_drink'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">Does your child dress himself/herself independently?</td>
                    <td colspan="4"><?= ($student_development_domains_data != NULL) ? $student_development_domains_data['dress'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">Can your child use the toilet independently?</td>
                    <td colspan="4"><?= ($student_development_domains_data != NULL) ? $student_development_domains_data['use_toilet'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">Does your child respond appropriately to adult requests?</td>
                    <td colspan="4"><?= ($student_development_domains_data != NULL) ? $student_development_domains_data['respond_approiately'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">Does your child seek out playing with other children?</td>
                    <td colspan="4"><?= ($student_development_domains_data != NULL) ? $student_development_domains_data['seek_out_playing'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">Does your child play cooperatively with other children?</td>
                    <td colspan="4"><?= ($student_development_domains_data != NULL) ? $student_development_domains_data['play_cooperatively'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">Does your child speak in complete sentences?</td>
                    <td colspan="4"><?= ($student_development_domains_data != NULL) ? $student_development_domains_data['speak'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">Do people who are unfamiliar with your child have difficulty understanding him/her?</td>
                    <td colspan="4"><?= ($student_development_domains_data != NULL) ? $student_development_domains_data['people_unfamiliar'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">Does your child verbally express his/her wants and needs?</td>
                    <td colspan="4"><?= ($student_development_domains_data != NULL) ? $student_development_domains_data['verbally'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">Can your child write words or simple sentences?</td>
                    <td colspan="4"><?= ($student_development_domains_data != NULL) ? $student_development_domains_data['write_words'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 75%">Can your child read?</td>
                    <td colspan="4"><?= ($student_development_domains_data != NULL) ? $student_development_domains_data['can_read'] : "N/A"; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>