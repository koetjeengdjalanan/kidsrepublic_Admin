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
                    <td style="width: 100%; text-align:center; font-weight:bold; color:white;">SECTION 5 <br /> Child Non-Formal Education Background/Extraculiculer Activities</td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="font-weight: bold; width:25%;">Type of Lessons/Activities</td>
                    <td style="font-weight: bold; width:25%;">Location</td>
                    <td style="font-weight: bold; width:25%;">Days/Week & Hours/Session</td>
                    <td style="font-weight: bold; width:25%;">Starting Year-Ending Year</td>
                </tr>
                <?php foreach ($application_admission['student_background_nonformal_edu_data'] as $nonformal_edu) { ?>
                    <tr>
                        <td style="width: 25%;"><?= $nonformal_edu['lesson_activities'] ?></td>
                        <td style="width: 25%;"><?= $nonformal_edu['location'] ?></td>
                        <td style="width: 25%;"><?= $nonformal_edu['days_week'] . ' & ' .  $nonformal_edu['hours_session'] ?></td>
                        <td style="width: 25%;"><?= $nonformal_edu['start_year'] . ' - ' . $nonformal_edu['end_year'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <table style="width: 100%;background-color:#69CEED;">
            <tbody>
                <tr>
                    <td style="width: 100%; text-align:center; font-weight:bold; color:white;">SECTION 6 <br /> Person(s) Live with the Child</td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="font-weight: bold;width:20%;">Names as in Birth Certificate / Passport</td>
                    <td style="font-weight: bold;width:20%;">Relationship with the Child</td>
                    <td style="font-weight: bold;width:20%;">Address</td>
                    <td style="font-weight: bold;width:20%;">Phone Number</td>
                    <td style="font-weight: bold;width:20%;">Email</td>
                </tr>
                <?php foreach ($application_admission['student_relationship_data'] as $relationship_data) { ?>
                    <tr>
                        <td style="width: 20%;"><?= $relationship_data['name'] ?></td>
                        <td style="width: 20%;"><?= $relationship_data['relationship'] ?></td>
                        <td style="width: 20%;"><?= $relationship_data['address'] ?></td>
                        <td style="width: 20%;"><?= $relationship_data['phone_number'] ?></td>
                        <td style="width: 20%;"><?= $relationship_data['email'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>