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
        $health_description = $health_record['student_health_description'];

        $family_information = $parents_quest['student_family_information_data'];
        $prev_eval_current_service_data = $parents_quest['student_prev_eval_current_service_data'];
        $student_development_domains_data = $parents_quest['student_development_domains_data'];
        $parents_survey_data = $parents_quest['parents_survey_data'];
        // dd($parents_quest);
    ?>
    <?php endforeach; ?>
    <div class="d-flex justify-content-center mb-1">
        <div>
            <!-- <img src="<?= base_url("/assets/images/Logo_tk.png") ?>" width="100%" alt="Logo_KidsRepublic"> -->
            <h1 class="text-center" style="text-align: center;background-color: #69CEED;color:white;">Parent's Questionnaire</h1>
            <!-- <img src="<?= base_url("/assets/images/Logo_tk.png") ?>" width="100%" alt="Logo_KidsRepublic"><br /> -->
        </div>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="font-weight: bold;width: 25%">Name of Child</td>
                    <td style="width: 25%;"><?= $application_admission['student_detail']['name'] ?></td>
                    <td style="font-weight: bold;width: 10%">Date of Birth</td>
                    <td style="width: 15%"><?= $application_admission['student_detail']['dob'] ?></td>
                    <td style="font-weight: bold;width: 15%">Gender</td>
                    <td style="width: 10%"><?= $application_admission['student_detail']['gender'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Mother's Name</td>
                    <td><?= $application_admission['mother_particular']['name'] ?></td>
                    <td style="font-weight: bold;">Father's Name</td>
                    <td colspan="3"><?= $application_admission['father_particular']['name'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Parents's Native Language</td>
                    <td colspan="5"><?= ($family_information) ? $family_information['parents_language'] : 'N/A'; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Child's Native Language</td>
                    <td colspan="5"><?= $application_admission['student_detail']['language'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Person Completing this Form</td>
                    <td colspan="5"><?= ($family_information) ?  $family_information['person_completing'] : 'N/A'; ?></td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;background-color:#69CEED">
            <tbody>
                <tr>
                    <td style="width: 100%; text-align:center; font-weight:bold; color:white;">A. Child and Family Information</td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="font-weight: bold; width: 25%">Does child have any present illness?</td>
                    <td style="width: 75%"><?= ($health_description) ? $health_description['illness'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 25%">if yes describe:</td>
                    <td style=" width: 75%"><?= ($health_description) ? $health_description['describe_illness'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td colspan=" 6" style="font-weight: bold;width: 100%">Indicate sibling or any other individuals including nannies/caregivers living with your child :</td>
                </tr>
                <tr>
                    <td style="width: 100%;">
                        <table style="width: 100%;">
                            <tbody>
                                <tr>
                                    <td style="width: 7%;">No.</td>
                                    <td style="width: 31%;">Names</td>
                                    <td style="width: 31%;">Ages</td>
                                    <td style="width: 31%;">Relationship to Child</td>
                                </tr>
                                <?php
                                $x = 1;
                                foreach ($application_admission['student_relationship_data'] as $relationship_data) : ?>
                                    <tr>
                                        <td style="width: 7%;"><?= $x ?>.</td>
                                        <td style="width: 31%;"><?= $relationship_data['name'] ?></td>
                                        <td style="width: 31%;"><?= $relationship_data['ages'] ?></td>
                                        <td style="width: 31%;"><?= $relationship_data['relationship'] ?></td>
                                    </tr>
                                <?php
                                    $x++;
                                endforeach; ?>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 100%">With whom does your child stay during the day? (Name of person and relationship to child and/or name of cate center)</td>
                </tr>
                <tr>
                    <td colspan="4"><?= ($family_information != NULL) ?  $family_information['whom_stay_during_day'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:100%">Description any unique family circumstances that have a significant impact on your child’s development</td>
                </tr>
                <tr>
                    <td colspan="4"><?= ($family_information != NULL) ?  $family_information['family_circumstances'] : "N/A"; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width:100%">What family values/principles do you implement at home?</td>
                </tr>
                <tr>
                    <td colspan="4"><?= ($family_information != NULL) ?  $family_information['family_principles'] : "N/A"; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>