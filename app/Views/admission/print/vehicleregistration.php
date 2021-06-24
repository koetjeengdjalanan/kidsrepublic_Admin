<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap 4 CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Registration Form</title>
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
    <script type="text/javascript">
        window.onload = function() {
            window.print();
        }
        var d = new Date();
        document.getElementById("current_time").innerHTML = d;
    </script>
</head>

<body>
    <?php foreach ($students as $s) :
        $application_admission  = $s['application_admission'];
        $health_record          = $s['health_record'];
        $parents_quest          = $s['parents_quest'];
        $vehicle_regist         = $s['vehicle_regist'];
        $school_recommendation  = $s['school_recommendation'];
        // $nis = $application_admission['student_detail']['nis'];
        $nis = $id;
        $name = $application_admission['student_detail']['name'];
    ?>
        <div class="d-flex justify-content-center mb-1">
            <div class="col-8">
                <h1 class="text-center">Vehicle Registration Form</h1> <br />
                <h3 id="current_time"></h3>
            </div>
            <!-- <div class="col-4">
                <img src="<?= base_url("/assets/upload/profile/" . $application_admission['profile_pict']['profile_pict']) ?>" style="height-max: 150px; width: auto;" />
            </div> -->
        </div>
        <div class="d-flex justify-content-center my-5">
            <table style="width: 98%;">
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
                        <td style="width: 80%;"><?= $parents_quest['student_family_information_data']['parents_language'] ?></td>
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
        </div>
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
    <?php endforeach; ?>
</body>

</html>