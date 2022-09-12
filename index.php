<!DOCTYPE html>
<html>
<?php
$response = file_get_contents("https://api.themoviedb.org/3/movie/popular?api_key=d0f5f2e135336200362af8a1a73acb17");
$json = str_replace('},

]', "}

]", $response);
$data = json_decode($json, TRUE);
?>
<head>
    <!-- Site made with Baraka Mwang'amba Website Builder v5.6.11, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Baraka Mwang'amba v5.6.11, mobirise.com">
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:image:src" content="/assets/images/index-meta.jpeg">
    <meta property="og:image" content="/assets/images/index-meta.jpeg">
    <meta name="twitter:title" content="Home">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="/assets/images/mbr-121x121.png" type="image/x-icon">
    <meta name="description" content="">


    <title>Home</title>
    <link rel="stylesheet" href="/assets/web//assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="/assets/web//assets/mobirise-icons-bold/mobirise-icons-bold.css">
    <link rel="stylesheet" href="/assets/web//assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="/assets/tether/tether.min.css">
    <link rel="stylesheet" href="/assets/dropdown/css/style.css">
    <link rel="stylesheet" href="/assets/socicon/css/styles.css">
    <link rel="stylesheet" href="/assets/theme/css/style.css">
    <link rel="preload"
          href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600,700,800,900,300i,400i,500i,600i,700i,800i,900i&display=swap"
          as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600,700,800,900,300i,400i,500i,600i,700i,800i,900i&display=swap">
    </noscript>
    <link rel="preload" as="style" href="/assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="/assets/mobirise/css/mbr-additional.css" type="text/css">

</head>
<body>

<section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-0">

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.html">
                         <img src="/assets/images/mbr-121x121.png" alt="php-movie-api" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4"
                                                     href="https://mobirise.com">Php Movie Api App</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="https://mobirise.com">Liked Movies</a>
                </li>
            </ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4"
                                                           href="https://mobirise.com"><span
                            class="mobi-mbri mobi-mbri-edit-2 mbr-iconfont mbr-iconfont-btn"></span>

                    Login</a> <a class="btn btn-sm btn-secondary display-4" href="https://mobirise.com"><span
                            class="mbrib-lock mbr-iconfont mbr-iconfont-btn"></span>

                    Logout</a></div>
        </div>
    </nav>

</section>

<section class="header15 cid-tgVLSDZPnM mbr-fullscreen mbr-parallax-background" id="header15-3">


    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(7, 59, 76);"></div>

    <div class="container align-right">
        <div class="row">
            <div class="mbr-white col-lg-8 col-md-7 content-container">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                    Movies&nbsp;</h1>
                <p class="mbr-text pb-3 mbr-fonts-style display-5">
                    Check Them Out <a href="index.html#features17-e" class="text-primary">Here</a>.
                </p>
            </div>
            <div class="col-lg-4 col-md-5">
                <div class="form-container">
                    <div class="media-container-column" data-form-type="formoid">
                        <!---Formbuilder Form--->
                        <form action="https://mobirise.eu/" method="POST" class="mbr-form form-with-styler"
                              data-form-title="Baraka Mwang'amba Form"><input type="hidden" name="email"
                                                                              data-form-email="true"
                                                                              value="SbTMHBJ4LbIZLkJjJ2UBM9dReZHkwhK+itZQvHrCohZest9ehu5rvk2Z5hmye1PlpmAUxJIPQqe2l1LUDkNIH/CfcPfMNbCasLQ+yt8r0CN6rwX8VI6mhvUUAp2zh6Lh">
                            <div class="row">
                                <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for
                                    filling out the form!
                                </div>
                                <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                                </div>
                            </div>
                            <div class="dragArea row">

                                <div class="col-md-12 form-group " data-for="email">
                                    <input type="email" name="email" placeholder="Email" data-form-field="Email"
                                           required="required" class="form-control px-3 display-7"
                                           id="email-header15-3">
                                </div>
                                <div data-for="phone" class="col-md-12 form-group ">
                                    <input type="tel" name="phone" placeholder="Phone" data-form-field="Phone"
                                           class="form-control px-3 display-7" id="phone-header15-3">
                                </div>

                                <div class="col-md-12 input-group-btn">
                                    <button type="submit" class="btn btn-form btn-primary display-4">Login</button>
                                </div>
                            </div>
                        </form><!---Formbuilder Form--->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>

