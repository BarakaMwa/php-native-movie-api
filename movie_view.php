<?php

$movie_id =0;
$response = null;
$page_category = "";
$language = "en-US";
const KEY = "d0f5f2e135336200362af8a1a73acb17";
const API_KEY = "?api_key=" . KEY;
const HTTPS_API_THEMOVIEDB_ORG_3_MOVIE = "https://api.themoviedb.org/3/movie/";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $language = "&language=" . $language;

    if (isset($_GET["language"]) && !empty($_GET["language"])) {
        $language = $_GET["language"];
        $language = "&language=" . $language;
    }

    if (isset($_GET["movie_id"]) && !empty($_GET["movie_id"])) {
        $movie_id = $_GET["movie_id"];
    }
    $url = HTTPS_API_THEMOVIEDB_ORG_3_MOVIE. $movie_id .API_KEY.$language;

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

