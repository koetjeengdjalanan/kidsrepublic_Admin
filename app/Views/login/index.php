<?= $this->extend('layouts/master_login') ?>
<?= $this->section('content') ?>
<div class="col login-dev">
    <div class="login_wrapper">
        <div class="">
            <section class="login_content">
                <h1><?=lang('Auth.loginTitle')?></h1>

                <div class="text-left">
                <?= view('Myth\Auth\Views\_message_block') ?>
                </div>

                <form action="<?= base_url('login') ?>" method="post">
                    <?= csrf_field() ?>
                    
                    <?php if ($config->validFields === ['email']): ?>
                        <div class="form-group text-left">
                            <label for="login"><?=lang('Auth.email')?></label>
							<input type="email" class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
								   name="login" placeholder="<?=lang('Auth.email')?>">
							<div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
						</div>
                    <?php else: ?>
						<div class="form-group text-left">
							<label for="login"><?=lang('Auth.emailOrUsername')?></label>
							<input type="text" class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
								   name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
							<div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
						</div>
                    <?php endif; ?>
                    
                    <div class="form-group text-left">
                        <label for="password"><?=lang('Auth.password')?></label>
                        <input type="password" name="password" class="form-control  <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>">
                        <div class="invalid-feedback">
                            <?= session('errors.password') ?>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.loginAction')?></button>
                </form>

                    <a class="reset_pass" href="#">Lost your password?</a>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">New to site?
                            <a href="<?= base_url("register/"); ?>" class="to_register"> Create Account </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-book"></i> Kids Republic School</h1>
                            <p>©2021 All Rights Reserved. Kids Republic School Admin System with Integrated Data Crunching</p>
                        </div>
                    </div>
            </section>
        </div>
    </div>
</div>
<?= $this->endSection() ?>