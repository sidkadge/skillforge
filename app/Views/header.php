<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="public/assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Work+Sans:300,400,500,700%7CZilla+Slab:300,400,500,700,700i%7CGloria+Hallelujah">
    <link rel="stylesheet" href="public/assets/css/bootstrap.css">
    <link rel="stylesheet" href="public/assets/css/fonts.css">
    <link rel="stylesheet" href="public/assets/css/style.css">
    <link rel="stylesheet" href="public/assets/css/home.css">
    <link rel="stylesheet" href="public/assets/css/about.css">
    <meta name="csrf-token" content="<?= csrf_hash() ?>">

    <style>
        .ie-panel {
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }
        html.ie-10 .ie-panel,
        html.lt-ie-10 .ie-panel {
            display: block;
        }
        .rd-navbar-nav {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .rd-nav-item {
            position: relative;
            display: inline-block;
        }
        .rd-nav-link {
            text-decoration: none;
            padding: 10px;
            display: block;
        }
        .rd-dropdown-menu {
            display: none;
            position: absolute;
            background-color: #fff;
            min-width: 160px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }
        .rd-dropdown-item {
            list-style-type: none;
        }
        .rd-dropdown-link {
            text-decoration: none;
            padding: 10px;
            display: block;
            color: #000;
        }
        .rd-dropdown-item:hover .rd-dropdown-link {
            background-color: #ddd;
        }
        .rd-dropdown:hover .rd-dropdown-menu {
            display: block;
        }
    </style>
</head>
<body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
        <div class="preloader-logo"><a class="brand" href="index.html"><img class="brand-logo-dark" src="public/assets/images/SkillForge.jpg" alt="" width="245" height="50" /><img class="brand-logo-light" src="images/logo-inverse-245x50.png" alt="" width="245" height="50" /></a></div>
        <div class="preloader-body">
            <div class="cssload-container">
                <div class="cssload-speeding-wheel"></div>
            </div>
        </div>
    </div>
    <div class="page">
        <!-- Page Header-->
        <header class="page-header">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!-- RD Navbar Toggle-->
                                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                <!-- RD Navbar Brand-->
                                <div class="rd-navbar-brand"><a class="brand" href="index.html"><img class="brand-logo-dark" src="public/assets/images/SkillForge.jpg" alt="" width="245" height="50" /><img class="brand-logo-light" src="images/logo-inverse-245x50.png" alt="" width="245" height="50" /></a></div>
                            </div>
                            <div class="rd-navbar-nav-wrap">
                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="<?php echo base_url('/') ?>">Home</a></li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="<?php echo base_url('about') ?>">About</a></li>
                                    <li class="rd-nav-item rd-dropdown">
                                        <a class="rd-nav-link" href="<?php echo base_url('#') ?>">Our Courses</a>
                                        <ul class="rd-dropdown-menu">
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="<?php echo base_url('abroadstudent') ?>">Abroad Student</a></li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="<?php echo base_url('schoolstudent') ?>">School Student</a></li>
                                        </ul>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="<?php echo base_url('contact_us') ?>">Contacts</a></li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="<?php echo base_url('career') ?>">Career</a></li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="<?php echo base_url('Selectcourse') ?>">Register</a></li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="<?php echo base_url('cart_view') ?>">Cart (<span id="cart-count">0</span>)</a></li>
                                    
                                    <!-- <li class="rd-nav-item"><a class="rd-nav-link" href="<?php echo base_url('login') ?>">Login</a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.rd-dropdown').hover(function() {
                    $(this).find('.rd-dropdown-menu').stop(true, true).slideDown(200);
                }, function() {
                    $(this).find('.rd-dropdown-menu').stop(true, true).slideUp(200);
                });
            });

            function updateCartCount() {
                let cartCount = document.getElementById('cart-count');
                let cart = JSON.parse(localStorage.getItem('cart')) || [];
                cartCount.textContent = cart.length;
            }

            function addToCart(course, fee) {
                let cart = JSON.parse(localStorage.getItem('cart')) || [];
                cart.push({ course, fee });
                localStorage.setItem('cart', JSON.stringify(cart));
                alert('Item added to cart');
                updateCartCount();
            }

            // Load cart items when the page loads
            window.onload = function() {
                updateCartCount();
            };
        </script>
    </div>
</body>
</html>
