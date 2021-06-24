<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap 4 CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Examination Record</title>
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
        // $nis = $application_admission['student_detail']['nis'];
        $nis = $id;
        $name = $application_admission['student_detail']['name'];
    ?>
        <div class="d-flex justify-content-center mb-1">
            <div class="col-8">
                <h1 class="text-center">Health Examination Record</h1> <br />
                <h3 id="current_time"></h3>
            </div>
        </div>
        <div class="d-flex justify-content-center my-5">
            <table style="width: 98%;">
                <thead>
                    <th colspan="6">
                        <h2 class="text-center">Section 1 <br /> Child Particular's</h2>
                    </th>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-weight: bold;">Full Name</td>
                        <td colspan="5"><?= $application_admission['student_detail']['name'] ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Gender</td>
                        <td colspan="5"><?= $application_admission['student_detail']['gender'] ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Place of Birth</td>
                        <td colspan="2"><?= $application_admission['student_detail']['pob'] ?></td>
                        <td style="font-weight: bold;">Date of birth</td>
                        <td colspan="2"><?= $application_admission['student_detail']['dob'] ?></td>
                    </tr>
                    <tr>
                        <td style="width: 25%; font-weight: bold;">Weight (KiloGrams)</td>
                        <td style="width: 12.5%;"><?= $application_admission['student_detail']['weight'] ?></td>
                        <td style="width: 12.5%; font-weight: bold;">Height</td>
                        <td style="width: 12.5%;"><?= $application_admission['student_detail']['height'] ?></td>
                        <td style="width: 12.5%; font-weight: bold;">Blood Type</td>
                        <td style="width: 12.5%;"><?= $application_admission['student_detail']['blood_type'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center my-5">
            <table style="width: 98%;">
                <thead>
                    <th colspan="4">
                        <h2 class="text-center">Section 2 <br /> Immunization Record</h2>
                    </th>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-weight: bold; width: 10%;">No.</td>
                        <td style="font-weight: bold; width: 45%;">Type Of Immunization</td>
                        <td style="font-weight: bold; width: 45%;">Year Of Immunization</td>
                    </tr>
                    <?php foreach ($health_record['student_immunization_data'] as $immunization_data) { ?>
                        <tr>
                            <td style="width: 10%;">1</td>
                            <td style="width: 45%;"><?= $immunization_data['type'] ?></td>
                            <td style="width: 45%;"><?= $immunization_data['year'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center my-5">
            <table style="width: 98%;">
                <thead>
                    <th colspan="4">
                        <h2 class="text-center">Section 3 <br /> Health History/Physical or Mental Disorder</h2>
                    </th>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-weight: bold; width: 10%;">No.</td>
                        <td style="font-weight: bold; width: 40%;">Sickness/Disorder</td>
                        <td style="font-weight: bold; width: 10%;">Age</td>
                        <td style="font-weight: bold; width: 40%;">Prevention/Medication</td>
                    </tr>
                    <?php foreach ($health_record['student_health_history_data'] as $health_history_data) { ?>
                        <tr>
                            <td style="width: 10%;">1</td>
                            <td style="width: 40%;"><?= $health_history_data['sickness_disorder'] ?></td>
                            <td style="width: 10%;"><?= $health_history_data['age'] ?></td>
                            <td style="width: 40%;"><?= $health_history_data['prevention_medication'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center my-5">
            <table style="width: 98%;">
                <thead>
                    <th colspan="4">
                        <h2 class="text-center">Section 4 <br /> Allergies</h2>
                    </th>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-weight: bold; width: 10%;">No.</td>
                        <td style="font-weight: bold; width: 40%;">Type of Allergy</td>
                        <td style="font-weight: bold; width: 10%;">Age</td>
                        <td style="font-weight: bold; width: 40%;">Prevention/Medication</td>
                    </tr>
                    <?php foreach ($health_record['student_allergies_data'] as $allergies_data) { ?>
                        <tr>
                            <td style="width: 10%;">1</td>
                            <td style="width: 40%;"><?= $allergies_data['type'] ?></td>
                            <td style="width: 10%;"><?= $allergies_data['age'] ?></td>
                            <td style="width: 40%;"><?= $allergies_data['prevention_medication'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center my-5">
            <table style="width: 98%;">
                <thead>
                    <th colspan="5">
                        <h2 class="text-center">Section 5 <br /> Pregnancy History Record</h2>
                    </th>
                </thead>
                <tbody>
                    <tr>
                        <td style="width: 10%;">1</td>
                        <td colspan="2" style="width: 45%; font-weight: bold;">Child Condition during pregnancy</td>
                        <td colspan="2" style="width: 45%;"><?= ($health_record['student_pregnancy_history_data']['during_pregnancy'] === "Normal") ? $health_record['student_pregnancy_history_data']['during_pregnancy'] : $health_record['student_pregnancy_history_data']['during_pregnancy'] . " " . $health_record['student_pregnancy_history_data']['text_during_pregnancy']; ?></td>
                    </tr>
                    <tr>
                        <td style="width: 10%;">2</td>
                        <td colspan="2" style="width: 45%; font-weight: bold;">Child condition during labour</td>
                        <td colspan="2" style="width: 45%;"><?= ($health_record['student_pregnancy_history_data']['during_labour'] === "Normal") ? $health_record['student_pregnancy_history_data']['during_labour'] : $health_record['student_pregnancy_history_data']['during_labour'] . " " . $health_record['student_pregnancy_history_data']['text_during_labour']; ?></td>
                    </tr>
                    <tr>
                        <td style="width: 10%;">3</td>
                        <td colspan="2" style="width: 45%; font-weight: bold;">Child condition during the first year</td>
                        <td colspan="2" style="width: 45%;"><?= ($health_record['student_pregnancy_history_data']['during_first_year'] === "Normal") ? $health_record['student_pregnancy_history_data']['during_first_year'] : $health_record['student_pregnancy_history_data']['during_first_year'] . " " . $health_record['student_pregnancy_history_data']['text_during_first_year']; ?></td>
                    </tr>
                    <tr>
                        <td style="width: 10%;">4</td>
                        <td colspan="2" style="width: 45%; font-weight: bold;">Child condition during the second - third year</td>
                        <td colspan="2" style="width: 45%;"><?= ($health_record['student_pregnancy_history_data']['during_second_third_year'] === "Normal") ? $health_record['student_pregnancy_history_data']['during_second_third_year'] : $health_record['student_pregnancy_history_data']['during_second_third_year'] . " " . $health_record['student_pregnancy_history_data']['text_during_second_third_year']; ?></td>
                    </tr>
                    <tr>
                        <td style="width: 10%;">5</td>
                        <td colspan="2" style="width: 45%; font-weight: bold;">Mother physical health during pregnancy</td>
                        <td colspan="2" style="width: 45%;"><?= ($health_record['student_pregnancy_history_data']['mother_physical'] === "Normal") ? $health_record['student_pregnancy_history_data']['mother_physical'] : $health_record['student_pregnancy_history_data']['mother_physical'] . " " . $health_record['student_pregnancy_history_data']['text_mother_physical']; ?></td>
                    </tr>
                    <tr>
                        <td style="width: 10%;">6</td>
                        <td colspan="2" style="width: 45%; font-weight: bold;">Mother mental health during pregnancy</td>
                        <td colspan="2" style="width: 45%;"><?= ($health_record['student_pregnancy_history_data']['mother_mental'] === "Normal") ? $health_record['student_pregnancy_history_data']['mother_mental'] : $health_record['student_pregnancy_history_data']['mother_mental'] . " " . $health_record['student_pregnancy_history_data']['text_mother_mental']; ?></td>
                    </tr>
                    <tr>
                        <td style="width: 10%;">7</td>
                        <td colspan="2" style="width: 45%; font-weight: bold;">Birth Proses</td>
                        <td colspan="2" style="width: 45%;"><?= $health_record['student_pregnancy_history_data']['birth_proses'] ?></td>
                    </tr>
                    <tr>
                        <td style="width: 10%;">8</td>
                        <td colspan="2" style="width: 45%; font-weight: bold;">Time of Birth</td>
                        <td colspan="2" style="width: 45%;"><?= $health_record['student_pregnancy_history_data']['time_of_birth'] ?></td>
                    </tr>
                    <tr>
                        <td style="width: 10%;">9</td>
                        <td colspan="2" style="width: 45%; font-weight: bold;">Time of birth</td>
                        <td colspan="2" style="width: 45%;"><?= $health_record['student_pregnancy_history_data']['baby_nutritional'] ?></td>
                    </tr>
                    <tr>
                        <td style="width: 10%;">10</td>
                        <td style="width: 22.5%; font-weight: bold;">Birth Height</td>
                        <td style="width: 22.5%;"><?= $health_record['student_pregnancy_history_data']['birth_height'] ?> cm</td>
                        <td style="width: 22.5%; font-weight: bold;">Birth Weight</td>
                        <td style="width: 22.5%;"><?= $health_record['student_pregnancy_history_data']['birth_weight'] ?> kg</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center my-5">
            <table style="width: 98%;">
                <thead>
                    <th colspan="3">
                        <h2 class="text-center">Descriptive Section</h2>
                    </th>
                </thead>
                <tbody>
                    <tr>
                        <td style="width: 5%;">1</td>
                        <td style="width: 20%; font-weight: bold;">Does child have any present ilness?</td>
                        <td style="width: 74%;"><?= $health_record['student_health_description']['illness'] . $health_record['student_health_description']['describe_illness'] ?></td>
                    </tr>
                    <tr>
                        <td style="width: 5%;">2</td>
                        <td style="width: 20%; font-weight: bold;">Allergies (include drug allergies): Ever had a serious respiratory reaction to a food, bee sting or a drug?</td>
                        <td style="width: 74%;"><?= $health_record['student_health_description']['respiratory_reaction'] ?></td>
                    </tr>
                    <tr>
                        <td style="width: 5%;">3</td>
                        <td style="width: 20%; font-weight: bold;">Medication child is taking</td>
                        <td style="width: 74%;"><?= $health_record['student_health_description']['medication'] ?></td>
                    </tr>
                    <tr>
                        <td style="width: 5%;">4</td>
                        <td style="width: 20%; font-weight: bold;">Hospitalization, Serious injuries: Why? When?</td>
                        <td style="width: 74%;"><?= $health_record['student_health_description']['serious_injuries'] ?></td>
                    </tr>
                    <tr>
                        <td style="width: 5%;">5</td>
                        <td style="width: 20%; font-weight: bold;">Wear Glasses? Eye or Vision Problems, describe</td>
                        <td style="width: 74%;"><?= $health_record['student_health_description']['wear_glasses'] ?></td>
                    </tr>
                    <tr>
                        <td style="width: 5%;">6</td>
                        <td style="width: 20%; font-weight: bold;">Hearing problem, multiple ear infection, describe:</td>
                        <td style="width: 74%;"><?= $health_record['student_health_description']['hearing_problem'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row mx-3">
            <div class="col-5" style="height: 250px; width:100%; border-bottom:2px solid black;">
            </div>
            <div class="col-1">
            </div>
            <div class="col-5" style="height: 250px; width:100%; border-bottom:2px solid black;">
            </div>
            <div class="col-1">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="row w-100">
                <div class="col-6">
                    <h3>Name and Signature of Parent (Mother)</h3>
                </div>
                <div class="col-6">
                    <h3>Date</h3>
                </div>
            </div>
        </div>
        <div class="row mx-3">
            <div class="col-5" style="height: 250px; width:100%; border-bottom:2px solid black;">
            </div>
            <div class="col-1">
            </div>
            <div class="col-5" style="height: 250px; width:100%; border-bottom:2px solid black;">
            </div>
            <div class="col-1">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="row w-100">
                <div class="col-6">
                    <h3>Name and Signature of Parent (Father)</h3>
                </div>
                <div class="col-6">
                    <h3>Date</h3>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</body>

</html>