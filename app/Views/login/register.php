<?= $this->extend('layouts/master_login') ?>
<?= $this->section('content') ?>
<div class="login_wrapper">
    <div class="">
        <section class="login_content">
            <form action="<?= base_url('register') ?>" method="post">
                <?= csrf_field() ?>
                <h1><?=lang('Auth.register')?></h1>

                <div class="text-left">
                <?= view('Myth\Auth\Views\_message_block') ?>
                </div>

                <div class="form-group text-left">
                    <label for="username"><?=lang('Auth.username')?></label>
                    <input type="text" class="form-control <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
                </div>
                
                <div class="form-group text-left">
                    <label for="email"><?=lang('Auth.email')?></label>
                    <input type="email" class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>"
                            name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                </div>
                
                <div class="form-group text-left">
                    <label for="password"><?=lang('Auth.password')?></label>
                    <input type="password" name="password" class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                </div>

                <div class="form-group text-left">
                    <label for="pass_confirm"><?=lang('Auth.repeatPassword')?></label>
                    <input type="password" name="pass_confirm" class="form-control <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                </div>
                
                <div>
                    <button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.register')?></button>
                </div>

                <div class="clearfix"></div>

                <div class="separator">
                <p class="change_link">Already a member ?
                    <a href="<?= base_url("login/index"); ?>" class=""> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                    <h1><i class="fa fa-book"></i> Kids Republic School</h1>
                    <p>©2021 All Rights Reserved. Kids Republic School Admin System with Integrated Data Crunching</p>
                </div>
                </div>
            </form>
        </section>
    </div>
</div>
<?= $this->endSection() ?>


