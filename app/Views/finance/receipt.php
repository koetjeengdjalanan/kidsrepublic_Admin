<?= $this->extend('layouts/master') ?>
<?= $this->section('content') ?>
<div class="right_col" role="main">

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="datatable-finance" width="100%">
                    <h3>Receipt Table</h3>
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Child Name</th>
                            <th>E-Mail</th>
                            <th>Grade</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($students as $s) :
                            $user_id = $s['users_id'];
                            $nis = $s['nis'];
                            $s_email = $s['email'];
                            $username = $s['username'];
                            $name = $s['name'];
                            $invoice = $s['invoice'];
                            $grade = ucwords($s['group']->name);
                        ?>
                            <tr>
                                <td><?= $username ?></td>
                                <td><?= $name ?></td>
                                <td><?= $s_email ?></td>
                                <td><?= $grade ?></td>
                                <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal_<?= $nis ?>">Billed</button></td>
                            </tr>
                            <!-- Modal Student Register -->
                            <div class="modal fade" id="exampleModal_<?= $nis ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header border-0 text-center">
                                            <h5 class="modal-title" id="exampleModalLabel">Receipt From Parents of <?= $name ?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="text-center">
                                                <img src="<?= "http://101.255.120.81:21280/public/assets/upload/invoice/endinvoice/$invoice" ?>" width="50%" class="rounded" alt="...">
                                            </div>
                                        </div>
                                        <div class="modal-footer border-0">
                                            <a href="<?= base_url("finance/acceptReceipt/$nis/$s_email") ?>" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i></a>
                                            <a href="<?= base_url("finance/deniedReceipt/$nis") ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal -->
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <br />
</div>
<?= $this->endSection() ?>