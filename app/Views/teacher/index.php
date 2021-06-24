<?= $this->extend('layouts/master') ?>
<?= $this->section('content') ?>
<div class="right_col" role="main">
    <?= $this->include('layouts/flashdata') ?>
    <div class="row">
        <div class="col-7 table-responsive">
            <table class="table" id="datatable-buttons" width="100%">
                <h3>Students Table</h3>
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Gender</th>
                        <!-- <th scope="col">Grade</th> -->
                        <th scope="col">Enrolling Date</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($students as $s) :
                        $nis = $s['nis'];
                        $profile_pict = $s['profile_pict'];
                        $name = $s['name'];
                        $gender = $s['gender'];
                        $enroll = $s['created_at'];
                    ?>
                        <tr>
                            <td>
                                <div class="row align-items-center">
                                    <!-- <img src="<?php #'http://101.255.120.81:21280/public/assets/upload/profile/' . $profile_pict 
                                                    ?>" alt="..." class="img-circle mr-3" style="width:60px;" /> -->
                                    <?= $name ?>
                                </div>
                            </td>
                            <td class="align-middle"><?= $gender ?></td>
                            <!-- <td class="align-middle">
                                <div class="bg-primary text-center text-white rounded-pill">Elementary</div>
                            </td> -->
                            <td class="align-middle"><?= $enroll ?></td>
                            <td class="align-middle">
                                <button class="bg-danger text-center text-white rounded-pill" data-toggle="modal" data-target="#exampleModal_<?= $nis ?>">Waiting</button>
                            </td>
                        </tr>
                        <!-- Modal Student Register -->
                        <div class="modal fade" id="exampleModal_<?= $nis ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header border-0 text-center">
                                        <h5 class="modal-title" id="exampleModalLabel">Input Psychology Result</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?= base_url("teacher/input/$nis") ?>" method="POST" enctype="multipart/form-data">
                                        <?= csrf_field() ?>
                                        <div class="modal-body">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="name" id="name" disabled value="<?= $name ?>">
                                                </div>
                                                <label class="col-sm-2 col-form-label">NIS</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="nis" id="nis" disabled value="<?= $nis ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Result</label>
                                                <div class="col-sm-10">
                                                    <textarea type="text" name="result" id="result" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Attach File</label>
                                                <div class="col-sm-10">
                                                    <input type="file" name="psychology" style="text-align: center; display: block; " />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer border-0">
                                            <button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-ok"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- <div class="col">
            <div class="row">
                <div class="x_content">
                    <div id="calendar"></div>
                </div>
            </div>
            <div class="row">
                <table class="table">
                    <h3>Teacher's Log</h3>
                    <thead>
                        <tr>
                            <th scope="col">Process</th>
                            <th scope="col">Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Invoice Data Input</td>
                            <td>10:45 <br> 05/10/2019</td>
                        </tr>
                        <tr>
                            <td>Receipt Data Input</td>
                            <td>11:00 <br> 05/10/2019</td>
                        </tr>
                        <tr>
                            <td>Receipt Data Input</td>
                            <td>13:45 <br> 05/10/2019</td>
                        </tr>
                        <tr>
                            <td>Invoice Data Input</td>
                            <td>14:00 <br> 05/10/2019</td>
                        </tr>
                        <tr>
                            <td>Invoice Data Input</td>
                            <td>15:00 <br> 05/10/2019</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> -->
    </div>
</div>

<!-- MODAL CALENDAR -->
<!-- calendar modal -->
<div id="CalenderModalNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">New Calendar Entry</h4>
            </div>
            <div class="modal-body">
                <div id="testmodal" style="padding: 5px 20px;">
                    <form id="antoform" class="form-horizontal calender" role="form">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" style="height:55px;" id="descr" name="descr"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary antosubmit">Save changes</button>
            </div>
        </div>
    </div>
</div>
<div id="CalenderModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel2">Edit Calendar Entry</h4>
            </div>
            <div class="modal-body">

                <div id="testmodal2" style="padding: 5px 20px;">
                    <form id="antoform2" class="form-horizontal calender" role="form">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="title2" name="title2">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" style="height:55px;" id="descr2" name="descr"></textarea>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary antosubmit2">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div id="fc_create" data-toggle="modal" data-target="#CalenderModalNew"></div>
<div id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit"></div>
<?= $this->endSection() ?>