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
<?php foreach ($students as $s) :
    $application_admission  = $s['application_admission'];
    $health_record          = $s['health_record'];
    $parents_quest          = $s['parents_quest'];
    $vehicle_regist         = $s['vehicle_regist'];
    $school_recommendation  = $s['school_recommendation'];
    $group  = $s['group'];
    // $nis = $application_admission['student_detail']['nis'];
    $nis = $id;
    $name = $application_admission['student_detail']['name'];
    $date_application = new DateTime($application_admission['student_detail']['created_at']);
?>
<?php endforeach; ?>

<body>
    <div class="d-flex justify-content-center mb-1">
        <table style="width: 100%;background-color:#69CEED;">
            <tbody>
                <tr>
                    <td style="width: 100%; text-align:center; font-weight:bold; color:white;">SECTION 3 <br /> Child Talent/Interest</td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="font-weight: bold; width:25%;">Arts</td>
                    <td style="width:75%"><?= $application_admission['student_interest']['arts'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:25%;">Music</td>
                    <td style="width:75%"><?= $application_admission['student_interest']['music'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:25%;">Cognitive</td>
                    <td style="width:75%"><?= $application_admission['student_interest']['cognitive'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:25%;">Sport</td>
                    <td style="width:75%"><?= $application_admission['student_interest']['sport'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:25%;">Organization/Comunity</td>
                    <td style="width:75%"><?= $application_admission['student_interest']['organization_community'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:25%;">Other(s)</td>
                    <td style="width:75%"><?= $application_admission['student_interest']['others'] ?></td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;background-color:#69CEED;">
            <tbody>
                <tr>
                    <td style="width: 100%; text-align:center; font-weight:bold; color:white;">SECTION 4 <br /> Child Background Education</td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="font-weight: bold; width:25%;">Previous School Name</td>
                    <td style="font-weight: bold; width:25%;">Year</td>
                    <td style="font-weight: bold; width:25%;">Address</td>
                    <td style="font-weight: bold; width:25%;">City</td>
                </tr>
                <?php foreach ($application_admission['student_background_edu'] as $background_edu) : ?>
                    <tr>
                        <td style="width: 25%;"><?= $background_edu['prev_school_name'] ?></td>
                        <td style="width: 25%;"><?= $background_edu['year'] ?></td>
                        <td style="width: 25%;"><?= $background_edu['address'] ?></td>
                        <td style="width: 25%;"><?= $background_edu['city'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>