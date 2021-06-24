<?php
if (session()->getFlashData('success')) {
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="alert">
        <?= session()->getFlashData('success') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;
            </span>
        </button>
    </div>
<?php
}
?>
<?php
if (session()->getFlashData('wrong')) {
?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert" id="alert">
        <?= session()->getFlashData('wrong') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;
            </span>
        </button>
    </div>
<?php
}
?>