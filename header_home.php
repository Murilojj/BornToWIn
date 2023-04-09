<?php
require 'config/pdo.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gabriel Júnior || Portifólio</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <!-- CSS 
    ============================================ -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/vendor/aos.css">
    <link rel="stylesheet" href="assets/css/plugins/feature.css">
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<!-- home-classic -->

<body class="template-color-1 home-classic spybody white-version" data-spy="scroll" data-target=".navbar-example2" data-offset="150">

    <!-- Start Main Page Wrapper -->
    <main class="main-page-wrapper spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="150">

        <!-- Start Header -->
        <header class="rn-header haeder-default black-logo-version header--fixed header--sticky">
            <div class="header-wrapper m--0 rn-popup-mobile-menu row align-items-center">
                <!-- Start Header Left -->
                <div class="col-lg-2 col-6">
                    <div class="header-left">
                        <div class="logo">
                            <a href="<?= ROOT_URL ?>">
                                <img src="assets/images/logo/logos-circle.png" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Header Left -->
                <!-- Start Header Center -->
                <div class="col-lg-10 col-6">
                    <div class="header-center">
                        <nav id="sideNav" class="mainmenu-nav navbar-example2">
                            <!-- Start Mainmanu Nav -->
                            <ul class="primary-menu nav nav-pills">
                                <li class="nav-item"><a class="nav-link  active" href="<?= ROOT_URL ?>">Início</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?= ROOT_URL ?>/about">Sobre</a></li>
                                <li class="nav-item"><a class="nav-link " href="<?= ROOT_URL ?>/portfolio">Projectos</a></li>
                                <li class="nav-item"><a class="nav-link " href="<?= ROOT_URL ?>/contact">Contacto</a></li>
                            </ul>
                            <!-- End Mainmanu Nav -->
                        </nav>
                        <!-- Start Header Right  -->
                        <div class="header-right">
                            <a class="rn-btn no-shadow btn-theme"  href="tel:+917428648930"><span>Ligue já</span></a>
                            <i id="menuBtn" class="feather-menu humberger-menu d-block d-xl-none"></i>
                            <div class="close-menu d-block">
                                <span class="closeTrigger">
                                    <i data-feather="x"></i>
                                </span>
                            </div>
                        </div>
                        <!-- End Header Right  -->
                    </div>
                </div>
                <!-- End Header Center -->
            </div>
        </header>
        <!-- End Header Area -->

        <!-- Start Popup Mobile Menu  -->
        <div class="popup-mobile-menu">
            <div class="inner">
                <div class="menu-top">
                    <div class="menu-header">
                        <a class="logo" href="index.html">
                            <img src="assets/images/logo/logos-circle.png" alt="Personal Portfolio">
                        </a>
                        <div class="close-button">
                            <button class="close-menu-activation close"><i data-feather="x"></i></button>
                        </div>
                    </div>
                    <p class="discription">Inbio is a personal portfolio template. You can customize all.</p>
                </div>
                <div class="content">
                    <ul class="primary-menu nav nav-pills">
                    <li class="nav-item"><a class="nav-link  active" href="<?= ROOT_URL ?>">Início</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?= ROOT_URL ?>/about">Sobre</a></li>
                                <li class="nav-item"><a class="nav-link " href="<?= ROOT_URL ?>/portfolio">Projectos</a></li>
                                <li class="nav-item"><a class="nav-link " href="<?= ROOT_URL ?>/contact">Contacto</a></li>
                    </ul>
                    <!-- social sharea area -->
                    <div class="social-share-style-1 mt--40">
                        <span class="title">Conecte-se comigo:</span>
                        <ul class="social-share d-flex liststyle">
                            <li class="facebook"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                        </path>
                                    </svg></a>
                            </li>
                            <li class="instagram"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                    </svg></a>
                            </li>
                            <li class="linkedin"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin">
                                        <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                        </path>
                                        <rect x="2" y="9" width="4" height="12"></rect>
                                        <circle cx="4" cy="4" r="2"></circle>
                                    </svg></a>
                            </li>
                        </ul>
                    </div>
                    <!-- end -->
                </div>
            </div>
        </div>
        <!-- End Popup Mobile Menu  -->