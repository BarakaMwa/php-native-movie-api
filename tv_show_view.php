<?php
$tv_show_id = 0;
$response = null;
$page_category = "";
$language = "en-US";
const KEY = "d0f5f2e135336200362af8a1a73acb17";
const API_KEY = "?api_key=" . KEY;
const HTTPS_API_THEMOVIEDB_ORG_3_MOVIE = "https://api.themoviedb.org/3/tv/";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $language = "&language=" . $language;

    if (isset($_GET["language"]) && !empty($_GET["language"])) {
        $language = $_GET["language"];
        $language = "&language=" . $language;
    }

    if (isset($_GET["tv_show_id"]) && !empty($_GET["tv_show_id"])) {
        $tv_show_id = $_GET["tv_show_id"];
    }
    $url = HTTPS_API_THEMOVIEDB_ORG_3_MOVIE . $tv_show_id . API_KEY . $language;

    $response = file_get_contents($url);
}
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
    <title>Movie List</title>
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
    <link rel="stylesheet" href="assets/theme/css/searchbar-style.css">
    <link rel="stylesheet" href="assets/uikit-2.27.5/css/uikit.min.css">

</head>
<body>

<section class="wrapper">
    <!-- Sidebar Holder -->
    <?php include("sidebar.php"); ?>

    <section class="content">
        <section class="menu cid-theWZsoV5t" once="menu" id="menu2-m">
            <?php include("navbar.php"); ?>
        </section>

        <section class="header3 cid-thuJpxCW3Z mbr-fullscreen mbr-parallax-background pt-sm-5" id="header3-1u"
                 data-jarallax-original-styles="null"
                 style="z-index: 0; position: relative; background-image: url('https://image.tmdb.org/t/p/original<?php echo $data["backdrop_path"] ?>'); background-attachment: scroll; background-size: auto;">

            <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);">
            </div>

            <div class="container mt-sm-5">
                <div class="media-container-row">
                    <div class="mbr-figure" style="width: 50%;">
                        <img src="https://image.tmdb.org/t/p/w500<?php echo $data["poster_path"] ?>"
                             class="img-thumbnail" alt="Poster">
                    </div>

                    <div class="media-content pt-4">
                        <h1 class="mbr-section-title mbr-white pb-3 mbr-fonts-style display-1 text-sm-left"><strong>
                                <?php echo $data["original_name"] ?>
                            </strong></h1>

                        <div class="mbr-section-text mbr-white pb-3 ">
                            <h6 class="text-white">Created By</h6>
                            <p class="mbr-text mbr-fonts-style display-5 text-white text-sm-left">
                                <b><?php
                                    $created_by = $data["created_by"];
                                    foreach ($created_by as $value) {
                                        echo $value["name"] . ", ";
                                    }
                                    ?></b>
                            </p>
                            <h6 class="text-white">Overview</h6>
                            <p class="mbr-text mbr-fonts-style display-5 text-white text-sm-left">
                                <b><?php echo $data["overview"] ?></b>
                            </p>
                            <h6 class="text-white">Release Date</h6>
                            <p class="mbr-text mbr-fonts-style display-5 text-white text-sm-left">
                                <b><?php echo $data["first_air_date"] ?></b>
                            </p>
                            <h6 class="text-white">Last Air Date</h6>
                            <p class="mbr-text mbr-fonts-style display-5 text-white text-sm-left">
                                <b><?php echo $data["last_air_date"] ?></b>
                            </p>
                            <h6 class="text-white">Genres</h6>
                            <p class="mbr-text mbr-fonts-style display-5 text-white text-sm-left">
                                <b><?php
                                    $genres = $data["genres"];
                                    foreach ($genres as $value) {
                                        echo $value["name"] . ", ";
                                    }
                                    ?></b>
                            </p>
                        </div>
                        <div class="mbr-section-btn text-sm-left">
                            <a class="btn btn-md btn-primary display-4"
                               href="https://mobirise.com">LIke</a>
                            <a class="btn btn-md btn-white-outline display-4" href="https://mobirise.com">Watch On</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="tabs1 cid-thAroZfwCO mbr-parallax-background pt-1" id="tabs1-1v"
                 data-jarallax-original-styles="null"
                 style="z-index: 0; position: relative; background-image: url('https://image.tmdb.org/t/p/original<?php echo $data["backdrop_path"] ?>'); background-attachment: scroll; background-size: auto;">

            <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);">
            </div>

            <div class="container pt-1">
                <h2 class="mbr-white align-left text-left pb-5 mbr-fonts-style mbr-bold display-2">
                    Seasons</h2>
                <div class="row">
                    <div class="col-lg-12 col-md-12 align-left">
                        <ul class="nav nav-tabs text-left" role="tablist">
                            <?php
                            $seasons = $data["seasons"];
                            $count = 0;
                            foreach ($seasons as $value) {
                                echo '<li class="nav-item">
                                <a class="nav-link mbr-fonts-style active show display-7" role="tab"
                                   data-toggle="tab"
                                   href="#season_' . $value["id"] . '" aria-selected="true">
                                    ' . $value["name"] . '</a>
                            </li>';
                                $count++;
                            }
                            ?>

                        </ul>
                        <div class="tab-content p-4">
                            <?php
                            $seasons = $data["seasons"];
                            $count = 0;
                            foreach ($seasons as $value) {
                                echo '
                            <div id="season_' . $value["id"] . '" class="tab-pane in active align-left" role="tabpanel">
                                <div class="media-container-row">
                    <div class="mbr-figure" style="width: 20%;">
                        <img src="https://image.tmdb.org/t/p/w500' . $value["poster_path"] . '"
                             class="img-thumbnail" alt="Poster">
                    </div>

                    <div class="media-content p-4">
                        <h6 class="mbr-section-title mbr-white pb-3 mbr-fonts-style text-sm-left"><strong>' . $value["name"] . '
                                           </strong></h6>
                        <div class="mbr-section-text mbr-white pb-3 ">
                            <p class="mbr-text mbr-fonts-style display-5 text-white text-sm-left">
                                <b>' . $value["overview"] . '</b>
                            </p>
                        </div>
                    </div>
                </div>
                            </div>';
                                $count++;
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
    </section>
</section>
<script src="assets/web/assets/jquery/jquery.min.js"></script>
<script src="assets/popper/popper.min.js"></script>
<script src="assets/tether/tether.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/smoothscroll/smooth-scroll.js"></script>
<script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
<script src="assets/parallax/jarallax.min.js"></script>
<script src="assets/dropdown/js/script.min.js"></script>
<script src="assets/theme/js/script.js"></script>

<script src="assets/theme/js/sidebar-script.js"></script>
<script src="assets/pagination/jquery.bootpag.min.js"></script>

<div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"></a></div>
<input name="animation" type="hidden">
</body>
</html>
