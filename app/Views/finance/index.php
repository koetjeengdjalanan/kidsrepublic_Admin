<?= $this->extend('layouts/master') ?>
<?= $this->section('content') ?>
<div class="right_col" role="main" width="100%">
  <!-- <h3>Enrolling and Payment Graph</h3> -->
  <!-- <div class="row">
    <div class="col-md-7">
      <div id="chart_plot_01" class="demo-placeholder"></div>
    </div>
    <div class="col-md-5">
      <div class="x_content">
        <div id="calendar"></div>
      </div>
    </div>
  </div> -->
  <div class="row">
    <div class="col table-responsive">
      <table class="table table-striped table-bordered" id="datatable-buttons" width="100%">
        <h3>Pricelist Table</h3>
        <thead>
          <tr>
            <th scope="col">Package</th>
            <th scope="col">Registration Fee</th>
            <th scope="col">ADM</th>
            <th scope="col">ADF</th>
            <th scope="col">Tuition Fee</th>
            <th scope="col">Uniform</th>
            <th scope="col">Books</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($pricelist as $p) :
            $id = $p['id'];
          ?>
            <tr>
              <?php foreach ($p as $key => $value) :
                # code...
                if ($key === "id") continue;
                if ($key === "created_at") continue;
                if ($key === "updated_at") {
                  $updated_at = $value;
                  continue;
                }
                if ($key === "updated_by") {
                  $updated_by = $value;
                  break;
                };
              ?>
                <td class="<?= $key ?>"><?= $value ?></td>

              <?php endforeach; ?>
              <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#pricelist_<?= $id ?>"><i class="glyphicon glyphicon-edit" style="color: white;"></i></button></td>
            </tr>
            <div id="pricelist_<?= $id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="pricelistLabel" aria-hidden=" true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="pricelistLabel">Edit Pricelist Package</h4>
                  </div>
                  <form id="form" action="<?= base_url('finance/updatePrice') ?>" class="form-horizontal calender" role="form" method="POST">
                    <?= csrf_field() ?>
                    <div class="modal-body">
                      <div id="modal" style="padding: 5px 20px;">
                        <div class="form-group">
                          <label class="col-sm-3 control-label">ID</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="id" name="id" value="<?= $id ?>" readonly>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Package</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="package" name="package" value="<?= $p['package'] ?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Registration Fee</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="registration" name="registration" value="<?= $p['registration'] ?>" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" data-type="currency">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Admission Fee</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="adm" name="adm" value="<?= $p['adm'] ?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Annual Development Fee</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="adf" name="adf" value="<?= $p['adf'] ?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Tuition Fee</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="tuition" name="tuition" value="<?= $p['tuition'] ?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Uniform</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="uniform" name="uniform" value="<?= $p['uniform'] ?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Books</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="books" name="books" value="<?= $p['books'] ?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-12 control-label"><?= "Last Update: $updated_at by $updated_by" ?></label>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary antosubmit2">Save changes</button>
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
  <!-- <div class="row">
    <div class="col-md-4">
      <h3>Finance Log</h3>
      <table class="table">
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


<!-- MODAL CALENDAR -->
<!-- calendar modal -->
<!-- <div id="CalenderModalNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
<div id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit"></div> -->
<?= $this->endSection() ?>