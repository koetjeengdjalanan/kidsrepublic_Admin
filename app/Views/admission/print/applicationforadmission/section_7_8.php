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
                    <td style="width: 100%; text-align:center; font-weight:bold; color:white;">SECTION 7 <br /> School Information</td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="font-weight: bold;width: 100%;">Please let us know how you knew abour Kids Republic
                    </td>
                </tr>
                <tr>
                    <td style="font-weight: normal;width: 100%;"><?= $application_admission['student_message_data']['school_information'] ?></td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;background-color:#69CEED;">
            <tbody>
                <tr>
                    <td style="width: 100%; text-align:center; font-weight:bold; color:white;">SECTION 8 <br /> Declaration</td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="font-weight: bold;width: 100%;">Please let us know how you knew abour Kids Republic
                    </td>
                </tr>
                <tr>
                    <td style="font-weight: normal;width: 100%;"><?= $application_admission['student_message_data']['school_information'] ?></td>
                </tr>
            </tbody>
        </table>
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