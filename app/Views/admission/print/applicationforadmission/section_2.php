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
                    <td style="width: 100%; text-align:center; font-weight:bold; color:white;">SECTION 2 <br /> Parents Particulars</td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="font-weight: bold; width:25%">Father's name</td>
                    <td style="width:25%"><?= $application_admission['father_particular']['name'] ?></td>
                    <td style="font-weight: bold; width:25%">Mother's name</td>
                    <td style="width:25%"><?= $application_admission['mother_particular']['name'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:25%">Place & Date of Birth</td>
                    <td style="width:25%"><?= $application_admission['father_particular']['dob'] ?></td>
                    <td style="font-weight: bold; width:25%">Place & Date of Birth</td>
                    <td style="width:25%"><?= $application_admission['mother_particular']['dob'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:25%">Nationality</td>
                    <td style="width:25%"><?= $application_admission['father_particular']['nationality'] ?></td>
                    <td style="font-weight: bold; width:25%">Nationality</td>
                    <td style="width:25%"><?= $application_admission['mother_particular']['nationality'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:25%">Religion</td>
                    <td style="width:25%"><?= $application_admission['father_particular']['religion'] ?></td>
                    <td style="font-weight: bold; width:25%">Religion</td>
                    <td style="width:25%"><?= $application_admission['mother_particular']['religion'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:25%">ID type & Number</td>
                    <td style="width:25%"><?= $application_admission['father_particular']['id_type'] . ": " . $application_admission['father_particular']['id_number'] ?></td>
                    <td style="font-weight: bold; width:25%">ID type & Number</td>
                    <td style="width:25%"><?= $application_admission['mother_particular']['id_type'] . ": " . $application_admission['mother_particular']['id_number'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:25%">Last education Title & Major</td>
                    <td style="width:25%"><?= $application_admission['father_particular']['last_education'] . " in " . $application_admission['father_particular']['major'] ?></td>
                    <td style="font-weight: bold; width:25%">Last education Title & Major</td>
                    <td style="width:25%"><?= $application_admission['mother_particular']['last_education'] . " in " . $application_admission['mother_particular']['major'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:25%">University Name</td>
                    <td style="width:25%"><?= $application_admission['father_particular']['univ_name'] ?></td>
                    <td style="font-weight: bold; width:25%">University Name</td>
                    <td style="width:25%"><?= $application_admission['mother_particular']['univ_name'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:25%">Home Address</td>
                    <td style="width:25%"><?= $application_admission['father_particular']['home_address'] ?></td>
                    <td style="font-weight: bold; width:25%">Home Address</td>
                    <td style="width:25%"><?= $application_admission['mother_particular']['home_address'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:25%">City & Postal Code</td>
                    <td style="width:25%"><?= $application_admission['father_particular']['city'] . " - " . $application_admission['father_particular']['postal'] ?></td>
                    <td style="font-weight: bold; width:25%">City & Postal Code</td>
                    <td style="width:25%"><?= $application_admission['mother_particular']['city'] . " - " . $application_admission['mother_particular']['postal'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:25%">Phone Number</td>
                    <td style="width:25%"><?= $application_admission['father_particular']['phone_number'] ?></td>
                    <td style="font-weight: bold; width:25%">Phone Number</td>
                    <td style="width:25%"><?= $application_admission['mother_particular']['phone_number'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:25%">Email</td>
                    <td style="width:25%"><?= $application_admission['father_particular']['email'] ?></td>
                    <td style="font-weight: bold; width:25%">Email</td>
                    <td style="width:25%"><?= $application_admission['mother_particular']['email'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:25%">Occupation & Position</td>
                    <td style="width:25%"><?= $application_admission['father_particular']['occu'] . " - " . $application_admission['father_particular']['post'] ?></td>
                    <td style="font-weight: bold; width:25%">Occupation & Position</td>
                    <td style="width:25%"><?= $application_admission['mother_particular']['occu'] . " - " . $application_admission['mother_particular']['post'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:25%">Name of Institution</td>
                    <td style="width:25%"><?= $application_admission['father_particular']['inst_name'] ?></td>
                    <td style="font-weight: bold; width:25%">Name of Institution</td>
                    <td style="width:25%"><?= $application_admission['mother_particular']['inst_name'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:25%">Office Address</td>
                    <td style="width:25%"><?= $application_admission['father_particular']['office_address'] ?></td>
                    <td style="font-weight: bold; width:25%">Office Address</td>
                    <td style="width:25%"><?= $application_admission['mother_particular']['office_address'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:25%">Relationship With Child</td>
                    <td style="width:25%"><?= $application_admission['father_particular']['child_relation'] ?></td>
                    <td style="font-weight: bold; width:25%">Relationship With Child</td>
                    <td style="width:25%"><?= $application_admission['mother_particular']['child_relation'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:25%">Marital Status</td>
                    <td style="width:25%"><?= $application_admission['father_particular']['marital_status'] ?></td>
                    <td style="font-weight: bold; width:25%">Marital Status</td>
                    <td style="width:25%"><?= $application_admission['mother_particular']['marital_status'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:25%">The Child Lived With</td>
                    <td style="width:25%"><?= $application_admission['father_particular']['child_live'] ?></td>
                    <td style="font-weight: bold; width:25%">The Child Lived With</td>
                    <td style="width:25%"><?= $application_admission['mother_particular']['child_live'] ?></td>
                </tr>

            </tbody>
        </table>
    </div>
</body>