<?= $this->extend('layouts/master') ?>
<?= $this->section('content') ?>
<div class="right_col" role="main">
    <h3>Enrolling and Payment Graph</h3>
    <div class="row">
        <div class="col-md-7 px-4 py-2">
            <div class="row">
                <div class="card col-md-6">
                    <div class="card-body">
                        <h5 class="card-title">Pending Interview</h5>
                        <br />
                        <h1 class="text-right">1,273</h1>
                        <p class="card-text text-muted">Scheduled <span class="pl-5">534</span></p>
                    </div>
                </div>
                <div class="card col-md-3">
                    <div class="card-body">
                        <h5 class="card-title">
                            Pending <br />
                            Trial
                        </h5>
                        <h1 class="mt-3 text-right">809</h1>
                    </div>
                </div>
                <div class="card col-md-3">
                    <div class="card-body">
                        <h5 class="card-title">Pending Enrollment</h5>
                        <h1 class="mt-3 text-right">114</h1>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="card col-md-3">
                    <div class="card-body">
                        <h5 class="card-title">
                            Pending Request <br />
                            Form
                        </h5>
                        <h3 class="card-subtitle mb-2 text-muted text-right">1,254</h3>
                    </div>
                </div>
                <div class="card col-md-3">
                    <div class="card-body">
                        <h5 class="card-title">
                            Elementary Student <br />
                            Quota
                        </h5>
                        <h3 class="card-subtitle mb-2 text-muted text-right">809</h3>
                    </div>
                </div>
                <div class="card col-md-3">
                    <div class="card-body">
                        <h5 class="card-title">
                            Primary Student <br />
                            Quota
                        </h5>
                        <h3 class="card-subtitle mb-2 text-muted text-right">114</h3>
                    </div>
                </div>
                <div class="card col-md-3">
                    <div class="card-body">
                        <h5 class="card-title">Pending Enrollment Package</h5>
                        <h3 class="card-subtitle mb-2 text-muted text-right">27</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 py-3">
            <div class="x_content">
                <div id="calendar"></div>
            </div>
        </div>
    </div>

    <div class="row px-3 table-responsive">
        <table class="table table-striped table-bordered" id="datatable-buttons" width="100%">
            <h3>Students Table</h3>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Enrolling Date</th>
                    <th>Last Seen</th>
                    <th>Status</th>
                    <th>Code</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>A</td>
                    <td>B</td>
                    <td>C</td>
                    <td>D</td>
                    <td>E</td>
                    <td>F</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Email <small>Test Send Mail</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form action="<?= base_url('Admin/sendmail_test') ?>" id="test-kirim" data-parsley-validate class="form-horizontal form-label-left">

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">First Name
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="first-name" required="required" class="form-control ">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Last Name
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="last-name" name="last-name" required="required" class="form-control">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <button class="btn btn-primary" type="button">Cancel</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
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