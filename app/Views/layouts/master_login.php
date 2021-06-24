<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?= base_url("favicon.ico") ?>" type="image/ico" />

    <title>Login</title>

    <?= $this->include('layouts/head') ?>
  </head>

  <body class="row login justify-content-center vh-100 m-0">

    <!-- page content -->
    <?= $this->renderSection('content') ?>
    <!-- /page content -->

    <?= $this->include('layouts/foot') ?>

  </body>
	
</html>
