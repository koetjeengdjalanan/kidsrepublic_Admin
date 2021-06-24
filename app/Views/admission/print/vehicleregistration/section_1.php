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
        <div>
            <!-- <img src="<?= base_url("/assets/images/Logo_tk.png") ?>" width="100%" alt="Logo_KidsRepublic"> -->
            <h1 class="text-center" style="text-align: center;background-color: #69CEED;color:white;">Vehicle Registration</h1>
            <!-- <img src="<?= base_url("/assets/images/Logo_tk.png") ?>" width="100%" alt="Logo_KidsRepublic"><br /> -->
        </div>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="width: 20%; font-weight: bold;">Child Name</td>
                    <td style="width: 80%;"><?= $application_admission['student_detail']['name'] ?></td>
                </tr>
                <tr>
                    <td style="width: 20%; font-weight: bold;">Parents</td>
                    <td style="width: 80%;"><?= "Mr. " . $application_admission['father_particular']['name'] . "& Mrs. " . $application_admission['mother_particular']['name'] ?></td>
                </tr>
                <tr>
                    <td style="width: 20%; font-weight: bold;">Mother's Phone Number</td>
                    <td style="width: 80%;"><?= $application_admission['mother_particular']['phone_number'] ?></td>
                </tr>
                <tr>
                    <td style="width: 20%; font-weight: bold;">Father's Phone Number</td>
                    <td style="width: 80%;"><?= $application_admission['father_particular']['phone_number'] ?></td>
                </tr>
                <tr>
                    <td style="width: 20%; font-weight: bold;">Address</td>
                    <td style="width: 80%;"><?= $application_admission['student_detail']['address'] ?></td>
                </tr>
                <tr>
                    <td style="width: 20%; font-weight: bold;">Parent's Language</td>
                    <td style="width: 80%;"><?= ($parents_quest['student_family_information_data']) ? $parents_quest['student_family_information_data']['parents_language'] : "N/A"; ?></td>
                </tr>
                <?php foreach ($vehicle_regist['student_vehicle_data'] as $vehicle_data) : ?>
                    <tr>
                        <td style="width: 20%; font-weight: bold;">No Plat</td>
                        <td style="width: 80%;"><?= $vehicle_data['no_plat'] ?></td>
                    </tr>
                    <tr>
                        <td style="width: 20%; font-weight: bold;">Pick Up Person Name</td>
                        <td style="width: 80%;"><?= $vehicle_data['pickup_person'] ?></td>
                    </tr>
                    <tr>
                        <td style="width: 20%; font-weight: bold;">Pick Up Person Phone Number</td>
                        <td style="width: 80%;"><?= $vehicle_data['pickup_person_phone'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <ul>
            <li>
                Pick Up Person / Driver must be someone who held a driving license and above 18 years old
            </li>
            <li>
                You can register maximum 2 vehicles number to get the school sticker and student name card
            </li>
            <li>
                Copy in information must be informed to the school
            </li>
        </ul>
    </div>
</body>

</html>