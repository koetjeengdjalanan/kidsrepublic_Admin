<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Registration Mail</title>
    <!-- Bootstrap 4 CSS-->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"> -->
</head>

<?php
$s_id = $students['id'];
$nis = $students['nis'];
$name = $students['name'];
$email = $students['email'];
$username = $students['username'];
$address = $students['address'];
$city = $students['city'];
$phone = $students['phone'];
$status = $students['status'];

$adm = $students['payment']['adm'];
$adf = $students['payment']['adf'];
$tuition = $students['payment']['tuition'];
$uniform = $students['payment']['uniform'];
$books = $students['payment']['books'];

$balance_due = $adm + $adf + $tuition + $uniform + $books;
$adm_txt = "Rp " . number_format($adm, 2);
$adf_txt = "Rp " . number_format($adf, 2);
$tuition_txt = "Rp " . number_format($tuition, 2);
$uniform_txt = "Rp " . number_format($uniform, 2);
$books_txt = "Rp " . number_format($books, 2);
$balance_due_txt = "Rp " . number_format($balance_due, 2);
?>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <img src="<?= base_url() ?>/assets/images/Mail_Header.jpg" alt="Mail Header" style="width: 100%;">
        </div>
        <hr>
        <div class="row justify-content-center py-2">
            <h3 style="font-weight: bold;">Invoice Enrollment Fees</h3>
        </div>
        <div class="row align-items-center" style="display: grid;grid-template-columns: 1fr 2fr 1fr 1fr;grid-template-rows: 1fr;">
            <img src="<?= base_url("/assets/images/logo_sd.png") ?>" width="50%" class="rounded" alt="Logo_KidsRepublic">
            <div class="row">Kids Republic<br />
                Jl. Cipinang Bali I No. 5A, RT 11/RW 13 Cipinang Muara Kecamatan Jatinegara, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13420 <br />
                (021) 2982 7245 - 0821 200 77600 <br />
                info@kidsrepublic.sch.id
            </div>
            <div style="font-weight: bold;">Invoice
                <p style="font-weight: 400;">INV0001</p>
                Due
                <p style="font-weight: 400;">On Receipt Notice</p>
            </div>
            <div style="font-weight: bold;">Date
                <p style="font-weight: 400;"><?= date("M d, Y") ?></p>
                Balance Due
                <p style="font-weight: 400;"><?= $balance_due_txt ?></p>
            </div>
        </div>
        <hr style="height:1px;border:none;color:#333;background-color:#333;">
        <div class="container">
            <div class="row" style="font-weight: bold;">
                Bill to:
            </div>
            <div class="row" style="font-weight: bold;font-size: 25px;">
                Parents of <?= $name ?>
            </div>
            <div class="row">
                <?= $address ?>
                <br>
                <?= $city ?>
                <br>
                <?= $phone ?>
                <br>
                <?= $email ?>
            </div>
        </div>
        <hr style="height:1px;border:none;color:#333;background-color:#333;">
        <div class="row" style="display: grid;grid-template-columns: 2fr 1fr 1fr 1fr;">
            <div class="col" style="font-weight: bold;">Description</div>
            <div class="col" style="font-weight: bold;">Rate</div>
            <div class="col" style="font-weight: bold;">Qty</div>
            <div class="col" style="font-weight: bold;">Amount</div>
        </div>
        <hr style="height:1px;border:none;color:#333;background-color:#333;">
        <div class="row" style="display: grid;grid-template-columns: 2fr 1fr 1fr 1fr; grid-template-rows: auto;">
            <div class="col-6">
                Admission Fee
            </div>
            <div class="col"><?= $adm_txt ?></div>
            <div class="col">1</div>
            <div class="col"><?= $adm_txt ?></div>
            <div class="col-6">
                Annual Development Fee
            </div>
            <div class="col"><?= $adf_txt ?></div>
            <div class="col">1</div>
            <div class="col"><?= $adf_txt ?></div>
            <div class="col-6">
                Tuition Fee
            </div>
            <div class="col"><?= $tuition_txt ?></div>
            <div class="col">1</div>
            <div class="col"><?= $tuition_txt ?></div>
            <div class="col-6">
                Uniform
            </div>
            <div class="col"><?= $uniform_txt ?></div>
            <div class="col">1</div>
            <div class="col"><?= $uniform_txt ?></div>
            <div class="col-6">
                Books
            </div>
            <div class="col"><?= $books_txt ?></div>
            <div class="col">1</div>
            <div class="col"><?= $books_txt ?></div>
        </div>
        <hr>
        <div class="row" style="display: grid;grid-template-columns: 2fr 1fr 1fr 1fr; grid-template-rows: auto;">
            <div class="col-8"></div>
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
        <div class="row" style="display: grid;grid-template-columns: 2fr 1fr 1fr 1fr; grid-template-rows: auto;">
            <div class="col-8"></div>
            <div class="col-8"></div>
            <div class="col" style="font-weight: bold;">
                Total
            </div>
            <div class="col">
                <?= $balance_due_txt ?>
            </div>
        </div>
        <hr>
        <div class="row" style="display: grid;grid-template-columns: 2fr 1fr 1fr 1fr; grid-template-rows: auto;">
            <div class="col-8">
                Payment max. 1 weeks after invoice issued (<?= date("d M Y", strtotime('+1 Week')) ?>). Your account and other information regarding school will be sent via email and phone number.
            </div>
            <div class="col"></div>
            <div class="col" style="font-weight: bold;">
                Balance Due
            </div>
            <div class="col">
                <?= $balance_due_txt ?>
            </div>
        </div>
        <hr>
        <div class="row d-flex justify-content-center">
            <img src="<?= base_url() ?>/assets/images/Mail_Footer.jpg" alt="Mail Header" style="width: 100%;">
        </div>
    </div>
</body>

</html>