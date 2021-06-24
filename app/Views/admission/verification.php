<?= $this->extend('layouts/master') ?>
<?= $this->section('content') ?>
<?php #dd($students)
?>
<div class="right_col" role="main">
  <?= $this->include('layouts/flashdata') ?>
  <div class="row px-3" style="overflow-x: auto;">
    <h3>Verification</h3>
    <table class="table table-striped table-bordered" id="datatable-buttons" style="width: 100%;">
      <thead>
        <tr>
          <th>Name</th>
          <th>Main Application For Admission</th>
          <th>Health Examination Record</th>
          <th>Parents Questionnaire</th>
          <th>Vehicle Registration</th>
          <th>School Recommendation</th>
          <th>A1</th>
          <th>A2</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php
          foreach ($students as $s) :
            $application_admission  = $s['application_admission'];
            $health_record          = $s['health_record'];
            $parents_quest          = $s['parents_quest'];
            $vehicle_regist         = $s['vehicle_regist'];
            $school_recommendation  = $s['school_recommendation'];
            $a1_form                = $s['a1_form'];
            $a2_form                = $s['a2_form'];

            $nis = $application_admission['student_detail']['nis'];
            $name = $application_admission['student_detail']['name'];

            $pregnancy_data = $health_record['student_pregnancy_history_data'];
            $health_description = $health_record['student_health_description'];
            $student_development_domains_data = $parents_quest['student_development_domains_data'];
            $parents_survey_data = $parents_quest['parents_survey_data'];

            $family_information_data = $parents_quest['student_family_information_data'];
            $prev_eval_current_service_data = $parents_quest['student_prev_eval_current_service_data'];
          ?>
            <td><a target="_blank" href="<?= base_url('admission/print/6/' . $nis); ?>"><?= $name ?></a></td>
            <td><button type="button" data-toggle="modal" data-target="#admission_<?= $nis ?>">Click Here!</button></td>
            <td><button type="button" data-toggle="modal" data-target="#health_<?= $nis ?>">Click Here!</button></td>
            <td><button type="button" data-toggle="modal" data-target="#parents_<?= $nis ?>">Click Here!</button></td>
            <td><button type="button" data-toggle="modal" data-target="#vehicle_<?= $nis ?>">Click Here!</button></td>
            <td><button type="button" data-toggle="modal" data-target="#sr_<?= $nis ?>">Click Here!</button>
            <td><button type="button" data-toggle="modal" data-target="#a1_<?= $nis ?>">Click Here!</button>
            <td><button type="button" data-toggle="modal" data-target="#a2_<?= $nis ?>">Click Here!</button>
            </td>
        </tr>
        <!-- Modal Student Application For Admission -->
        <div class="modal fade" id="admission_<?= $nis ?>" tabindex="-1" aria-labelledby="admissionLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content" style="height: 90vh;">
              <div class="modal-header">
                <h5 class="modal-title mx-auto" id="admissionLabel">Main Application for Admission</h5>
              </div>
              <div class="modal-body overflow-auto">
                <img src="<?= "http://101.255.120.81:21280/public/assets/upload/profile/" . $application_admission['profile_pict']['profile_pict'] ?>" class="img-fluid rounded mx-auto d-block mb-3" alt="..." style="height: 50%;">
                <hr>
                <form>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Full Name</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_detail']['name'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" value="<?= $application_admission['student_detail']['gender'] ?>" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Place of Birth</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_detail']['pob'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">Date of Birth</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_detail']['dob'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nationality</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_detail']['nationality'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">Religion</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_detail']['religion'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Birth Order</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_detail']['birth_o'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">No. Siblings</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_detail']['tnoc'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Name of Previous School</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_detail']['prev_school'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">Address of Previous School</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_detail']['addprev_school'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">NISN</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" value="<?= $application_admission['student_detail']['nisn'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">Spoken Language</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_detail']['language'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Home Address</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_detail']['address'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">Postal Code</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_detail']['postal_code'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">City</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_detail']['city'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">Home Distance to School</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_detail']['distance'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Phone Number</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_detail']['phone'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">Going to School By</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_detail']['vehicle'] ?>">
                    </div>
                  </div>
                  <hr>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Father's Name</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['father_particular']['name'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">Place of Birth</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['father_particular']['pob'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Date of Birth</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['father_particular']['dob'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">Nationality</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['father_particular']['nationality'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Religion</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['father_particular']['religion'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">ID Type</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['father_particular']['id_type'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ID Number</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['father_particular']['id_number'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">Last Education Title</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['father_particular']['last_education'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Major</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['father_particular']['major'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">University Name</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['father_particular']['univ_name'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Home Address</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['father_particular']['home_address'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">City</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['father_particular']['city'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Postal Code</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['father_particular']['postal'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">Phone Number</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['father_particular']['phone_number'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-4">
                      <input type="email" class="form-control" disabled value="<?= $application_admission['father_particular']['email'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">Occupation</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['father_particular']['occu'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Position</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['father_particular']['post'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">Name of Institution</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['father_particular']['inst_name'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Office Address</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['father_particular']['office_address'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">Relationship with Child</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['father_particular']['child_relation'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Marital Status</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['father_particular']['marital_status'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">The Child Lives with</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['father_particular']['child_live'] ?>">
                    </div>
                  </div>
                  <hr>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Mother's Name</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['mother_particular']['name'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">Place of Birth</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['mother_particular']['pob'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Date of Birth</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['mother_particular']['dob'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">Nationality</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['mother_particular']['nationality'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Religion</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['mother_particular']['religion'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">ID Type</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['mother_particular']['id_type'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ID Number</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['mother_particular']['id_number'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">Last Education Title</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['mother_particular']['last_education'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Major</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['mother_particular']['major'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">University Name</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['mother_particular']['univ_name'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Home Address</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['mother_particular']['home_address'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">City</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['mother_particular']['city'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Postal Code</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['mother_particular']['postal'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">Phone Number</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['mother_particular']['phone_number'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-4">
                      <input type="email" class="form-control" disabled value="<?= $application_admission['mother_particular']['email'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">Occupation</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['mother_particular']['occu'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Position</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['mother_particular']['post'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">Name of Institution</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['mother_particular']['inst_name'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Office Address</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['mother_particular']['office_address'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">Relationship with Child</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['mother_particular']['child_relation'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Marital Status</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['mother_particular']['marital_status'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">The Child Lives with</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['mother_particular']['child_live'] ?>">
                    </div>
                  </div>
                  <hr>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Arts</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_interest']['arts'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Music</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_interest']['music'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Cognitive</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_interest']['cognitive'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Sport</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_interest']['sport'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Organization/Community</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_interest']['organization_community'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Others</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_interest']['others'] ?>">
                    </div>
                  </div>
                  <hr>
                  <?php foreach ($application_admission['student_background_edu'] as $background_edu) { ?>
                    <h6 class="text-center">Preschool</h6>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Previous School Name</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" disabled value="<?= $background_edu['prev_school_name'] ?>">
                      </div>
                      <label class="col-sm-2 col-form-label">Year</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" disabled value="<?= $background_edu['year'] ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Address</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" disabled value="<?= $background_edu['address'] ?>">
                      </div>
                      <label class="col-sm-2 col-form-label">City</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" disabled value="<?= $background_edu['city'] ?>">
                      </div>
                    </div>
                    <h6 class="text-center">Primary School</h6>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Previous School Name</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" disabled>
                      </div>
                      <label class="col-sm-2 col-form-label">Year</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Address</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" disabled>
                      </div>
                      <label class="col-sm-2 col-form-label">City</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" disabled>
                      </div>
                    </div>
                    <h6 class="text-center">Others</h6>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Previous School Name</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" disabled>
                      </div>
                      <label class="col-sm-2 col-form-label">Year</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Address</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" disabled>
                      </div>
                      <label class="col-sm-2 col-form-label">City</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" disabled>
                      </div>
                    </div>
                  <?php } ?>
                  <hr>
                  <?php foreach ($application_admission['student_background_nonformal_edu_data'] as $nonformal_edu) { ?>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Type of Lesson / Activities</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" disabled value="<?= $nonformal_edu['lesson_activities'] ?>">
                      </div>
                      <label class="col-sm-2 col-form-label">Location</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" disabled value="<?= $nonformal_edu['location'] ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Days / Week</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" disabled value="<?= $nonformal_edu['days_week'] ?>">
                      </div>
                      <label class="col-sm-2 col-form-label">Hours / Session</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" disabled value="<?= $nonformal_edu['hours_session'] ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Starting Year</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" disabled value="<?= $nonformal_edu['start_year'] ?>">
                      </div>
                      <label class="col-sm-2 col-form-label">Ending Year</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" disabled value="<?= $nonformal_edu['end_year'] ?>">
                      </div>
                    </div>
                  <?php } ?>
                  <hr>
                  <?php foreach ($application_admission['student_relationship_data'] as $relationship_data) { ?>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Name as in Birth Certificate</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" disabled value="<?= $relationship_data['name'] ?>">
                      </div>
                      <label class="col-sm-2 col-form-label">Relationship with The Child</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" disabled value="<?= $relationship_data['relationship'] ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-4">
                        <input type="email" class="form-control" disabled value="<?= $relationship_data['email'] ?>">
                      </div>
                      <label class="col-sm-2 col-form-label">Phone Number</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" disabled value="<?= $relationship_data['phone_number'] ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Address</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" disabled value="<?= $relationship_data['address'] ?>">
                      </div>
                    </div>
                  <?php } ?>
                  <hr>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">School Information</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_message_data']['school_information'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Declaration</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_message_data']['declaration'] ?>">
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info" onclick="window.open('<?= base_url('admission/print/1/' . $nis); ?>');">Print</button>
                <button type="button" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal Student Health Examination Record -->
        <?php #$this->include('admission/modal/verif/health') 
        ?>
        <div class="modal fade" id="health_<?= $nis ?>" tabindex="-1" aria-labelledby="healthLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content" style="height: 90vh;">
              <div class="modal-header text-center">
                <h5 class="modal-title mx-auto">Health Examination Record</h5>
              </div>
              <div class="modal-body overflow-auto">
                <form>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Full Name</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_detail']['name'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_detail']['gender'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Place of Birth</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_detail']['pob'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">Date of Birth</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_detail']['dob'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Weight</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_detail']['weight'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">Height</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_detail']['height'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Blood Type</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_detail']['blood_type'] ?>">
                    </div>
                  </div>
                  <hr>
                  <?php
                  foreach ($health_record['student_immunization_data'] as $immunization_data) { ?>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Type of Immunization</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" disabled value="<?= ($immunization_data != NULL) ? $immunization_data['type'] : "N/A"; ?>">
                      </div>
                      <label class="col-sm-2 col-form-label">Year of Immunization</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" disabled value="<?= ($immunization_data != NULL) ? $immunization_data['year'] : "N/A"; ?>">
                      </div>
                    </div>
                  <?php } ?>
                  <hr>
                  <?php foreach ($health_record['student_health_history_data'] as $health_history_data) { ?>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Sickness/Disorder</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" disabled value="<?= ($health_history_data != NULL) ? $health_history_data['sickness_disorder'] : "N/A"; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Age</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" disabled value="<?= ($health_history_data != NULL) ? $health_history_data['age'] : "N/A"; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Prevention/Medication</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" disabled value="<?= ($health_history_data != NULL) ? $health_history_data['prevention_medication'] : "N/A"; ?>">
                      </div>
                    </div>
                  <?php } ?>
                  <hr>
                  <?php foreach ($health_record['student_allergies_data'] as $allergies_data) { ?>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Type of Allergy</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" disabled value="<?= ($allergies_data) ? $allergies_data['type'] : "N/A"; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Age</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" disabled value="<?= ($allergies_data) ? $allergies_data['age'] : "N/A"; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Prevention/Medication</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" disabled value="<?= ($allergies_data) ? $allergies_data['prevention_medication'] : "N/A"; ?>">
                      </div>
                    </div>
                  <?php } ?>
                  <hr>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Child condition during pregnancy</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" disabled value="<?= ($pregnancy_data != NULL) ? (($pregnancy_data['during_pregnancy'] === "Normal") ? $pregnancy_data['during_pregnancy'] : $pregnancy_data['during_pregnancy'] . " " . $pregnancy_data['text_during_pregnancy']) : "N/A";  ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Child condition during labour</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" disabled value="<?= ($pregnancy_data != NULL) ? (($pregnancy_data['during_labour'] === "Normal") ? $pregnancy_data['during_labour'] : $pregnancy_data['during_labour'] . " " . $pregnancy_data['text_during_labour']) : "N/A";  ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Child condition during the first year</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" disabled value="<?= ($pregnancy_data != NULL) ? (($pregnancy_data['during_first_year'] === "Normal") ? $pregnancy_data['during_first_year'] : $pregnancy_data['during_first_year'] . " " . $pregnancy_data['text_during_first_year']) : "N/A";  ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Child condition during the second - third year</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" disabled value="<?= ($pregnancy_data != NULL) ? (($pregnancy_data['during_second_third_year'] === "Normal") ? $pregnancy_data['during_second_third_year'] : $pregnancy_data['during_second_third_year'] . " " . $pregnancy_data['text_during_second_third_year']) : "N/A";  ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Mother physical health during pregnancy</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" disabled value="<?= ($pregnancy_data != NULL) ? (($pregnancy_data['mother_physical'] === "Normal") ? $pregnancy_data['mother_physical'] : $pregnancy_data['mother_physical'] . " " . $pregnancy_data['text_mother_physical']) : "N/A";  ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Mother mental health during pregnancy</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" disabled value="<?= ($pregnancy_data != NULL) ? (($pregnancy_data['mother_mental'] === "Normal") ? $pregnancy_data['mother_mental'] : $pregnancy_data['mother_mental'] . " " . $pregnancy_data['text_mother_mental']) : "N/A";  ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Birth Process</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" disabled value="<?= ($pregnancy_data != NULL) ? (($pregnancy_data['birth_proses'] === "No") ? ($pregnancy_data['birth_proses'] . " " . $pregnancy_data['text_birth_proses']) : $pregnancy_data['birth_proses']) : "N/A"; ?>">
                      <!-- INI BELUM DITAMBAHIN -->
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Time of birth</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" disabled value="<?= ($pregnancy_data != NULL) ? $pregnancy_data['time_of_birth'] : "N/A"; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Baby nutritional intake</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" disabled value="<?= ($pregnancy_data != NULL) ? $pregnancy_data['baby_nutritional'] : "N/A"; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Birth height</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" disabled value="<?= ($pregnancy_data != NULL) ? $pregnancy_data['birth_height'] : "N/A"; ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">Birth weight</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" disabled value="<?= ($pregnancy_data != NULL) ? $pregnancy_data['birth_weight'] : "N/A"; ?>">
                    </div>
                  </div>
                  <hr>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Does child have any present ilness?</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" disabled value="<?= ($health_description) ? $health_description['illness'] : "N/A"; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">If yes describe :</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" disabled><?= ($health_description) ? $health_description['describe_illness'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Allergies (include drug allergies):</label>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Ever had a serious respiratory reaction to a food, bee sting or a drug?</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" disabled><?= ($health_description) ? $health_description['respiratory_reaction'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Medication child is taking</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" disabled><?= ($health_description) ? $health_description['medication'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Hospitalization, Serious injuries: Why? When?</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" disabled><?= ($health_description) ? $health_description['serious_injuries'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Wear Glasses?</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" disabled value="<?= ($health_description) ? $health_description['wear_glasses'] : "N/A"; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Eye or Vision Problems, describe:</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" disabled><?= ($health_description) ? $health_description['vision_problem'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Hearing problem, multiple ear infection, describe:</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" disabled><?= ($health_description) ? $health_description['hearing_problem'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info" onclick="window.open('<?= base_url('admission/print/2/' . $nis);  ?>');">Print</button>
                <button type="button" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal Student Parents Quest -->
        <div class="modal fade" id="parents_<?= $nis ?>" tabindex="-1" aria-labelledby="parentsLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content" style="height: 90vh;">
              <div class="modal-header">
                <h5 class="modal-title mx-auto" id="parentsLabel">Parents Questionnaire</h5>
              </div>
              <div class="modal-body overflow-auto">
                <form>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Name of Child</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_detail']['name'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_detail']['gender'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">Date of Birth</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_detail']['dob'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Mother’s Name</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['mother_particular']['name'] ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">Father’s Name</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['father_particular']['name'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Parent(s) Native Language</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= ($family_information_data != NULL) ? $family_information_data['parents_language'] : "N/A"; ?>">
                    </div>
                    <label class="col-sm-2 col-form-label">Child(s) Native Language</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" disabled value="<?= $application_admission['student_detail']['language'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Person Completing this Form</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" disabled value="<?= ($family_information_data != NULL) ? $family_information_data['person_completing'] : "N/A"; ?>">
                    </div>
                  </div>
                  <hr>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Does child have any present ilness?</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" disabled value="<?= ($health_description) ? $health_description['illness'] : "N/A"; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">If yes describe :</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($health_description) ? $health_description['describe_illness'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">With whom does your child stay during the day? (Name of person and relationship to child and/or name of cate center)</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($family_information_data != NULL) ?  $family_information_data['whom_stay_during_day'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Description any unique family circumstances that have a significant impact on your child’s development</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($family_information_data != NULL) ?  $family_information_data['family_circumstances'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">What family values/principles do you implement at home?</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($family_information_data != NULL) ?  $family_information_data['family_principles'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Indicate sibling or any other individuals including nannies/caregivers living with your child :</label>
                  </div>
                  <?php foreach ($application_admission['student_relationship_data'] as $relationship_data) { ?>
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Name</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" disabled value="<?= $relationship_data['name'] ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Ages</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" disabled value="<?= $relationship_data['ages'] ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Relationship to Child</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" disabled value="<?= $relationship_data['relationship'] ?>">
                      </div>
                    </div>
                  <?php } ?>
                  <hr>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">What is the most enjoyable time for you and your child?</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($family_information_data != NULL) ?  $family_information_data['assessment_enjoyable_time'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">How would you describe or label any concerns you have about your child's development, if any?</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($family_information_data != NULL) ?  $family_information_data['assessment_development_concern'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <hr>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Has your child ever had any other development evaluations?</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" disabled value="<?= ($prev_eval_current_service_data != NULL) ? $prev_eval_current_service_data['evaluations'] : "N/A"; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">If yes, when and where was the evaluation conducted? Please specify</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($prev_eval_current_service_data != NULL) ? $prev_eval_current_service_data['text_evaluations'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">What were the results?</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($prev_eval_current_service_data != NULL) ? $prev_eval_current_service_data['results_evaluations'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Has your child ever been referred for any development service (Psychologist, Speech/Language)?</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" disabled value="<?= ($prev_eval_current_service_data != NULL) ? $prev_eval_current_service_data['service'] : "N/A"; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">What were the results?</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($prev_eval_current_service_data != NULL) ? $prev_eval_current_service_data['results_service'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Who provided the services? Please specify</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($prev_eval_current_service_data != NULL) ? $prev_eval_current_service_data['provided_service'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <hr>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Does your child eat and drink independently?</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" disabled value="<?= ($student_development_domains_data != NULL) ? $student_development_domains_data['eat_drink'] : "N/A"; ?>">
                    </div>
                    <label class="col-sm-4 col-form-label">Does your child dress himself/herself independently?</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" disabled value="<?= ($student_development_domains_data != NULL) ? $student_development_domains_data['dress'] : "N/A"; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Can your child use the toilet independently?</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" disabled value="<?= ($student_development_domains_data != NULL) ? $student_development_domains_data['use_toilet'] : "N/A"; ?>">
                    </div>
                    <label class="col-sm-4 col-form-label">Does your child respond appropriately to adult requests?</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" disabled value="<?= ($student_development_domains_data != NULL) ? $student_development_domains_data['respond_approiately'] : "N/A"; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Does your child seek out playing with other children?</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" disabled value="<?= ($student_development_domains_data != NULL) ? $student_development_domains_data['seek_out_playing'] : "N/A"; ?>">
                    </div>
                    <label class="col-sm-4 col-form-label">Does your child play cooperatively with other children?</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" disabled value="<?= ($student_development_domains_data != NULL) ? $student_development_domains_data['play_cooperatively'] : "N/A"; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Does your child speak in complete sentences?</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" disabled value="<?= ($student_development_domains_data != NULL) ? $student_development_domains_data['speak'] : "N/A"; ?>">
                    </div>
                    <label class="col-sm-4 col-form-label">Do people who are unfamiliar with your child have difficulty understanding him/her?</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" disabled value="<?= ($student_development_domains_data != NULL) ? $student_development_domains_data['people_unfamiliar'] : "N/A"; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Does your child verbally express his/her wants and needs?</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" disabled value="<?= ($student_development_domains_data != NULL) ? $student_development_domains_data['verbally'] : "N/A"; ?>">
                    </div>
                    <label class="col-sm-4 col-form-label">Can your child write words or simple sentences?</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" disabled value="<?= ($student_development_domains_data != NULL) ? $student_development_domains_data['write_words'] : "N/A"; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Can your child read?</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" disabled value="<?= ($student_development_domains_data != NULL) ? $student_development_domains_data['can_read'] : "N/A"; ?>">
                    </div>
                  </div>
                  <hr>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Why do you choose Kids Republic for your child’s education?</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['why_choose'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">What kind of education method you think Kids Republic offers?</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['method_think'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">What is your hope for your child’s education at Kids Republic School?</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['hope'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Elaborate your opinion on education responsibilities for a child?</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['responsibilities_opinion'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">What does your child want to become when he/she grow up?</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['want_to_become'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">What do you wish for your child to become when he/she grow up?</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['wish'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">What is an ideal curriculum method in your opinion?</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['ideal_curriculum'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">What is your opinion on the National Exam (UN) / National Curriculum?</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['un_opinion'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">What is your opinion on International exams / curriculums, such as IB or Cambridge? Which do you prefer?</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['international_exam_opinion'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Which do you prefer using both National and International curriculum, or just one? Please specify</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['curriculum_prefer'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Your hope and expectations for your child in terms of the objectives :</label>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Spiritual development target</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['spiritual_hope'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Academics Development target</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['academics_hope'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Global view development target</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['global_view_hope'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nationality development target</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['nationality_hope'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Social emotional development target</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['social_emotional_hope'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">What effort will you make to achieve the targets :</label>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Spiritual development target</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['spirit_effort'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Academics Development target</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['academics_effort'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Global view development target</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['global_view_effort'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nationality development target</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['nationality_effort'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Social emotional development target</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['social_emotional_effort'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Write 5 words to describe your child</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['child_describe'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">If you find your children in these situations, how do you choose to respond?</label>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Demotivation</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['demotivation_respond'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Bullying</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['bullying_respond'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Cheating</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['cheating_respond'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Failure to complete homework / assignment</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['failure_respond'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Lateness to School</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['lateness_respond'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Who interacts most often with your child at home?</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['most_interacts'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">How is your communication with your child at home? Please give examples</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['communication'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">How is the idea's school - parent's relationship in helping the child to excel?</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['ideas'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">As parents may be aware, Kids Republic School is a private school which the school fees are obligated to parent. If you deal with financing problem in the future what will you do to finance your child's education?</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['finance'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">What is your opinion on student's independence?</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['student_independence'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">What will you do to train your child's independence at home?</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['independence_train'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">According to your opinion, are the student's belongings be the school or student's reponsibilities? Please explain your answer.</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['parents_opinion'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Why do you think that you are eligible to be accepted at Kids Republic School?</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['eligible'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">What contribution will you make to the school, once you are accepted?</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['contribution'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Personal notes to the school</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['school_notes'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Personal notes to homeroom teachers</label>
                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" disabled><?= ($parents_survey_data != NULL) ? $parents_survey_data['teacher_notes'] : "N/A"; ?></textarea>
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info" onclick="window.open('<?= base_url('admission/print/3/' . $nis); ?>');">Print</button>
                <button type="button" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal Student Vehicle Register -->
        <div class="modal fade" id="vehicle_<?= $nis ?>" tabindex="-1" aria-labelledby="vehicleLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content" style="height: 90vh;">
              <div class="modal-header">
                <h5 class="modal-title mx-auto" id="vehicleLabel">Vehicle Registration</h5>
              </div>
              <div class="modal-body overflow-auto">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Child's Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" disabled value="<?= $application_admission['student_detail']['name'] ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Father's Name</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" disabled value="<?= $application_admission['father_particular']['name'] ?>">
                  </div>
                  <label class="col-sm-2 col-form-label">Phone Number</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" disabled value="<?= $application_admission['father_particular']['phone_number'] ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Mother's Name</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" disabled value="<?= $application_admission['mother_particular']['name'] ?>">
                  </div>
                  <label class="col-sm-2 col-form-label">Phone Number</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" disabled value="<?= $application_admission['mother_particular']['phone_number'] ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" disabled value="<?= $application_admission['student_detail']['address'] ?>">
                  </div>
                </div>
                <?php foreach ($vehicle_regist['student_vehicle_data'] as $vehicle_data) { ?>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">No Plat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" disabled value="<?= $vehicle_data['no_plat'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Pick Up Person Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" disabled value="<?= $vehicle_data['pickup_person'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Pick Up Person Number</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" disabled value="<?= $vehicle_data['pickup_person_phone'] ?>">
                    </div>
                  </div>
                <?php } ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info" onclick="window.open('<?= base_url('admission/print/4/' . $nis); ?>');">Print</button>
                <button type="button" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal Student School Recommendation -->
        <div class="modal fade bd-example-modal-lg" id="sr_<?= $nis ?>" tabindex="-1" aria-labelledby="srLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
              <div class="modal-header border-0 text-center">
                <h5 class="modal-title" id="srLabel">School Recommendation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="text">
                  <?php if ($school_recommendation != NULL) :
                    $sr = $school_recommendation['prevschool']; ?>
                    <iframe type="application/pdf" src="<?= "http://101.255.120.81:21280/public/assets/upload/doc/" . $sr ?>" width="750" height="400"></iframe>
                  <?php endif; ?>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-info" onclick="window.open('<?= base_url('admission/print/5/' . $sr); ?>');">Print</button> -->
                <button type="button" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal Student A1 Form -->
        <div class="modal fade bd-example-modal-lg" id="a1_<?= $nis ?>" tabindex="-1" aria-labelledby="srLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
              <div class="modal-header border-0 text-center">
                <h5 class="modal-title" id="srLabel">A1 Welcome Package Educ Program</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php if ($a1_form != NULL) : ?>
                <form action="<?= base_url("admission/inputA1/$nis") ?>" method="POST">
                  <?= csrf_field() ?>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label" style="font-weight: bold;">Goodie Bag</label>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Uniform Daily 2pcs</label>
                          <div class="col-sm-4">
                            <input class="form-control" name="uniform_daily" id="uniform_daily" type="checkbox" <?= ($a1_form) ? (($a1_form['uniform_daily'] == 1) ? "checked" : "") : ""; ?>>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Uniform Sport 1pc</label>
                          <div class="col-sm-4">
                            <input class="form-control" name="uniform_sport" id="uniform_sport" type="checkbox" <?= ($a1_form) ? (($a1_form['uniform_sport'] == 1) ? "checked" : "") : ""; ?>>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Uniform Batik 1pc</label>
                          <div class="col-sm-4">
                            <input class="form-control" name="uniform_batik" id="uniform_batik" type="checkbox" <?= ($a1_form) ? (($a1_form['uniform_batik'] == 1) ? "checked" : "") : ""; ?>>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">ID Card</label>
                          <div class="col-sm-4">
                            <input class="form-control" name="id_card" id="id_card" type="checkbox" <?= ($a1_form) ? (($a1_form['id_card'] == 1) ? "checked" : "") : ""; ?>>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Daily Report Book</label>
                          <div class="col-sm-4">
                            <input class="form-control" name="daily_report" id="daily_report" type="checkbox" <?= ($a1_form) ? (($a1_form['daily_report'] == 1) ? "checked" : "") : ""; ?>>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Weekly Lesson Plan Book</label>
                          <div class="col-sm-4">
                            <input class="form-control" name="weekly_lesson" id="weekly_lesson" type="checkbox" <?= ($a1_form) ? (($a1_form['weekly_lesson'] == 1) ? "checked" : "") : ""; ?>>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Report Card Cover Book</label>
                          <div class="col-sm-4">
                            <input class="form-control" name="report_card" id="report_card" type="checkbox" <?= ($a1_form) ? (($a1_form['report_card'] == 1) ? "checked" : "") : ""; ?>>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Montessori Report 1</label>
                          <div class="col-sm-4">
                            <input class="form-control" name="montessori_report" id="montessori_report" type="checkbox" <?= ($a1_form) ? (($a1_form['montessori_report'] == 1) ? "checked" : "") : ""; ?>>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Progress Report 1</label>
                          <div class="col-sm-4">
                            <input class="form-control" name="progress_report" id="progress_report" type="checkbox" <?= ($a1_form) ? (($a1_form['progress_report'] == 1) ? "checked" : "") : ""; ?>>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label" style="font-weight: bold;">Map</label>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Handbook</label>
                          <div class="col-sm-4">
                            <input class="form-control" name="handbook" id="handbook" type="checkbox" <?= ($a1_form) ? (($a1_form['handbook'] == 1) ? "checked" : "") : ""; ?>>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Time Table Educ</label>
                          <div class="col-sm-4">
                            <input class="form-control" name="time_table_educ" id="time_table_educ" type="checkbox" <?= ($a1_form) ? (($a1_form['time_table_educ'] == 1) ? "checked" : "") : ""; ?>>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Time Table GYM</label>
                          <div class="col-sm-4">
                            <input class="form-control" name="time_table_gym" id="time_table_gym" type="checkbox" <?= ($a1_form) ? (($a1_form['time_table_gym'] == 1) ? "checked" : "") : ""; ?>>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Uniform Schedule</label>
                          <div class="col-sm-4">
                            <input class="form-control" name="uniform_schedule" id="uniform_schedule" type="checkbox" <?= ($a1_form) ? (($a1_form['uniform_schedule'] == 1) ? "checked" : "") : ""; ?>>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Academic Calendar & Events</label>
                          <div class="col-sm-4">
                            <input class="form-control" name="academic_calendar" id="academic_calendar" type="checkbox" <?= ($a1_form) ? (($a1_form['academic_calendar'] == 1) ? "checked" : "") : ""; ?>>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Excul Form</label>
                          <div class="col-sm-4">
                            <input class="form-control" name="excul_form" id="excul_form" type="checkbox" <?= ($a1_form) ? (($a1_form['excul_form'] == 1) ? "checked" : "") : ""; ?>>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Birthday Form</label>
                          <div class="col-sm-4">
                            <input class="form-control" name="birthday_form" id="birthday_form" type="checkbox" <?= ($a1_form) ? (($a1_form['birthday_form'] == 1) ? "checked" : "") : ""; ?>>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Flyer KR & MNJ</label>
                          <div class="col-sm-4">
                            <input class="form-control" name="flyer_kr_mnj" id="flyer_kr_mnj" type="checkbox" <?= ($a1_form) ? (($a1_form['flyer_kr_mnj'] == 1) ? "checked" : "") : ""; ?>>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Kwitansi (ADM, ADF, SPP1)</label>
                          <div class="col-sm-4">
                            <input class="form-control" name="kwitansi" id="kwitansi" type="checkbox" <?= ($a1_form) ? (($a1_form['kwitansi'] == 1) ? "checked" : "") : ""; ?>>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Vehicle Sticker</label>
                          <div class="col-sm-4">
                            <input class="form-control" name="vehicle_sticker" id="vehicle_sticker" type="checkbox" <?= ($a1_form) ? (($a1_form['vehicle_sticker'] == 1) ? "checked" : "") : ""; ?>>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Enrollment Letter</label>
                          <div class="col-sm-4">
                            <input class="form-control" name="enrollment_letter" id="enrollment_letter" type="checkbox" <?= ($a1_form) ? (($a1_form['enrollment_letter'] == 1) ? "checked" : "") : ""; ?>>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <!-- <div class="row">
                      <div class="col">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Status A1 Selesai?</label>
                          <div class="col-sm-4">
                            <input class="form-control" name="status" id="status" type="checkbox">
                          </div>
                        </div>
                      </div>
                      <div class="col"></div>
                    </div> -->
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-info" onclick="window.open('<?= base_url('admission/print/5/' . $sr); ?>');">Print</button> -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              <?php else : ?>
                <div class="modal-body">Students unpaid</div>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <!-- Modal Student A2 Form -->
        <div class="modal fade bd-example-modal-lg" id="a2_<?= $nis ?>" tabindex="-1" aria-labelledby="srLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header border-0 text-center">
                <h5 class="modal-title" id="srLabel">A2 Educ Student Folder Checklist</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="<?= base_url("admission/inputA2/$nis") ?>" method="POST">
                <?= csrf_field() ?>
                <div class="modal-body">
                  <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Fotocopy KK</label>
                    <div class="col-sm-4">
                      <input class="form-control" name="fotocopy_kk" id="fotocopy_kk" type="checkbox" <?= ($a2_form) ? (($a2_form['fotocopy_kk'] == 1) ? "checked" : "") : ""; ?>>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Fotocopy KTP Ayah</label>
                    <div class="col-sm-4">
                      <input class="form-control" name="fotocopy_ktp_ayah" id="fotocopy_ktp_ayah" type="checkbox" <?= ($a2_form) ? (($a2_form['fotocopy_ktp_ayah'] == 1) ? "checked" : "") : ""; ?>>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Fotocopy KTP Ibu</label>
                    <div class="col-sm-4">
                      <input class="form-control" name="fotocopy_ktp_ibu" id="fotocopy_ktp_ibu" type="checkbox" <?= ($a2_form) ? (($a2_form['fotocopy_ktp_ibu'] == 1) ? "checked" : "") : ""; ?>>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Fotocopy KTP Nanny</label>
                    <div class="col-sm-4">
                      <input class="form-control" name="fotocopy_ktp_nanny" id="fotocopy_ktp_nanny" type="checkbox" <?= ($a2_form) ? (($a2_form['fotocopy_ktp_nanny'] == 1) ? "checked" : "") : ""; ?>>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Fotocopy Akta</label>
                    <div class="col-sm-4">
                      <input class="form-control" name="fotocopy_akta" id="fotocopy_akta" type="checkbox" <?= ($a2_form) ? (($a2_form['fotocopy_akta'] == 1) ? "checked" : "") : ""; ?>>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Fotocopy Imunisasi</label>
                    <div class="col-sm-4">
                      <input class="form-control" name="fotocopy_imunisasi" id="fotocopy_imunisasi" type="checkbox" <?= ($a2_form) ? (($a2_form['fotocopy_imunisasi'] == 1) ? "checked" : "") : ""; ?>>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Foto Anak 4x6 = 2 Lembar</label>
                    <div class="col-sm-4">
                      <input class="form-control" name="foto_anak_4x6" id="foto_anak_4x6" type="checkbox" <?= ($a2_form) ? (($a2_form['foto_anak_4x6'] == 1) ? "checked" : "") : ""; ?>>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Foto Anak 3x4 = 10 Lembar</label>
                    <div class="col-sm-4">
                      <input class="form-control" name="foto_anak_3x4" id="foto_anak_3x4" type="checkbox" <?= ($a2_form) ? (($a2_form['foto_anak_3x4'] == 1) ? "checked" : "") : ""; ?>>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Fotocopy KTP Penjemput</label>
                    <div class="col-sm-4">
                      <input class="form-control" name="fotocopy_ktp_penjemput" id="fotocopy_ktp_penjemput" type="checkbox" <?= ($a2_form) ? (($a2_form['fotocopy_ktp_penjemput'] == 1) ? "checked" : "") : ""; ?>>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Vehicle Form</label>
                    <div class="col-sm-4">
                      <input class="form-control" name="vehicle_form" id="vehicle_form" type="checkbox" <?= ($a2_form) ? (($a2_form['vehicle_form'] == 1) ? "checked" : "") : ""; ?>>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Fotocopy Enrollment</label>
                    <div class="col-sm-4">
                      <input class="form-control" name="fotocopy_enrollment" id="fotocopy_enrollment" type="checkbox" <?= ($a2_form) ? (($a2_form['fotocopy_enrollment'] == 1) ? "checked" : "") : ""; ?>>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Fotocopy Handbook</label>
                    <div class="col-sm-4">
                      <input class="form-control" name="fotocopy_handbook" id="fotocopy_handbook" type="checkbox" <?= ($a2_form) ? (($a2_form['fotocopy_handbook'] == 1) ? "checked" : "") : ""; ?>>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Trial Form</label>
                    <div class="col-sm-4">
                      <input class="form-control" name="trial_form" id="trial_form" type="checkbox" <?= ($a2_form) ? (($a2_form['trial_form'] == 1) ? "checked" : "") : ""; ?>>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Observation Form</label>
                    <div class="col-sm-4">
                      <input class="form-control" name="observation_form" id="observation_form" type="checkbox" <?= ($a2_form) ? (($a2_form['observation_form'] == 1) ? "checked" : "") : ""; ?>>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Parents Questionaire</label>
                    <div class="col-sm-4">
                      <input class="form-control" name="parents_questionaire" id="parents_questionaire" type="checkbox" <?= ($a2_form) ? (($a2_form['parents_questionaire'] == 1) ? "checked" : "") : ""; ?>>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Previous Report</label>
                    <div class="col-sm-4">
                      <input class="form-control" name="previous_report" id="previous_report" type="checkbox" <?= ($a2_form) ? (($a2_form['previous_report'] == 1) ? "checked" : "") : ""; ?>>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Application for Admission</label>
                    <div class="col-sm-4">
                      <input class="form-control" name="application_admission" id="application_admission" type="checkbox" <?= ($a2_form) ? (($a2_form['application_admission'] == 1) ? "checked" : "") : ""; ?>>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Physical Examination Record</label>
                    <div class="col-sm-4">
                      <input class="form-control" name="physical_record" id="physical_record" type="checkbox" <?= ($a2_form) ? (($a2_form['physical_record'] == 1) ? "checked" : "") : ""; ?>>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Re-enrollment Form</label>
                    <div class="col-sm-4">
                      <input class="form-control" name="reenrolment_form" id="reenrolment_form" type="checkbox" <?= ($a2_form) ? (($a2_form['reenrolment_form'] == 1) ? "checked" : "") : ""; ?>>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Extracurricular Form</label>
                    <div class="col-sm-4">
                      <input class="form-control" name="extracurricular_form" id="extracurricular_form" type="checkbox" <?= ($a2_form) ? (($a2_form['extracurricular_form'] == 1) ? "checked" : "") : ""; ?>>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Status A2 Selesai?</label>
                    <div class="col-sm-4">
                      <input class="form-control" name="status" id="status" type="checkbox" <?= ($a2_form) ? (($a2_form['status'] == 1) ? "checked" : "") : ""; ?>>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <!-- <button type="button" class="btn btn-info" onclick="window.open('<?= base_url('admission/print/5/' . $sr); ?>');">Print</button> -->
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
<?= $this->endSection() ?>