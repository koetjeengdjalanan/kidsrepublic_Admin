<?= $this->extend('layouts/master') ?>
<?= $this->section('content') ?>
<div class="right_col" role="main">
    <h3>Enrolling and Payment Graph</h3>
    <div class="row">
        <div class="col-md-7" style="padding: 10% 0;">
            <div id="chart_plot_01" class="demo-placeholder"></div>
        </div>
        <div class="col-md-5">
            <div class="x_content">
                <div id="calendar"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 table-responsive">
            <table class="table table-striped table-bordered" id="datatable-buttons" width="100%">
                <h3>Students Table</h3>
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Coupon</th>
                        <th scope="col">Platform</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                          <img src="<?= base_url('assets/images/Avatar.png') ?>" alt="..." class="img-circle" style="width:40px;" />
                          <span class="align-middle">Ulla Kirgan</span>
                        </td>
                        <td class="align-middle">Female</td>
                        <td class="align-middle">Siblings</td>
                        <td class="align-middle">Tinder</td>
                        <td class="align-middle"><div class="bg-danger text-center text-white rounded-pill">TRIAL</div></td>
                    </tr>
                    <tr>
                        <td>
                          <img src="<?= base_url('assets/images/Avatar4.png') ?>" alt="..." class="img-circle" style="width:40px;" />
                          <span class="align-middle">Mariska Plaister</span>
                        </td>
                        <td class="align-middle">Female</td>
                        <td class="align-middle">Staff Family</td>
                        <td class="align-middle">Tan Tan</td>
                        <td class="align-middle"><div class="bg-danger text-center text-white rounded-pill">TRIAL</div></td>
                    </tr>
                    <tr>
                        <td>
                          <img src="<?= base_url('assets/images/Avatar3.png') ?>" alt="..." class="img-circle" style="width:40px;" />
                          <span class="align-middle">Rikki Sommer</span>
                        </td>
                        <td class="align-middle">Female</td>
                        <td class="align-middle">Open House</td>
                        <td class="align-middle">Signal</td>
                        <td class="align-middle"><div class="bg-danger text-center text-white rounded-pill">TRIAL</div></td>
                    </tr>
                    <tr>
                        <td>
                          <img src="<?= base_url('assets/images/Avatar2.png') ?>" alt="..." class="img-circle" style="width:40px;" />
                          <span class="align-middle">Jdaive Morden</span>
                        </td>
                        <td class="align-middle">Male</td>
                        <td class="align-middle">Open House</td>
                        <td class="align-middle">Twitter</td>
                        <td class="align-middle"><div class="bg-danger text-center text-white rounded-pill">TRIAL</div></td>
                    </tr>
                    <tr>
                        <td>
                          <img src="<?= base_url('assets/images/Avatar5.png') ?>" alt="..." class="img-circle" style="width:40px;" />
                          <span class="align-middle">Victoria Candy</span>
                        </td>
                        <td class="align-middle">Female</td>
                        <td class="align-middle">Open House</td>
                        <td class="align-middle">Twitter</td>
                        <td class="align-middle"><div class="bg-danger text-center text-white rounded-pill">TRIAL</div></td>
                    </tr>
                    <tr>
                        <td>
                          <img src="<?= base_url('assets/images/Avatar.png') ?>" alt="..." class="img-circle" style="width:40px;" />
                          <span class="align-middle">Ulla Kirgan</span>
                        </td>
                        <td class="align-middle">Female</td>
                        <td class="align-middle">Siblings</td>
                        <td class="align-middle">Tinder</td>
                        <td class="align-middle"><div class="bg-danger text-center text-white rounded-pill">TRIAL</div></td>
                    </tr>
                    <tr>
                        <td>
                          <img src="<?= base_url('assets/images/Avatar4.png') ?>" alt="..." class="img-circle" style="width:40px;" />
                          <span class="align-middle">Mariska Plaister</span>
                        </td>
                        <td class="align-middle">Female</td>
                        <td class="align-middle">Staff Family</td>
                        <td class="align-middle">Tan Tan</td>
                        <td class="align-middle"><div class="bg-danger text-center text-white rounded-pill">TRIAL</div></td>
                    </tr>
                    <tr>
                        <td>
                          <img src="<?= base_url('assets/images/Avatar3.png') ?>" alt="..." class="img-circle" style="width:40px;" />
                          <span class="align-middle">Rikki Sommer</span>
                        </td>
                        <td class="align-middle">Female</td>
                        <td class="align-middle">Open House</td>
                        <td class="align-middle">Signal</td>
                        <td class="align-middle"><div class="bg-danger text-center text-white rounded-pill">TRIAL</div></td>
                    </tr>
                    <tr>
                        <td>
                          <img src="<?= base_url('assets/images/Avatar2.png') ?>" alt="..." class="img-circle" style="width:40px;" />
                          <span class="align-middle">Jdaive Morden</span>
                        </td>
                        <td class="align-middle">Male</td>
                        <td class="align-middle">Open House</td>
                        <td class="align-middle">Twitter</td>
                        <td class="align-middle"><div class="bg-danger text-center text-white rounded-pill">TRIAL</div></td>
                    </tr>
                    <tr>
                        <td>
                          <img src="<?= base_url('assets/images/Avatar5.png') ?>" alt="..." class="img-circle" style="width:40px;" />
                          <span class="align-middle">Victoria Candy</span>
                        </td>
                        <td class="align-middle">Female</td>
                        <td class="align-middle">Open House</td>
                        <td class="align-middle">Twitter</td>
                        <td class="align-middle"><div class="bg-danger text-center text-white rounded-pill">TRIAL</div></td>
                    </tr>
                    <tr>
                        <td>
                          <img src="<?= base_url('assets/images/Avatar.png') ?>" alt="..." class="img-circle" style="width:40px;" />
                          <span class="align-middle">Ulla Kirgan</span>
                        </td>
                        <td class="align-middle">Female</td>
                        <td class="align-middle">Siblings</td>
                        <td class="align-middle">Tinder</td>
                        <td class="align-middle"><div class="bg-danger text-center text-white rounded-pill">TRIAL</div></td>
                    </tr>
                    <tr>
                        <td>
                          <img src="<?= base_url('assets/images/Avatar4.png') ?>" alt="..." class="img-circle" style="width:40px;" />
                          <span class="align-middle">Mariska Plaister</span>
                        </td>
                        <td class="align-middle">Female</td>
                        <td class="align-middle">Staff Family</td>
                        <td class="align-middle">Tan Tan</td>
                        <td class="align-middle"><div class="bg-danger text-center text-white rounded-pill">TRIAL</div></td>
                    </tr>
                    <tr>
                        <td>
                          <img src="<?= base_url('assets/images/Avatar3.png') ?>" alt="..." class="img-circle" style="width:40px;" />
                          <span class="align-middle">Rikki Sommer</span>
                        </td>
                        <td class="align-middle">Female</td>
                        <td class="align-middle">Open House</td>
                        <td class="align-middle">Signal</td>
                        <td class="align-middle"><div class="bg-danger text-center text-white rounded-pill">TRIAL</div></td>
                    </tr>
                    <tr>
                        <td>
                          <img src="<?= base_url('assets/images/Avatar2.png') ?>" alt="..." class="img-circle" style="width:40px;" />
                          <span class="align-middle">Jdaive Morden</span>
                        </td>
                        <td class="align-middle">Male</td>
                        <td class="align-middle">Open House</td>
                        <td class="align-middle">Twitter</td>
                        <td class="align-middle"><div class="bg-danger text-center text-white rounded-pill">TRIAL</div></td>
                    </tr>
                    <tr>
                        <td>
                          <img src="<?= base_url('assets/images/Avatar5.png') ?>" alt="..." class="img-circle" style="width:40px;" />
                          <span class="align-middle">Victoria Candy</span>
                        </td>
                        <td class="align-middle">Female</td>
                        <td class="align-middle">Open House</td>
                        <td class="align-middle">Twitter</td>
                        <td class="align-middle"><div class="bg-danger text-center text-white rounded-pill">TRIAL</div></td>
                    </tr>
                    <tr>
                        <td>
                          <img src="<?= base_url('assets/images/Avatar.png') ?>" alt="..." class="img-circle" style="width:40px;" />
                          <span class="align-middle">Ulla Kirgan</span>
                        </td>
                        <td class="align-middle">Female</td>
                        <td class="align-middle">Siblings</td>
                        <td class="align-middle">Tinder</td>
                        <td class="align-middle"><div class="bg-danger text-center text-white rounded-pill">TRIAL</div></td>
                    </tr>
                    <tr>
                        <td>
                          <img src="<?= base_url('assets/images/Avatar4.png') ?>" alt="..." class="img-circle" style="width:40px;" />
                          <span class="align-middle">Mariska Plaister</span>
                        </td>
                        <td class="align-middle">Female</td>
                        <td class="align-middle">Staff Family</td>
                        <td class="align-middle">Tan Tan</td>
                        <td class="align-middle"><div class="bg-danger text-center text-white rounded-pill">TRIAL</div></td>
                    </tr>
                    <tr>
                        <td>
                          <img src="<?= base_url('assets/images/Avatar3.png') ?>" alt="..." class="img-circle" style="width:40px;" />
                          <span class="align-middle">Rikki Sommer</span>
                        </td>
                        <td class="align-middle">Female</td>
                        <td class="align-middle">Open House</td>
                        <td class="align-middle">Signal</td>
                        <td class="align-middle"><div class="bg-danger text-center text-white rounded-pill">TRIAL</div></td>
                    </tr>
                    <tr>
                        <td>
                          <img src="<?= base_url('assets/images/Avatar2.png') ?>" alt="..." class="img-circle" style="width:40px;" />
                          <span class="align-middle">Jdaive Morden</span>
                        </td>
                        <td class="align-middle">Male</td>
                        <td class="align-middle">Open House</td>
                        <td class="align-middle">Twitter</td>
                        <td class="align-middle"><div class="bg-danger text-center text-white rounded-pill">TRIAL</div></td>
                    </tr>
                    <tr>
                        <td>
                          <img src="<?= base_url('assets/images/Avatar5.png') ?>" alt="..." class="img-circle" style="width:40px;" />
                          <span class="align-middle">Victoria Candy</span>
                        </td>
                        <td class="align-middle">Female</td>
                        <td class="align-middle">Open House</td>
                        <td class="align-middle">Twitter</td>
                        <td class="align-middle"><div class="bg-danger text-center text-white rounded-pill">TRIAL</div></td>
                    </tr>
                    <tr>
                        <td>
                          <img src="<?= base_url('assets/images/Avatar.png') ?>" alt="..." class="img-circle" style="width:40px;" />
                          <span class="align-middle">Ulla Kirgan</span>
                        </td>
                        <td class="align-middle">Female</td>
                        <td class="align-middle">Siblings</td>
                        <td class="align-middle">Tinder</td>
                        <td class="align-middle"><div class="bg-danger text-center text-white rounded-pill">TRIAL</div></td>
                    </tr>
                    <tr>
                        <td>
                          <img src="<?= base_url('assets/images/Avatar4.png') ?>" alt="..." class="img-circle" style="width:40px;" />
                          <span class="align-middle">Mariska Plaister</span>
                        </td>
                        <td class="align-middle">Female</td>
                        <td class="align-middle">Staff Family</td>
                        <td class="align-middle">Tan Tan</td>
                        <td class="align-middle"><div class="bg-danger text-center text-white rounded-pill">TRIAL</div></td>
                    </tr>
                    <tr>
                        <td>
                          <img src="<?= base_url('assets/images/Avatar3.png') ?>" alt="..." class="img-circle" style="width:40px;" />
                          <span class="align-middle">Rikki Sommer</span>
                        </td>
                        <td class="align-middle">Female</td>
                        <td class="align-middle">Open House</td>
                        <td class="align-middle">Signal</td>
                        <td class="align-middle"><div class="bg-danger text-center text-white rounded-pill">TRIAL</div></td>
                    </tr>
                    <tr>
                        <td>
                          <img src="<?= base_url('assets/images/Avatar2.png') ?>" alt="..." class="img-circle" style="width:40px;" />
                          <span class="align-middle">Jdaive Morden</span>
                        </td>
                        <td class="align-middle">Male</td>
                        <td class="align-middle">Open House</td>
                        <td class="align-middle">Twitter</td>
                        <td class="align-middle"><div class="bg-danger text-center text-white rounded-pill">TRIAL</div></td>
                    </tr>
                    <tr>
                        <td>
                          <img src="<?= base_url('assets/images/Avatar5.png') ?>" alt="..." class="img-circle" style="width:40px;" />
                          <span class="align-middle">Victoria Candy</span>
                        </td>
                        <td class="align-middle">Female</td>
                        <td class="align-middle">Open House</td>
                        <td class="align-middle">Twitter</td>
                        <td class="align-middle"><div class="bg-danger text-center text-white rounded-pill">TRIAL</div></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <table class="table">
                <h3>Marketing Log</h3>
                <thead>
                    <tr>
                        <th scope="col">Process</th>
                        <th scope="col">Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Banner Data Input</td>
                        <td>10:45 <br> 05/10/2019</td>
                    </tr>
                    <tr>
                        <td>Banner Data Input</td>
                        <td>11:00 <br> 05/10/2019</td>
                    </tr>
                    <tr>
                        <td>Banner Data Input</td>
                        <td>13:45 <br> 05/10/2019</td>
                    </tr>
                    <tr>
                        <td>Banner Data Input</td>
                        <td>14:00 <br> 05/10/2019</td>
                    </tr>
                    <tr>
                        <td>Banner Data Input</td>
                        <td>15:00 <br> 05/10/2019</td>
                    </tr>
                </tbody>
            </table>
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