</section>

<section class="mbr-section form3 cid-tgVS9XfLqu" id="form3-l">

    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">

                <h3 class="mbr-section-subtitle align-center pb-5 mbr-light mbr-fonts-style display-5"><strong>
                        Search Movies</strong></h3>
            </div>
        </div>

        <div class="row py-2 justify-content-center">
            <div class="col-12 col-lg-6  col-md-8 ">
                <form class="mbr-form form-with-styler">
                    <div class="form-group col" data-for="email">
                        <input type="email" name="query" placeholder="Search"
                               class="form-control display-7" id="query-form">
                    </div>
                    <div class="col-auto input-group-btn">
                        <button type="submit" class="btn btn-white display-4">Search</button>
                    </div>
                </form><!---Formbuilder Form--->
            </div>
        </div>
    </div>

</section>

<section class="features17 cid-tgVQUHuf3e mbr-parallax-background" id="features17-e">

    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(7, 59, 76);"></div>

    <div class="container-fluid">
        <div class="row" style="">
            <?php

            $results = $data["results"];
            foreach ($results as $value) {
                ?>
                <div class="card p-3 col-lg-3 col-md-3 col-xl-2s">
                    <div class="card-wrapper">
                        <div class="card-img">
                            <img src="https://image.tmdb.org/t/p/w500<?php echo $value["poster_path"]; ?>" alt="Poster">
                        </div>
                        <div class="card-box text-small">
                            <!--                            <h4 class="card-title pb-3 mbr-fonts-style display-7">-->
                            <!--                                --><?php //echo $value["original_title"] ?>
                            <!--                            </h4>-->
                            <!-- <p class="mbr-text mbr-fonts-style display-7">
                                Release Date: <?php /*echo $value["release_date"] */ ?>
                            </p>
                            <p class="mbr-text mbr-fonts-style display-7">
                                Language: <?php /*echo $value["original_language"] */ ?>
                            </p>
                            <p class="mbr-text mbr-fonts-style display-7">
                                Rating:<?php /*echo $value["vote_average"]; */ ?>
                            </p>-->
                            <div class="mbr-section-btn text-center">
                                <a href="" class="btn btn-primary btn-sm display-4"><span
                                            class="mobi-mbri mobi-mbri-like mbr-iconfont mbr-iconfont-btn"></span></a>
                                <a href="" class="btn btn-sm btn-warning-outline display-4"><span
                                            class="mobi-mbri mobi-mbri-preview mbr-iconfont mbr-iconfont-btn"></span></a>
                            </div>
                        </div>

                    </div>
                </div>
                <?
            }
            ?>


        </div>
    </div>
</section>

<section once="footers" class="cid-tgVQA500SQ mbr-reveal" id="footer7-d">


    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">


                    <li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="#" target="_blank">About us</a>
                    </li>
                    <li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="#" target="_blank">Services</a>
                    </li>
                </ul>
            </div>

            <div class="row row-copyright">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                    © Copyright 2025 Baraka Mwang'amba - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>
<section class="display-7"
         style="padding: 0;align-items: center;justify-content: center;flex-wrap: wrap;    align-content: center;display: flex;position: relative;height: 4rem;">
    <a href="https://mobiri.se/107643" style="flex: 1 1;height: 4rem;position: absolute;width: 100%;z-index: 1;"><img
                alt="" style="height: 4rem;"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="></a>
    <p style="margin: 0;text-align: center;" class="display-7">Created with Baraka Mwang'amba &#8204;</p><a
            style="z-index:1" href="https://mobirise.com/website-maker.html">Free Web Site Maker</a></section>
<script src="/assets/popper/popper.min.js"></script>
<script src="/assets/web//assets/jquery/jquery.min.js"></script>
<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="/assets/tether/tether.min.js"></script>
<script src="/assets/smoothscroll/smooth-scroll.js"></script>
<script src="/assets/dropdown/js/nav-dropdown.js"></script>
<script src="/assets/dropdown/js/navbar-dropdown.js"></script>
<script src="/assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="/assets/parallax/jarallax.min.js"></script>
<script src="/assets/theme/js/script.js"></script>
<script src="/assets/formoid/formoid.min.js"></script>


</body>
</html>