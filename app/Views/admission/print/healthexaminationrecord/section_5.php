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
        // dd($health_record);
    ?>
    <?php endforeach; ?>
    <div class="d-flex justify-content-center mb-1">
        <table style="width: 100%;background-color:#69CEED">
            <tbody>
                <tr>
                    <td style="width: 100%; text-align:center; font-weight:bold; color:white;">SECTION 5 <br /> Health History/Physical or Mental Disorder</td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="width: 4%;">1</td>
                    <td style="width: 48%; font-weight: bold;">Child Condition during pregnancy</td>
                    <td style="width: 48%;"><?= ($health_record['student_pregnancy_history_data']) ? (($health_record['student_pregnancy_history_data']['during_pregnancy'] === "Normal") ? $health_record['student_pregnancy_history_data']['during_pregnancy'] : $health_record['student_pregnancy_history_data']['during_pregnancy'] . " " . $health_record['student_pregnancy_history_data']['text_during_pregnancy']) : ""; ?></td>
                </tr>
                <tr>
                    <td style="width: 4%;">2</td>
                    <td style="width: 48%; font-weight: bold;">Child condition during labour</td>
                    <td style="width: 48%;"><?= ($health_record['student_pregnancy_history_data']) ? (($health_record['student_pregnancy_history_data']['during_labour'] === "Normal") ? $health_record['student_pregnancy_history_data']['during_labour'] : $health_record['student_pregnancy_history_data']['during_labour'] . " " . $health_record['student_pregnancy_history_data']['text_during_labour']) : ""; ?></td>
                </tr>
                <tr>
                    <td style="width: 4%;">3</td>
                    <td style="width: 48%; font-weight: bold;">Child condition during the first year</td>
                    <td style="width: 48%;"><?= ($health_record['student_pregnancy_history_data']) ? (($health_record['student_pregnancy_history_data']['during_first_year'] === "Normal") ? $health_record['student_pregnancy_history_data']['during_first_year'] : $health_record['student_pregnancy_history_data']['during_first_year'] . " " . $health_record['student_pregnancy_history_data']['text_during_first_year']) : ""; ?></td>
                </tr>
                <tr>
                    <td style="width: 4%;">4</td>
                    <td style="width: 48%; font-weight: bold;">Child condition during the second - third year</td>
                    <td style="width: 48%;"><?= ($health_record['student_pregnancy_history_data']) ? (($health_record['student_pregnancy_history_data']['during_second_third_year'] === "Normal") ? $health_record['student_pregnancy_history_data']['during_second_third_year'] : $health_record['student_pregnancy_history_data']['during_second_third_year'] . " " . $health_record['student_pregnancy_history_data']['text_during_second_third_year']) : ""; ?></td>
                </tr>
                <tr>
                    <td style="width: 4%;">5</td>
                    <td style="width: 48%; font-weight: bold;">Mother physical health during pregnancy</td>
                    <td style="width: 48%;"><?= ($health_record['student_pregnancy_history_data']) ? (($health_record['student_pregnancy_history_data']['mother_physical'] === "Normal") ? $health_record['student_pregnancy_history_data']['mother_physical'] : $health_record['student_pregnancy_history_data']['mother_physical'] . " " . $health_record['student_pregnancy_history_data']['text_mother_physical']) : ""; ?></td>
                </tr>
                <tr>
                    <td style="width: 4%;">6</td>
                    <td style="width: 48%; font-weight: bold;">Mother mental health during pregnancy</td>
                    <td style="width: 48%;"><?= ($health_record['student_pregnancy_history_data']) ? (($health_record['student_pregnancy_history_data']['mother_mental'] === "Normal") ? $health_record['student_pregnancy_history_data']['mother_mental'] : $health_record['student_pregnancy_history_data']['mother_mental'] . " " . $health_record['student_pregnancy_history_data']['text_mother_mental']) : ""; ?></td>
                </tr>
                <tr>
                    <td style="width: 4%;">7</td>
                    <td style="width: 48%; font-weight: bold;">Birth Proses</td>
                    <td style="width: 48%;"><?= ($health_record['student_pregnancy_history_data']) ? $health_record['student_pregnancy_history_data']['birth_proses'] : "" ?></td>
                </tr>
                <tr>
                    <td style="width: 4%;">8</td>
                    <td style="width: 48%; font-weight: bold;">Time of Birth</td>
                    <td style="width: 48%;"><?= ($health_record['student_pregnancy_history_data']) ? $health_record['student_pregnancy_history_data']['time_of_birth'] : "" ?></td>
                </tr>
                <tr>
                    <td style="width: 4%;">9</td>
                    <td style="width: 48%; font-weight: bold;">Time of birth</td>
                    <td style="width: 48%;"><?= ($health_record['student_pregnancy_history_data']) ? $health_record['student_pregnancy_history_data']['baby_nutritional'] : "" ?></td>
                </tr>
                <tr>
                    <td style="width: 4%;">10</td>
                    <td style="width: 24%; font-weight: bold;">Birth Height</td>
                    <td style="width: 22%;"><?= ($health_record['student_pregnancy_history_data']) ? $health_record['student_pregnancy_history_data']['birth_height'] : "" ?> cm</td>
                    <td style="width: 24%; font-weight: bold;">Birth Weight</td>
                    <td style="width: 24%;"><?= ($health_record['student_pregnancy_history_data']) ? $health_record['student_pregnancy_history_data']['birth_weight'] : "" ?> kg</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>