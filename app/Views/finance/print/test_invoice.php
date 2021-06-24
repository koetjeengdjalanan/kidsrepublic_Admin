<?php
$s_id = $students['id'];
$nis = $students['nis'];
$name = $students['name'];
$email = $students['email'];
$username = $students['username'];
$address = $students['address'];
$city = $students['city'];
$phone = $students['phone'];
$no_invoice = $students['no_invoice'];
$status = $students['status'];
$updated_at = $students['updated_at'];
if ($updated_at != null) $updated_at = new DateTime($updated_at);

$adm = $students['payment']['adm'];
$adf = $students['payment']['adf'];
$tuition = $students['payment']['tuition'];
$uniform = $students['payment']['uniform'];
$books = $students['payment']['books'];

$subtotal = $adm + $adf + $tuition + $uniform + $books;
$tax = $subtotal * 10 / 100;
$balance_due = $subtotal + $tax;
$adm_txt = "Rp" . number_format($adm, 2);
$adf_txt = "Rp" . number_format($adf, 2);
$tuition_txt = "Rp" . number_format($tuition, 2);
$uniform_txt = "Rp" . number_format($uniform, 2);
$books_txt = "Rp" . number_format($books, 2);
$subtotal_txt = "Rp" . number_format($subtotal, 2);
$tax_txt = "Rp" . number_format($tax, 2);
$balance_due_txt = "Rp" . number_format($balance_due, 2);
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

<body>
    <h2 style="text-align: center;">Invoice Enrollment Fees</h2>
    <table style="width: 100%;">
        <tbody>
            <tr>
                <td style="width:20%">
                    <img src="<?= base_url("/assets/images/Logo_tk.png") ?>" width="1000%" alt="Logo_KidsRepublic">
                </td>
                <td style="width:40%">
                    <div><strong>Kids Republic</strong><br />
                        Jl. Cipinang Bali I No. 5A, RT 11/RW 13 Cipinang Muara Kecamatan Jatinegara, Kota Jakarta Timur<br />Daerah Khusus Ibukota Jakarta 13420 <br />
                        (021) 2982 7245 - 0821 200 77600 <br />
                        info@kidsrepublic.sch.id
                    </div>
                </td>
                <td style="width:20%;text-align: right;">
                    <h5>Invoice</h5>
                    <p><?= $no_invoice ?></p>
                    <h5>Due</h5>
                    <p>On Receipt Notice</p>
                </td>
                <td style="width:20%;text-align: right;">
                    <h5>Date</h5>
                    <p><?= ($updated_at) ? $updated_at->format('M d, Y') : date("M d, Y"); ?></p>
                    <h5>Balance Due</h5>
                    <p><?= $subtotal_txt ?></p>
                    <!-- <h5>Balance Due</h5>
                    <p><?= $balance_due_txt ?></p> -->
                </td>
            </tr>
        </tbody>
    </table>
    <div class="container">
        <h4>Bill to:<br>Parents of <?= $name ?></h4>
        <div class="row"><?= $address ?>, <?= $city ?><br><?= $phone ?><br><?= $email ?>
        </div>
    </div>
    <table border="1">
        <thead>
            <tr>
                <th style="font-weight: bold;width: 33%; background-color:lightgrey;"> Description</th>
                <th style="font-weight: bold;width: 33%; background-color:lightgrey;"> Rate</th>
                <th style="font-weight: bold;width: 4%; background-color:lightgrey;"> Qty</th>
                <th style="font-weight: bold;width: 30%; background-color:lightgrey;"> Amount</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="width: 33%;"> Admission Fee</td>
                <td style="width: 33%;"> <?= $adm_txt ?></td>
                <td style="width: 4%;"> 1</td>
                <td style="width: 30%;"> <?= $adm_txt ?></td>
            </tr>
            <tr>
                <td style="width: 33%;"> Annual Development Fee</td>
                <td style="width: 33%;"> <?= $adf_txt ?></td>
                <td style="width: 4%;"> 1</td>
                <td style="width: 30%;"> <?= $adf_txt ?></td>
            </tr>
            <tr>
                <td style="width: 33%;"> Tuition Fee</td>
                <td style="width: 33%;"> <?= $tuition_txt ?></td>
                <td style="width: 4%;"> 1</td>
                <td style="width: 30%;"> <?= $tuition_txt ?></td>
            </tr>
            <tr>
                <td style="width: 33%;"> Uniform</td>
                <td style="width: 33%;"> <?= $uniform_txt ?></td>
                <td style="width: 4%;"> 1</td>
                <td style="width: 30%;"> <?= $uniform_txt ?></td>
            </tr>
            <tr>
                <td style="width: 33%;"> Books</td>
                <td style="width: 33%;"> <?= $books_txt ?></td>
                <td style="width: 4%;"> 1</td>
                <td style="width: 30%;"> <?= $books_txt ?></td>
            </tr>
            <tr>
                <td style="width: 60%;"></td>
                <td style="font-weight: bold;width: 10%;"> Subtotal</td>
                <td style="width: 30%;"> <?= $subtotal_txt ?></td>
            </tr>
            <tr>
                <td style="width: 60%;"></td>
                <td style="font-weight: bold;width: 10%;"> Tax</td>
                <td style="width: 30%;"> -</td>
                <!-- <td style="font-weight: bold;width: 25%;"> Tax</td>
                <td style="width: 25%;"> <?= $tax_txt ?></td> -->
            </tr>
            <tr>
                <td style="width: 60%;">Payment maximum 1 weeks after invoice issued (<?= ($updated_at) ? $updated_at->add(new DateInterval('P7D'))->format("d M Y")  : date("d M Y", strtotime('+1 Week')) ?>). Your account and other information regarding school will be sent via email and phone number.</td>
                <td style=" font-weight: bold; width: 10%"> Balance Due</td>
                <td style="width: 30%;font-weight: bold;"> <?= $subtotal_txt ?></td>
                <!-- <td style="font-weight: bold; width: 25%"> Balance Due</td>
                <td style="width: 25%;font-weight: bold;"> <?= $balance_due_txt ?></td> -->
            </tr>
        </tbody>
    </table>
    <p style="text-align: center;">
        <strong>
            Bank Account BCA 7600-030-099 a/n Yayasan Batin Cahaya Bangsa
        </strong>
        <br> Yayasan Batin Cahaya Bangsa
        Jl. Cipinang Bali 1. Kel. Cipinang Muara, Kec. Jatinegara, Jakarta Timur 13420
        <br>Telp: 021-8502050 / 021-29827245 / 0821 200 77 600
        info@kidsrepublic.sch.id / finance@kidsrepublic.co.id | www.kidsrepublic.sch.id
    </p>
</body>