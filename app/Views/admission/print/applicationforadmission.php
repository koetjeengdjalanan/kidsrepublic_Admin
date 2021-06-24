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
    <script type="text/javascript">
        window.onload = function() {
            window.print();
        }
        var d = new Date();
        document.getElementById("current_time").innerHTML = d;
    </script>
    <title>Application For Admission</title>
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
            <table border="0" style="width: 98%;">
                <tbody>
                    <tr>
                        <td>
                            <div class="col-8">
                                <h1 class="text-center">Application For Admission Form</h1> <br />
                                <h3 id="current_time"></h3>
                            </div>
                        </td>
                        <td>
                            <div class="col-4">
                                <img src="<?= "http://101.255.120.81:21280/public/assets/upload/profile/" . $application_admission['profile_pict']['profile_pict'] ?>" style="max-height: 150px; width: auto;" />
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center mb-5">
            <table style="width: 98%;">
                <thead>
                    <th colspan="4">
                        <h2 class="text-center">Section 1 <br /> Child Particular's</h2>
                    </th>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-weight: bold;">Full Name</td>
                        <td colspan="3"><?= $application_admission['student_detail']['name'] ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Gender</td>
                        <td colspan="3"><?= $application_admission['student_detail']['gender'] ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Place of Birth</td>
                        <td><?= $application_admission['student_detail']['pob'] ?></td>
                        <td style="font-weight: bold;">Date of birth</td>
                        <td><?= $application_admission['student_detail']['dob'] ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Nationality</td>
                        <td><?= $application_admission['student_detail']['nationality'] ?></td>
                        <td style="font-weight: bold;">Religion</td>
                        <td><?= $application_admission['student_detail']['religion'] ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Birth Order</td>
                        <td><?= $application_admission['student_detail']['birth_o'] ?></td>
                        <td style="font-weight: bold;">Total Sibling(s)</td>
                        <td><?= $application_admission['student_detail']['tnoc'] ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Previous School</td>
                        <td><?= $application_admission['student_detail']['prev_school'] ?></td>
                        <td style="font-weight: bold;">Address Prev. School</td>
                        <td><?= $application_admission['student_detail']['addprev_school'] ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">NISN</td>
                        <td colspan="3"><?= $application_admission['student_detail']['nisn'] ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Spoken Language</td>
                        <td colspan="3"><?= $application_admission['student_detail']['language'] ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Home Address</td>
                        <td colspan="3"><?= $application_admission['student_detail']['address'] ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">City</td>
                        <td><?= $application_admission['student_detail']['city'] ?></td>
                        <td style="font-weight: bold;">Postal Code</td>
                        <td><?= $application_admission['student_detail']['postal_code'] ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Phone Number</td>
                        <td colspan="3"><?= $application_admission['student_detail']['phone'] ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Home Distance to School</td>
                        <td colspan="3"><?= $application_admission['student_detail']['distance'] ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Going to School by</td>
                        <td colspan="3"><?= $application_admission['student_detail']['vehicle'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center my-5">
            <table style="width: 98%;">
                <thead>
                    <th colspan="4">
                        <h2 class="text-center">Section 2 <br /> Parents Particular's</h2>
                    </th>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-weight: bold;">Father's name</td>
                        <td><?= $application_admission['father_particular']['name'] ?></td>
                        <td style="font-weight: bold;">Mother's name</td>
                        <td><?= $application_admission['mother_particular']['name'] ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Place & Date of Birth</td>
                        <td><?= $application_admission['father_particular']['dob'] ?></td>
                        <td style="font-weight: bold;">Place & Date of Birth</td>
                        <td><?= $application_admission['mother_particular']['dob'] ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Nationality</td>
                        <td><?= $application_admission['father_particular']['nationality'] ?></td>
                        <td style="font-weight: bold;">Nationality</td>
                        <td><?= $application_admission['mother_particular']['nationality'] ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Religion</td>
                        <td><?= $application_admission['father_particular']['religion'] ?></td>
                        <td style="font-weight: bold;">Religion</td>
                        <td><?= $application_admission['mother_particular']['religion'] ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">ID type & Number</td>
                        <td><?= $application_admission['father_particular']['id_type'] . ": " . $application_admission['father_particular']['id_number'] ?></td>
                        <td style="font-weight: bold;">ID type & Number</td>
                        <td><?= $application_admission['mother_particular']['id_type'] . ": " . $application_admission['mother_particular']['id_number'] ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Last education Title & Major</td>
                        <td><?= $application_admission['father_particular']['last_education'] . " in " . $application_admission['father_particular']['major'] ?></td>
                        <td style="font-weight: bold;">Last education Title & Major</td>
                        <td><?= $application_admission['mother_particular']['last_education'] . " in " . $application_admission['mother_particular']['major'] ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">University Name</td>
                        <td><?= $application_admission['father_particular']['univ_name'] ?></td>
                        <td style="font-weight: bold;">University Name</td>
                        <td><?= $application_admission['mother_particular']['univ_name'] ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Home Address</td>
                        <td><?= $application_admission['father_particular']['home_address'] ?></td>
                        <td style="font-weight: bold;">Home Address</td>
                        <td><?= $application_admission['mother_particular']['home_address'] ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">City & Postal Code</td>
                        <td><?= $application_admission['father_particular']['city'] . " - " . $application_admission['father_particular']['postal'] ?></td>
                        <td style="font-weight: bold;">City & Postal Code</td>
                        <td><?= $application_admission['mother_particular']['city'] . " - " . $application_admission['mother_particular']['postal'] ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Phone Number</td>
                        <td><?= $application_admission['father_particular']['phone_number'] ?></td>
                        <td style="font-weight: bold;">Phone Number</td>
                        <td><?= $application_admission['mother_particular']['phone_number'] ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Email</td>
                        <td><?= $application_admission['father_particular']['email'] ?></td>
                        <td style="font-weight: bold;">Email</td>
                        <td><?= $application_admission['mother_particular']['email'] ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Occupation & Position</td>
                        <td><?= $application_admission['father_particular']['occu'] . " - " . $application_admission['father_particular']['post'] ?></td>
                        <td style="font-weight: bold;">Occupation & Position</td>
                        <td><?= $application_admission['mother_particular']['occu'] . " - " . $application_admission['mother_particular']['post'] ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Name of Institution</td>
                        <td><?= $application_admission['father_particular']['inst_name'] ?></td>
                        <td style="font-weight: bold;">Name of Institution</td>
                        <td><?= $application_admission['mother_particular']['inst_name'] ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Office Address</td>
                        <td><?= $application_admission['father_particular']['office_address'] ?></td>
                        <td style="font-weight: bold;">Office Address</td>
                        <td><?= $application_admission['mother_particular']['office_address'] ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Relationship With Child</td>
                        <td><?= $application_admission['father_particular']['child_relation'] ?></td>
                        <td style="font-weight: bold;">Relationship With Child</td>
                        <td><?= $application_admission['mother_particular']['child_relation'] ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Marital Status</td>
                        <td><?= $application_admission['father_particular']['marital_status'] ?></td>
                        <td style="font-weight: bold;">Marital Status</td>
                        <td><?= $application_admission['mother_particular']['marital_status'] ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">The Child Lived With</td>
                        <td><?= $application_admission['father_particular']['child_live'] ?></td>
                        <td style="font-weight: bold;">The Child Lived With</td>
                        <td><?= $application_admission['mother_particular']['child_live'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center my-5">
            <table style="width: 98%;">
                <thead>
                    <th colspan="4">
                        <h2 class="text-center">Section 3 <br /> Child Talent/Interest</h2>
                    </th>
                </thead>
                <tbody>
                    <tr>
                        <td>Arts</td>
                        <td colspan="3"><?= $application_admission['student_interest']['arts'] ?></td>
                    </tr>
                    <tr>
                        <td>Music</td>
                        <td colspan="3"><?= $application_admission['student_interest']['music'] ?></td>
                    </tr>
                    <tr>
                        <td>Cognitive</td>
                        <td colspan="3"><?= $application_admission['student_interest']['cognitive'] ?></td>
                    </tr>
                    <tr>
                        <td>Sport</td>
                        <td colspan="3"><?= $application_admission['student_interest']['sport'] ?></td>
                    </tr>
                    <tr>
                        <td>Organization/Comunity</td>
                        <td colspan="3"><?= $application_admission['student_interest']['organization_community'] ?></td>
                    </tr>
                    <tr>
                        <td>Other(s)</td>
                        <td colspan="3"><?= $application_admission['student_interest']['others'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php foreach ($application_admission['student_background_edu'] as $background_edu) { ?>
            <div class="d-flex justify-content-center my-5">
                <table style="width: 98%;">
                    <thead>
                        <th colspan="4">
                            <h2 class="text-center">Section 4 <br /> Child Background Education</h2>
                        </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="font-weight: bold;">Previous School Name</td>
                            <td style="font-weight: bold;">Year</td>
                            <td style="font-weight: bold;">Address</td>
                            <td style="font-weight: bold;">City</td>
                        </tr>
                        <tr>
                            <td><?= $background_edu['prev_school_name'] ?></td>
                            <td><?= $background_edu['year'] ?></td>
                            <td><?= $background_edu['address'] ?></td>
                            <td><?= $background_edu['city'] ?></td>
                        </tr>
                        <tr>
                            <td>(Primary School)</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Others</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <!-- <tr>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        <?php } ?>
        <div class="d-flex justify-content-center my-5">
            <table style="width: 98%;">
                <thead>
                    <th colspan="4">
                        <h2 class="text-center">Section 5 <br /> Child Non-Formal Education Background/Extraculiculer Activites</h2>
                    </th>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-weight: bold;">Type of Lessons / Activities</td>
                        <td style="font-weight: bold;">Location</td>
                        <td style="font-weight: bold;">Days/Week & Hours/Session</td>
                        <td style="font-weight: bold;">Starting Year - Ending Year</td>
                    </tr>
                    <?php foreach ($application_admission['student_background_nonformal_edu_data'] as $nonformal_edu) { ?>
                        <tr>
                            <td><?= $nonformal_edu['lesson_activities'] ?></td>
                            <td><?= $nonformal_edu['location'] ?></td>
                            <td><?= $nonformal_edu['days_week'] ?></td>
                            <td><?= $nonformal_edu['hours_session'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center my-5">
            <table style="width: 98%;">
                <thead>
                    <th colspan="5">
                        <h2 class="text-center">Section 6 <br /> Person(s) Live With the Child</h2>
                    </th>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-weight: bold; width: 20%;">Names as in Birth Certificate / Passport</td>
                        <td style="font-weight: bold; width: 20%;">Relationship with the Child</td>
                        <td style="font-weight: bold; width: 20%;">Address</td>
                        <td style="font-weight: bold; width: 20%;">Phone Number</td>
                        <td style="font-weight: bold; width: 20%;">Email</td>
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
        <div class="d-flex justify-content-center my-5">
            <table style="width: 98%;">
                <thead>
                    <th>
                        <h2 class="text-center">Section 7 <br /> School Information Source(s)</h2>
                    </th>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-weight: bold;">Please let us know how you knew abour Kids Republic <br />
                            <p style="font-weight: normal;"><?= $application_admission['student_message_data']['school_information'] ?></p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center my-5">
            <table style="width: 98%;">
                <thead>
                    <th>
                        <h2 class="text-center">Section 8 <br /> Declaration</h2>
                    </th>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-weight: bold;">The details in this form are the best of my knowledge true and correct and i will keep the school informed of any changes.<br />
                            <p style="font-weight: normal;">Please copy text above here: </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <table>

        </table>
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