<?php
$response = file_get_contents("https://api.themoviedb.org/3/movie/popular?api_key=d0f5f2e135336200362af8a1a73acb17");
$json = str_replace('},

]', "}

]", $response);
$data = json_decode($json, TRUE);
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Site made with FilmPedia Website Builder v4.6.6, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="FilmPedia v4.6.6, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/mbr-122x122.png" type="image/x-icon">
    <meta name="description" content="">

    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

    <link rel="stylesheet" href="assets/theme/css/sidebar-style.css">

</head>
<body>

<section class="wrapper">
    <!-- Sidebar Holder -->
    <?php include ("sidebar.php");?>

    <section class="content">
        <section class="menu cid-theWZsoV5t" once="menu" id="menu2-m">
           <?php include ("navbar.php");?>
        </section>

        <section class="header3 cid-thfff8bFwG mbr-fullscreen mbr-parallax-background" id="header3-t">


            <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(0, 0, 0);">
            </div>

            <div class="container">
                <div class="media-container-row">
                    <div class="mbr-figure" style="width: 45%;">
                        <img src="assets/images/mbr-121x121.png" alt="FilmPedia" title="">
                    </div>

                    <div class="media-content">
                        <h1 class="mbr-section-title mbr-white pb-3 mbr-fonts-style display-1">
                            <strong>FilmMedia Pedia</strong>
                        </h1>

                        <div class="mbr-section-text mbr-white pb-3 ">
                            <p class="mbr-text mbr-fonts-style display-5">

                            </p>
                        </div>
                        <div class="mbr-section-btn"><a class="btn btn-md btn-primary display-4"
                                                        href="https://mobirise.com">Tv
                                Shows</a>
                            <a class="btn btn-md btn-white-outline display-4" href="https://mobirise.com">Movies</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="mbr-section content5 cid-thfgDN1QB1" id="content5-w">


            <div class="container">
                <div class="media-container-row">
                    <div class="title col-12 col-md-8">
                        <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">
                            Popular Movies</h2>


                    </div>
                </div>
            </div>
        </section>

        <section class="features8 cid-thf7YdOhH6 mbr-parallax-background" id="features8-r">


            <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(35, 35, 35);">
            </div>

            <div class="container-fluid">
                <div class="row">
                    <?php

                    $results = $data["results"];
                    foreach ($results as $value) {
                        ?>
                        <div class="card col-md-3 col-lg-2 col-xl-2  col-sm-4 col-xs-6 align-center">
                            <div class="card-img">
                                <img  class="img-thumbnail rounded" src="https://image.tmdb.org/t/p/w500<?php echo $value["poster_path"]; ?>"
                                     alt="Poster">
                            </div>
                            <div class="card-box align-center">
                                <h4 class="card-title mbr-fonts-style display-7">
                                    <?php echo $value["original_title"] ?>
                                </h4>
                                <div class="mbr-section-btn align-center text-sm-center text-center btn-bottom">
                                    <a href="movie_view.php?movie_id=<?php echo $value["id"]?>" class="btn btn-block btn-secondary text-black display-4 text-sm-center">View</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                </div>
            </div>
        </section>

        <section class="mbr-section content5 cid-thfhgXjwZg" id="content5-x">


            <div class="container">
                <div class="media-container-row">
                    <div class="title col-12 col-md-8">
                        <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">
                            Popular TvShows</h2>


                    </div>
                </div>
            </div>
        </section>
        <?php
        $response = file_get_contents("https://api.themoviedb.org/3/tv/popular?api_key=d0f5f2e135336200362af8a1a73acb17");
        $json = str_replace('},

]', "}

]", $response);
        $data = json_decode($json, TRUE);
        ?>
        <section class="features8 cid-thfhmI1tH0 mbr-parallax-background" id="features8-y">


            <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(35, 35, 35);">
            </div>

            <div class="container-fluid">
                <div class="row">
                    <?php

                    $results = $data["results"];
                    foreach ($results as $value) {
                        ?>
                        <div class="card col-md-3 col-lg-2 col-xl-2  col-sm-4 col-xs-6 align-center">
                            <div class="card-img">
                                <img class="img-thumbnail rounded" src="https://image.tmdb.org/t/p/w500<?php echo $value["poster_path"]; ?>"
                                     alt="Poster">
                            </div>
                            <div class="card-box align-center">
                                <h4 class="card-title mbr-fonts-style display-7">
                                    <?php echo $value["original_name"] ?>
                                </h4>
                                <div class="mbr-section-btn align-center text-sm-center text-center btn-bottom">
                                    <a href="" class="btn btn-secondary btn-xs display-4 text-sm-center">View</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                </div>
            </div>
        </section>

        <section once="" class="cid-thfg01DqU1" id="footer6-u">


            <div class="container">
                <div class="media-container-row align-center mbr-white">
                    <div class="col-12">
                        <p class="mbr-text mb-0 mbr-fonts-style display-7">
                            © Copyright 2022 FilmPedia - All Rights Reserved
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </section>


</section>


<script src="assets/web/assets/jquery/jquery.min.js"></script>
<script src="assets/tether/tether.min.js"></script>
<script src="assets/popper/popper.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/dropdown/js/script.min.js"></script>
<script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="assets/parallax/jarallax.min.js"></script>
<!--<script src="assets/smoothscroll/smooth-scroll.js"></script>-->
<!--<script src="assets/theme/js/script.js"></script>-->

<script src="assets/theme/js/sidebar-script.js"></script>


<div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
<input name="animation" type="hidden">
</body>
</html>