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
        <table style="width: 100%;background-color:#69CEED">
            <tbody>
                <tr>
                    <td style="width: 100%; text-align:center; font-weight:bold; color:white;">SECTION 3 <br /> Health History/Physical or Mental Disorder</td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="font-weight: bold; width: 10%;">No.</td>
                    <td style="font-weight: bold; width: 40%;">Sickness/Disorder</td>
                    <td style="font-weight: bold; width: 10%;">Age</td>
                    <td style="font-weight: bold; width: 40%;">Prevention/Medication</td>
                </tr>
                <?php
                $count_health_history = 1;
                foreach ($health_record['student_health_history_data'] as $health_history_data) { ?>
                    <tr>
                        <td style="width: 10%;"><?= $count_health_history ?></td>
                        <td style="width: 40%;"><?= $health_history_data['sickness_disorder'] ?></td>
                        <td style="width: 10%;"><?= $health_history_data['age'] ?></td>
                        <td style="width: 40%;"><?= $health_history_data['prevention_medication'] ?></td>
                    </tr>
                <?php
                    $count_health_history += 1;
                } ?>
            </tbody>
        </table>
        <table style="width: 100%;background-color:#69CEED">
            <tbody>
                <tr>
                    <td style="width: 100%; text-align:center; font-weight:bold; color:white;">SECTION 4 <br /> Allergies</td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="font-weight: bold; width: 10%;">No.</td>
                    <td style="font-weight: bold; width: 40%;">Type of Allergy</td>
                    <td style="font-weight: bold; width: 10%;">Age</td>
                    <td style="font-weight: bold; width: 40%;">Prevention/Medication</td>
                </tr>
                <?php
                $count_allergies = 1;
                foreach ($health_record['student_allergies_data'] as $allergies_data) { ?>
                    <tr>
                        <td style="width: 10%;"><?= $count_allergies ?></td>
                        <td style="width: 40%;"><?= $allergies_data['type'] ?></td>
                        <td style="width: 10%;"><?= $allergies_data['age'] ?></td>
                        <td style="width: 40%;"><?= $allergies_data['prevention_medication'] ?></td>
                    </tr>
                <?php
                    $count_allergies += 1;
                } ?>
            </tbody>
        </table>
    </div>
</body>

</html>