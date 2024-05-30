<!DOCTYPE html>
<html lang="en">

<head>
    <title>SkillForge</title>
   
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="CodedThemes">
      <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
      <meta name="author" content="CodedThemes">
      <link rel="icon" href="<?=base_url(); ?>public/dashborads/images/favicon.ico" type="image/x-icon">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>public/dashborads/css/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>public/dashborads/icon/themify-icons/themify-icons.css">
      <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>public/dashborads/icon/icofont/css/icofont.css">
      <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>public/dashborads/css/style.css">
      <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>public/dashborads/css/jquery.mCustomScrollbar.css">
      <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <style>
        /* Container for the toast notifications */
        #toast-container {
            position: fixed;
            top: 1em;
            right: 1em;
            z-index: 9999;
        }

        /* General style for each toast */
        .toast {
            padding: 15px;
            margin-bottom: 1em;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            opacity: 0.9;
            transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
        }

        /* Style for success toast */
        .toast-success {
            background-color: #4caf50;
            color: #fff;
        }

        /* Style for error toast */
        .toast-error {
            background-color: #f44336;
            color: #fff;
        }

        /* Hover effect for toast */
        .toast:hover {
            opacity: 1;
            transform: scale(1.05);
        }

        /* Style for the message inside the toast */
        .toast-message {
            font-size: 1em;
        }
    </style>
  </head>

  <body>
  <?php if (session()->has('success')): ?>
    <div id="toast-container" class="toast-top-right">
        <div class="toast toast-success" aria-live="polite">
            <div class="toast-message">
                <?= session('success') ?>
            </div>
        </div>
    </div>
<?php endif ?>

<?php if (session()->has('error')): ?>
    <div id="toast-container" class="toast-top-right">
        <div class="toast toast-error" aria-live="assertive">
            <div class="toast-message">
                <?= session('error') ?>
            </div>
        </div>
    </div>
<?php endif ?>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">

                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                       
                        <a href="index.html">
                            <span>SkillForge</span>
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a>
                                </div>
                            </li>

                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                          
                            <li class="user-profile header-notification">
                                <a href="#!">
                                    <img src="<?=base_url(); ?>public/dashborads/images/avatar-4.jpg" class="img-radius"
                                        alt="User-Profile-Image">
                                    <span>Admin</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                   
                                    <li>
                                        <a href="<?=base_url(); ?>logout">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">

                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Dashboard</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="<?php echo base_url() ?>Admindasboard">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>

                            </ul>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms"></div>
                           
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                        <span class="pcoded-mtext"
                                            data-i18n="nav.basic-components.main">Masters</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="<?=base_url(); ?>add_abroadclass">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Add Abroad Class</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="<?=base_url(); ?>abroadclasslist">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Abroad Class List</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="<?=base_url(); ?>add_schoolstudentclass">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Add School Student Class</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="<?=base_url(); ?>schoolclasslist">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">School Student Class List</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="<?=base_url(); ?>addfacultyskills">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Add Facukty Skills</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="<?=base_url(); ?>facultyskilllist">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Facukty Skills List</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>





                                    </ul>
                                </li>


                            </ul>
                            <!-- <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="<?=base_url(); ?>calendar">
                                        <span class="pcoded-micon"><i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>
                                        <span class="pcoded-mtext"
                                            data-i18n="nav.basic-components.alert">Faculty List</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>

                            </ul> -->
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                        <span class="pcoded-mtext"
                                            data-i18n="nav.basic-components.main">Students</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="<?=base_url(); ?>studentprofile">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Students Profile</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="<?=base_url(); ?>">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Abroad Student List</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="<?=base_url(); ?>">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">School Student List </span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="<?=base_url(); ?>studentuplodedmedia">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Student Uploded Media</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>





                                    </ul>
                                </li>


                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                        <span class="pcoded-mtext"
                                            data-i18n="nav.basic-components.main">Faculty</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="<?=base_url(); ?>facultyprofile">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Faculty Profile</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="<?=base_url(); ?>facultylist">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Faculty List</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="<?=base_url(); ?>facultyuplodedmedia">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Faculty Uploded Media</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="<?=base_url(); ?>newfacultyapplications">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">New Faculty Applications</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                      
                                       





                                    </ul>
                                </li>


                            </ul>
                        </div>
                    </nav>