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
        $group  = $s['group'];
        // $nis = $application_admission['student_detail']['nis'];
        $nis = $id;
        $name = $application_admission['student_detail']['name'];
        $date_application = new DateTime($application_admission['student_detail']['created_at']);
    ?>
    <?php endforeach; ?>
    <div class="d-flex justify-content-center mb-1">
        <h1 class="text-center" style="text-align: center;background-color: #69CEED;color:white;">APPLICATION FOR ADMISSION</h1> <br />
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="width:75%">
                        <div>
                            <h4 id="current_time">Date of Application : <?= $date_application->format('d/m/Y')  ?></h4>
                        </div>
                        <div>
                            <h4>Type of Application : <?= $group['description'] . ", " . ucfirst($group['name']) ?></h4>
                        </div>
                    </td>
                    <td style="width:25%">
                        <!-- <img src="<?= "http://101.255.120.81:21280/public/assets/upload/profile/" . $application_admission['profile_pict']['profile_pict'] ?>" style="max-height: 150px; width: auto;" /> -->
                        <img src="<?= "http://192.168.1.246:21280/public/assets/upload/profile/" . $application_admission['profile_pict']['profile_pict'] ?>" style="height: 472px; width: 354px;text-align: right;" />
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- <table style="width: 100%;background-color:aqua"> -->
        <table style="width: 100%;background-color:#69CEED">
            <tbody>
                <tr>
                    <td style="width: 100%; text-align:center; font-weight:bold; color:white;">SECTION 1 <br /> Child Particulars</td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="font-weight: bold; width:25%;">Full Name</td>
                    <td style="width:75%"><?= $application_admission['student_detail']['name'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:25%;">Gender</td>
                    <td style="width:75%"><?= $application_admission['student_detail']['gender'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:25%;">Place of Birth</td>
                    <td style="width:25%"><?= $application_admission['student_detail']['pob'] ?></td>
                    <td style="font-weight: bold; width:25%;">Date of birth</td>
                    <td style="width:25%"><?= $application_admission['student_detail']['dob'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:25%;">Nationality</td>
                    <td style="width:25%"><?= $application_admission['student_detail']['nationality'] ?></td>
                    <td style="font-weight: bold; width:25%;">Religion</td>
                    <td style="width:25%"><?= $application_admission['student_detail']['religion'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:25%;">Birth Order</td>
                    <td style="width:25%"><?= $application_admission['student_detail']['birth_o'] ?></td>
                    <td style="font-weight: bold; width:25%;">Total Sibling(s)</td>
                    <td style="width:25%"><?= $application_admission['student_detail']['tnoc'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:25%;">Previous School</td>
                    <td style="width:25%"><?= $application_admission['student_detail']['prev_school'] ?></td>
                    <td style="font-weight: bold; width:25%;">Address Prev. School</td>
                    <td style="width:25%"><?= $application_admission['student_detail']['addprev_school'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:25%;">NISN</td>
                    <td style="width:75%"><?= $application_admission['student_detail']['nisn'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:25%;">Spoken Language</td>
                    <td style="width:75%"><?= $application_admission['student_detail']['language'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:25%;">Home Address</td>
                    <td style="width:75%"><?= $application_admission['student_detail']['address'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:25%;">City</td>
                    <td style="width:25%"><?= $application_admission['student_detail']['city'] ?></td>
                    <td style="font-weight: bold; width:25%;">Postal Code</td>
                    <td style="width:25%"><?= $application_admission['student_detail']['postal_code'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:25%;">Phone Number</td>
                    <td style="width:75%"><?= $application_admission['student_detail']['phone'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:25%;">Home Distance to School</td>
                    <td style="width:75%"><?= $application_admission['student_detail']['distance'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:25%;">Going to School by</td>
                    <td style="width:75%"><?= $application_admission['student_detail']['vehicle'] ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>