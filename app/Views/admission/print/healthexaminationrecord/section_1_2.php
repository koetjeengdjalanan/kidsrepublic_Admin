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
        <div>
            <!-- <img src="<?= base_url("/assets/images/Logo_tk.png") ?>" width="100%" alt="Logo_KidsRepublic"> -->
            <h1 class="text-center" style="text-align: center;background-color: #69CEED;color:white;">Health Examination Record</h1>
            <!-- <img src="<?= base_url("/assets/images/Logo_tk.png") ?>" width="100%" alt="Logo_KidsRepublic"><br /> -->
        </div>
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
                    <td style="font-weight: bold; width: 30%">Full Name</td>
                    <td style="width: 70%;"><?= $application_admission['student_detail']['name'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 30%">Gender</td>
                    <td style="width: 70%;"><?= $application_admission['student_detail']['gender'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 30%">Place of Birth</td>
                    <td style="width: 20%;"><?= $application_admission['student_detail']['pob'] ?></td>
                    <td style="font-weight: bold; width: 30%">Date of birth</td>
                    <td style="width: 20%;"><?= $application_admission['student_detail']['dob'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 30%">Weight (KiloGrams)</td>
                    <td style="width: 10%;"><?= $application_admission['student_detail']['weight'] ?> Kg</td>
                    <td style="font-weight: bold; width: 20%">Height (Centimeters)</td>
                    <td style="width: 10%;"><?= $application_admission['student_detail']['height'] ?> cm</td>
                    <td style="font-weight: bold; width: 20%">Blood Type</td>
                    <td style="width: 10%;"><?= $application_admission['student_detail']['blood_type'] ?></td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;background-color:#69CEED">
            <tbody>
                <tr>
                    <td style="width: 100%; text-align:center; font-weight:bold; color:white;">SECTION 2 <br /> Immunization Record</td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="font-weight: bold; width: 10%;">No.</td>
                    <td style="font-weight: bold; width: 45%;">Type Of Immunization</td>
                    <td style="font-weight: bold; width: 45%;">Year Of Immunization</td>
                </tr>
                <?php
                $count_immunization = 1;
                foreach ($health_record['student_immunization_data'] as $immunization_data) { ?>
                    <tr>
                        <td style="width: 10%;"><?= $count_immunization ?></td>
                        <td style="width: 45%;"><?= $immunization_data['type'] ?></td>
                        <td style="width: 45%;"><?= $immunization_data['year'] ?></td>
                    </tr>
                <?php
                    $count_immunization += 1;
                } ?>
            </tbody>
        </table>
    </div>
</body>

</html>