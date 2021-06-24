<?= $this->extend('layouts/master') ?>
<?= $this->section('content') ?>
<?php #dd($students)
?>
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="datatable-finance" width="100%">
                    <h3>Registration Invoice Table</h3>
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Child Name</th>
                            <th>E-Mail</th>
                            <th>Created Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            if ($students) :
                                foreach ($students as $s) :
                                    $s_id = $s['id'];
                                    $nis = $s['nis'];
                                    $name = $s['name'];
                                    $email = $s['email'];
                                    $username = $s['username'];
                                    $address = $s['address'];
                                    $city = $s['city'];
                                    $phone = $s['phone'];
                                    $no_invoice = $s['no_invoice'];
                                    $status = $s['status'];
                                    $created_at = $s['created_at'];
                                    $updated_at = $s['updated_at'];
                                    if ($updated_at != null) $updated_at = new DateTime($updated_at);

                                    $adm = $s['payment']['adm'];
                                    $adf = $s['payment']['adf'];
                                    $tuition = $s['payment']['tuition'];
                                    $uniform = $s['payment']['uniform'];
                                    $books = $s['payment']['books'];

                                    $balance_due = $adm + $adf + $tuition + $uniform + $books;
                                    $adm_txt = "Rp" . number_format($adm, 2);
                                    $adf_txt = "Rp" . number_format($adf, 2);
                                    $tuition_txt = "Rp" . number_format($tuition, 2);
                                    $uniform_txt = "Rp" . number_format($uniform, 2);
                                    $books_txt = "Rp" . number_format($books, 2);
                                    $balance_due_txt = "Rp" . number_format($balance_due, 2);

                                    $grade = ucwords($s['group']->name);
                                    $invoice = $s['formfile'][0]['invoice'];
                            ?>
                                    <td><?= $username ?></td>
                                    <td><?= $name ?></td>
                                    <td><?= $email ?></td>
                                    <td><?= $created_at ?></td>
                                    <td>
                                        <?php
                                        if ($status == 0) : ?>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal_<?= $s_id ?>">Waiting</button>
                                        <?php
                                        elseif ($status == 1) : ?>
                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal_<?= $s_id ?>">Billed</button>
                                        <?php
                                        elseif ($status == 2) :
                                        ?>
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalVerif_<?= $s_id ?>">Paid?</button>
                                        <?php endif; ?>
                                    </td>
                            <?php endforeach;
                            endif; ?>
                        </tr>
                        <!-- Modal Student Register Invoice -->
                        <div class="modal fade" id="exampleModal_<?= $s_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header border-0 text-center">
                                        <h5 class="modal-title" id="exampleModalLabel">Invoice to <?= $username ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="<?= base_url("/assets/images/logo_sd.png") ?>" width="100%" class="rounded" alt="...">
                                            </div>
                                            <div class="col-6">
                                                <div class="row">
                                                    <h5 style="font-weight: bold;">Kids Republic</h5>
                                                </div>
                                                <div class="row">
                                                    Jl. Cipinang Bali I No. 5A, RT 11/RW 13 Cipinang Muara Kecamatan Jatinegara, Kota Jakarta Timur
                                                    <!-- <p>Jl. Cipinang Bali I No. 5A, RT 11/RW 13 Cipinang Muara Kecamatan Jatinegara, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13420</p> -->
                                                </div>
                                                <div class="row">Daerah Khusus Ibukota Jakarta</div>
                                                <div class="row">13420</div>
                                                <div class="row">
                                                    (021) 2982 7245 - 0821 200 77600
                                                    <!-- <p>(021) 2982 7245 - 0821 200 77600</p> -->
                                                </div>
                                                <div class="row">
                                                    info@kidsrepublic.sch.id
                                                    <!-- <p>info@kidsrepublic.sch.id</p> -->
                                                </div>
                                            </div>
                                            <div class="col-2" style="text-align: right;">
                                                <div class="row" style="font-weight: bold;">
                                                    INVOICE
                                                </div>
                                                <div class="row">
                                                    <p style="text-align: right;">
                                                        <?= $no_invoice ?>
                                                    </p>
                                                </div>
                                                <div class="row" style="font-weight: bold;">
                                                    DUE
                                                </div>
                                                <div class="row">
                                                    <p>On Receipt</p>
                                                </div>
                                            </div>
                                            <div class="col-2" style="text-align: right;">
                                                <div class="row" style="font-weight: bold;">
                                                    DATE
                                                </div>
                                                <div class="row">
                                                    <p><?= ($updated_at) ? $updated_at->format('M d, Y') : date("M d, Y"); ?></p>
                                                </div>
                                                <div class="row" style="font-weight: bold;">
                                                    Balance Due
                                                </div>
                                                <div class="row">
                                                    <?= $balance_due_txt ?>
                                                    <!-- <p>Rp10,500,000.00</p> -->
                                                </div>
                                            </div>
                                        </div>
                                        <hr style="height:1px;border:none;color:#333;background-color:#333;">
                                        <div class="row">
                                            <div class="col">
                                                <div class="row" style="font-weight: bold;padding: 5px;">
                                                    Bill to:
                                                </div>
                                                <div class="row" style="font-weight: bold;padding: 5px;font-size: 20px;">
                                                    Parents of <?= $name ?>
                                                </div>
                                                <div class="row" style="padding: 5px;">
                                                    <?= $address ?>
                                                    <br>
                                                    <?= $city ?>
                                                    <br>
                                                    <?= $phone ?>
                                                    <br>
                                                    <?= $email ?>
                                                </div>
                                                <!-- <div class="row" style="padding: 5px;">
                                                    </div> -->
                                                <!-- <div class="row" style="padding: 5px;">
                                                    </div> -->
                                                <!-- <div class="row" style="padding: 5px;">
                                                    </div> -->
                                            </div>
                                        </div>
                                        <hr style="height:1px;border:none;color:#333;background-color:#333;">
                                        <div class="row">
                                            <div class="col-6">Description</div>
                                            <div class="col">Rate</div>
                                            <div class="col">Qty</div>
                                            <div class="col">Amount</div>
                                        </div>
                                        <hr style="height:1px;border:none;color:#333;background-color:#333;">
                                        <div class="row">
                                            <div class="col-6">
                                                Admission Fee
                                            </div>
                                            <div class="col"><?= $adm_txt ?></div>
                                            <div class="col">1</div>
                                            <div class="col"><?= $adm_txt ?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                Annual Development Fee
                                            </div>
                                            <div class="col"><?= $adf_txt ?></div>
                                            <div class="col">1</div>
                                            <div class="col"><?= $adf_txt ?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                Tuition Fee
                                            </div>
                                            <div class="col"><?= $tuition_txt ?></div>
                                            <div class="col">1</div>
                                            <div class="col"><?= $tuition_txt ?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                Uniform
                                            </div>
                                            <div class="col"><?= $uniform_txt ?></div>
                                            <div class="col">1</div>
                                            <div class="col"><?= $uniform_txt ?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                Books
                                            </div>
                                            <div class="col"><?= $books_txt ?></div>
                                            <div class="col">1</div>
                                            <div class="col"><?= $books_txt ?></div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-8"></div>
                                            <div class="col" style="font-weight: bold;">
                                                Subtotal
                                                <br>
                                                Tax
                                            </div>
                                            <div class="col">
                                                <?= $balance_due_txt ?>
                                                <br>
                                                -
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-8"></div>
                                            <div class="col" style="font-weight: bold;">
                                                Total
                                            </div>
                                            <div class="col">
                                                <?= $balance_due_txt ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-8">
                                                Payment max. 1 weeks after invoice issued (<?= ($updated_at) ? $updated_at->add(new DateInterval('P7D'))->format("d M Y")  : date("d M Y", strtotime('+1 Week')) ?>). Your account and other information regarding school will be sent via email and phone number.
                                            </div>
                                            <div class="col" style="font-weight: bold;">
                                                Balance Due
                                            </div>
                                            <div class="col">
                                                <?= $balance_due_txt ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer border-0">
                                        <a href="<?= base_url("finance/print/$nis") ?>" class="btn btn-primary" target="_blank" rel="noopener">Print <i class="fa fa-print"></i></a>
                                        <a href="<?= base_url("finance/send/$nis/$email") ?>" class="btn btn-success">Send <i class="fa fa-send"></i></a>
                                        <!-- <button type="button" class="btn btn-primary">Send</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal -->
                        <!-- Modal Invoice Verif -->
                        <div class="modal fade" id="modalVerif_<?= $s_id ?>" tabindex="-1" aria-labelledby="modalVerifLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header border-0 text-center">
                                        <h5 class="modal-title" id="modalVerifLabel"><?= $username ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <?php if ($status == 2) : ?>
                                            <!-- <iframe type="application/pdf" src="" width="750" height="400"></iframe> -->
                                            <img src="<?= "http://101.255.120.81:21280/public/assets/upload/invoice/endinvoice/$invoice" ?>" alt="" width="750" height="400">
                                        <?php endif; ?>
                                    </div>
                                    <div class="modal-footer border-0">
                                        <a href="<?= base_url("finance/verif/$nis") ?>" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i></a>
                                        <a href="<?= base_url("finance/unverif/$nis") ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal -->
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
<?= $this->endSection() ?>