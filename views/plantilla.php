<!DOCTYPE html>
<html lang="es" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="views/img/logo2.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>New version of life</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="views/css/linearicons.css">
    <link rel="stylesheet" href="views/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="views/css/magnific-popup.css">
    <link rel="stylesheet" href="views/css/animate.min.css">
    <link rel="stylesheet" href="views/css/owl.carousel.css">
    <link rel="stylesheet" href="views/css/main.css">

    <!-- fontamesowe -->
    <script src="https://kit.fontawesome.com/76e0757c77.js" crossorigin="anonymous"></script>

    <!-- sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>

<body>
    <!-- start banner Area -->

    <!-- Start Header Area -->
    <?php include 'pages/modules/header.php' ?>
    <!-- End Header Area -->

    <?php

    if (isset($_GET['pagina'])) {

        if ($_GET["pagina"] == "index") {

            include "pages/home.php";
        } else {
            include "pages/error-404.php";
        }
    } else {

        include "pages/home.php";
    }


    ?>

    <!-- start footer Area -->
    <?php include 'pages/modules/footer.php' ?>
    <!-- End footer Area -->

    <script src="views/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script src="views/js/jquery.ajaxchimp.min.js"></script>
    <script src="views/js/jquery.magnific-popup.min.js"></script>
    <script src="views/js/owl.carousel.min.js"></script>
    <script src="views/js/jquery.sticky.js"></script>
    <script src="views/js/slick.js"></script>
    <script src="views/js/jquery.counterup.min.js"></script>
    <script src="views/js/waypoints.min.js"></script>
    <script src="views/js/main.js"></script>
    <script src="views/js/custom.js"></script>
</body>

</html>