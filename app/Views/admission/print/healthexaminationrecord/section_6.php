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
    ?>
    <?php endforeach; ?>
    <div class="d-flex justify-content-center mb-1">
        <!-- <table style="width: 100%;background-color:#69CEED">
            <tbody>
                <tr>
                    <td style="width: 100%; text-align:center; font-weight:bold; color:white;">Descriptive Section</td>
                </tr>
            </tbody>
        </table> -->
        <div>
            <strong>1. Does child have any present ilness?
            </strong>
            <?= ($health_record['student_health_description']) ? $health_record['student_health_description']['illness'] : ""; ?><br>
            <?php
            if ($health_record['student_health_description']) :
                if ($health_record['student_health_description']['illness'] === 'Yes') : ?>
                    <strong>If yes describe:
                    </strong>
                    <?= ($health_record['student_health_description']) ? $health_record['student_health_description']['describe_illness'] : ""; ?>
            <?php
                endif;
            endif; ?><br><br><br>
            <strong>2. Allergies (include drug allergies): Ever had a serious respiratory reaction to a food, bee sting or a drug?
            </strong><?= ($health_record['student_health_description']) ? $health_record['student_health_description']['respiratory_reaction'] : ""; ?><br><br><br>
            <strong>Medication child is taking:
            </strong><?= ($health_record['student_health_description']) ? $health_record['student_health_description']['medication'] : ""; ?><br><br><br>
            <strong>Hospitalization, Serious injuries: Why? When?
            </strong><?= ($health_record['student_health_description']) ? $health_record['student_health_description']['serious_injuries'] : ""; ?><br><br><br>
            <strong>Wear Glasses?
            </strong> <?= ($health_record['student_health_description']) ? $health_record['student_health_description']['wear_glasses'] : ""; ?><br><br><br>
            <strong>Eye or Vision Problems, describe:
            </strong> <?= ($health_record['student_health_description']) ? $health_record['student_health_description']['vision_problem'] : ""; ?><br><br><br>
            <strong>Hearing problem, multiple ear infection, describe:
            </strong><?= ($health_record['student_health_description']) ? $health_record['student_health_description']['hearing_problem'] : ""; ?><br><br><br>
        </div>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="width: 50%;">
                        <div style="height: 100px;"></div>
                    </td>
                    <td style="width: 50%;">
                        <div style="height: 100px;"></div>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; width: 50%;">
                        <p style="font-weight: bold">Name and Signature of Parent (Mother)</p>
                    </td>
                    <td style="text-align: center; width: 50%;">
                        <p style="font-weight: bold">Date</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 50%;">
                        <div style="height: 100px;"></div>
                    </td>
                    <td style="width: 50%;">
                        <div style="height: 100px;"></div>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; width: 50%;">
                        <p style="font-weight: bold">Name and Signature of Parent (Father)</p>
                    </td>
                    <td style="text-align: center; width: 50%;">
                        <p style="font-weight: bold">Date</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>