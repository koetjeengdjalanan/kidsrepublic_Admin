<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="<?= base_url() ?>" class="site_title"><img src="<?= base_url('assets/images/logo_sd.png') ?>" width="50px" alt=""> <span>Kids Republic</span></a>
        </div>

        <div class="clearfix"></div>

        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="<?= base_url('assets/images/img.jpg') ?>" alt="..." class="img-circle profile_img" />
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2><?= user()->username ?></h2>
            </div>
        </div>

        <br />
        <?php if (in_groups('admin')) :  ?>
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                    <h3>See Others</h3>
                    <ul class="nav side-menu">
                        <li>
                            <a><i class="fa fa-cogs"></i> Admin <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                            </ul>
                        </li>
                        <li>
                            <a><i class="fa fa-dollar"></i> Finance <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="<?= base_url('finance') ?>">Dashboard</a></li>
                                <li><a href="<?= base_url('finance/registration') ?>">Registration</a></li>
                                <li><a href="<?= base_url('finance/invoice') ?>">Invoice</a></li>
                                <!-- <li><a href="<?= base_url('finance/receipt') ?>">Receipt</a></li> -->
                            </ul>
                        </li>
                        <li>
                            <a><i class="fa fa-graduation-cap"></i> Teacher <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="<?= base_url('teacher') ?>">Dashboard</a></li>
                                <li><a href="<?= base_url('teacher/principal') ?>">Principaling Thingy</a></li>
                            </ul>
                        </li>
                        <li>
                            <a><i class="fa fa-group"></i> Admission Officer <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="<?= base_url('admission') ?>">Dashboard</a></li>
                                <li><a href="<?= base_url('admission/verification') ?>">Verification</a></li>
                                <li><a href="<?= base_url('admission/psychology') ?>">Psychology</a></li>
                            </ul>
                        </li>
                        <!-- <li>
                            <a><i class="fa fa-lightbulb-o"></i> Creative Marketing <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="<?= base_url('creative') ?>">Dashboard</a></li>
                                <li><a href="<?= base_url('mail/annotations') ?>">Banner</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </div>
            </div>
        <?php elseif (in_groups('teacher')) :  ?>
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                    <h3>See Others</h3>
                    <ul class="nav side-menu">
                        <li>
                            <a><i class="fa fa-graduation-cap"></i> Teacher <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="<?= base_url('teacher') ?>">Dashboard</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        <?php elseif (in_groups('executiveteacher')) :  ?>
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                    <h3>See Others</h3>
                    <ul class="nav side-menu">
                        <li>
                            <a><i class="fa fa-graduation-cap"></i> Teacher <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="<?= base_url('executiveteacher') ?>">Dashboard</a></li>
                                <li><a href="<?= base_url('executiveteacher/principal') ?>">Principaling Thingy</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        <?php elseif (in_groups('finance')) :  ?>
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                    <h3>See Others</h3>
                    <ul class="nav side-menu">
                        <li>
                            <a><i class="fa fa-dollar"></i> Finance <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="<?= base_url('finance') ?>">Dashboard</a></li>
                                <li><a href="<?= base_url('finance/registration') ?>">Registration</a></li>
                                <li><a href="<?= base_url('finance/invoice') ?>">Invoice</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        <?php elseif (in_groups('admission')) :  ?>
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                    <h3>See Others</h3>
                    <ul class="nav side-menu">
                        <li>
                            <a><i class="fa fa-group"></i> Admission Officer <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="<?= base_url('admission') ?>">Dashboard</a></li>
                                <li><a href="<?= base_url('admission/verification') ?>">Verification</a></li>
                                <li><a href="<?= base_url('admission/psychology') ?>">Psychology</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?= base_url('logout') ?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
    </div>
</div>