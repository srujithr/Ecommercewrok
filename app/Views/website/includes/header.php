 <!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>Home page</title>
    <meta content="Templines" name="author">
    <meta content="Viasun" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


    <link rel="shortcut icon" href="<?= base_url('public/website/images/favicon.png')?>" type="image/x-icon">
    <link rel="stylesheet"  href="<?= base_url('public/website/css/libs.min.css')?>">
    <link rel="stylesheet"  href="<?= base_url('public/website/css/main.css')?>">

    <style>
        /* Add styles for profile icon */
        .header-icon {
            margin-right: 10px;
            /* Adjust the margin as needed */
            margin-left: 12px;
        }
    </style>
</head>
</head>

<body class="page-home">

    <!-- Loader-->
    <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
    <!-- Loader end-->


    <div class="page-wrapper">
        <header class="page-header">
            <div class="page-header__inner">
                <div class="page-header__logo"><a class="logo" href="index.html"><img src="assets/img/logo.png" alt="Viasun"></a></div>
                <div class="page-header__menu">
                    <nav class="page-nav" data-uk-navbar="">
                        <nav class="page-nav" data-uk-navbar="">
                            <ul class="uk-navbar-nav">
                                <li><a href="<?=base_url('/')?>">Home</a></li>
                                <li><a href="<?= base_url('/shopby')?>">Shop By Category</a>
                                <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li><a href="<?= base_url('/fashion')?>">Fashion</a></li>
                                            <li><a href="<?= base_url('/Jewellery')?>">Jewallery</a></li>
                                            <li><a href="<?= base_url('/Bags')?>">Bags</a></li>
                                            <li><a href="<?= base_url('WesternWear')?>">Westernwear</a></li>
                                            <li> <a href="<?= base_url('/watches')?>">Watches</a></li>
                                            <li><a href="<?= base_url('/bottomwear')?>">Bottom Wear</a></li>
                                            <li><a href="<?= base_url('/Furnishings')?>">Home Furnishings</a></li>
                                            <li><a href="<?= base_url('/Duppatta')?>">Dupatta</a></li>
                                            <li><a href="<?= base_url('/Blouse')?>">Blouse</a></li>
                                            <li><a href="<?= base_url('/Salwar')?>">Salwar</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="<?= base_url('/About')?>">About</a></li>
                                <li><a href="<?= base_url('/collection')?>">Collections</a>
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li><a href="09_login.html">churidhar <br>(Staticmed)</a></li>
                                            <li><a href="10_reset-password.html">churidhar <br>(Staticmed)</a></li>
                                            <li><a href="page-typography.html">Kurti <br>Running materials</a></li>
                                            <li><a href="09_login.html">Blouse</a></li>
                                            <li><a href="10_reset-password.html">Duppatta /</a></li>
                                            <li><a href="page-typography.html">Jewellery</a></li>
                                            <li><a href="page-typography.html">Bags</a></li>
                                            <li><a href="page-typography.html">Watches</a></li>
                                            <li><a href="page-typography.html">Footwear</a></li>
                                            <li><a href="page-typography.html">Furnishings</a></li>
                                            <li><a href="page-typography.html">Western Wear</a></li>
                                            <li><a href="page-typography.html">Night Wear</a></li>
                                        </ul>
                                    </div>
                                </li>
                               
                                <li><a href="<?= base_url('/contact')?>">Contact</a></li>

                                <li><a href="<?= base_url('/login')?>">Login</a>
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li><a href="09_login.html">Register</a></li>
                                            
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            
                        </nav>
                    </nav>
                </div>
                <div class="page-header__btn"> <a class="menu-btn" href="#offcanvas" data-uk-toggle> <img src="assets/img/icon_menu-btn.svg" alt="menu-btn"></a></div>
            </div>
        </header>