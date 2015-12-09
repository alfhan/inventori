<?php 
    use App\MyExtention;
    $profileWeb = MyExtention::profileWeb();
?>
<!--Header-->
<header class="header">
    <a href="<?=URL::to('administrator');?>" class="logo">
        <!-- Add the class icon to your logo image or logo icon to add the margining -->
        <?=$profileWeb[0]->nama;?>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <a href="<?=URL::to('/')?>" target="_blank" class="btn btn-xs btn-danger" style="top:14px;position:relative;">
            <i class="fa fa-external-link"></i>
            View Site
        </a>
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i>
                        <span>Nama Pengguna <i class="caret"></i></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header bg-light-blue">
                            <img src="<?=URL::to('/gambar/foto.jpg')?>" class="img-circle" alt="User Image" />
                            <p>Nama Pengguna</p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="<?=URL::to('usermanagement/profile');?>" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?=URL::to('auth/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>