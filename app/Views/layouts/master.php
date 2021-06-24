<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?= base_url("favicon.ico") ?>" type="image/ico" />

  <title><?= $title ?></title>

  <?= $this->include('layouts/head') ?>
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container vh-100">
      <?= $this->include('layouts/sidebar') ?>

      <!-- top navigation -->
      <?= $this->include('layouts/header') ?>
      <!-- /top navigation -->

      <!-- page content -->
      <?= $this->renderSection('content') ?>
      <!-- /page content -->

      <!-- footer content -->
      <?= $this->include('layouts/footer') ?>
      <!-- /footer content -->
    </div>
  </div>

  <?= $this->include('layouts/foot') ?>

</body>

</html>