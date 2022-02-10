<!DOCTYPE html>

<html class="no-js">
    <head>
        <meta charset="utf-8">

        <title>PVtechgear Admin</title>

        <meta name="description" content="uAdmin is a Professional, Responsive and Flat Admin Template created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1">
        <script src="https://kit.fontawesome.com/f40451c406.js" crossorigin="anonymous"></script>
        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href=".<?php echo BASE_URL?>/public/admin/img/template/adminlogo.png">
        <link rel="apple-touch-icon" href="<?php echo BASE_URL?>/public/admin/img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="<?php echo BASE_URL?>/public/admin/img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="<?php echo BASE_URL?>/public/admin/img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="<?php echo BASE_URL?>/public/admin/img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="<?php echo BASE_URL?>/public/admin/img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="<?php echo BASE_URL?>/public/admin/img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="<?php echo BASE_URL?>/public/admin/img/icon152.png" sizes="152x152">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="<?php echo BASE_URL?>/public/admin/css/bootstrap.css">

        <!-- Related styles of various javascript plugins -->
        <link rel="stylesheet" href="<?php echo BASE_URL?>/public/admin/css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="<?php echo BASE_URL?>/public/admin/css/main.css">

        <!-- Load a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="<?php echo BASE_URL?>/public/admin/css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
        <script src="<?php echo BASE_URL?>/public/admin/js/vendor/modernizr-respond.min.js"></script>
    </head>

    <!-- Add the class .fixed to <body> for a fixed layout on large resolutions (min: 1200px) -->
    <!-- <body class="fixed"> -->
    <body>
        <!-- Page Container -->
        <div id="page-container">
            <!-- Header -->
            <!-- Add the class .navbar-fixed-top or .navbar-fixed-bottom for a fixed header on top or bottom respectively -->
            <!-- <header class="navbar navbar-inverse navbar-fixed-top"> -->
            <!-- <header class="navbar navbar-inverse navbar-fixed-bottom"> -->
            <header class="navbar navbar-inverse">
                <!-- Mobile Navigation, Shows up  on smaller screens -->
                <ul class="navbar-nav-custom pull-right hidden-md hidden-lg">
                    <li class="divider-vertical"></li>
                    <li>
                        <!-- It is set to open and close the main navigation on smaller screens. The class .navbar-main-collapse was added to aside#page-sidebar -->
                        <a href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-main-collapse">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                </ul>
                <!-- END Mobile Navigation -->

                <!-- Logo -->
                <a href="<?php echo BASE_URL ?>/login/dashboard" class="navbar-brand"><img src="<?php echo BASE_URL?>/public/admin/img/template/logo.png" alt="logo"></a>

                <!-- Loading Indicator, Used for demostrating how loading of widgets could happen, check main.js - uiDemo() -->
                <div id="loading" class="pull-left"><i class="fa fa-certificate fa-spin"></i></div>
            </header>
            <!-- END Header -->
