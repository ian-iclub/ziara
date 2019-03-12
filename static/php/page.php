<!DOCTYPE HTML>
<html>
<head>

<?php
@include_once("header.php");
?>
</head>
<body>

    <div class="joc-loader"></div>

    <div id="page">
        <?php
        @include("navbar.php");

        echo $page;
        ?>
    </div>

    <?php
    echo $others;

    @include_once("footer.php");
    ?>
    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
    </div>

    <!-- jQuery -->
    <script src="../js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="../js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="../js/jquery.waypoints.min.js"></script>
    <!-- Flexslider -->
    <script src="../js/jquery.flexslider-min.js"></script>
    <!-- Owl carousel -->
    <script src="../js/owl.carousel.min.js"></script>
    <!-- Magnific Popup -->
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/magnific-popup-options.js"></script>
    <!-- Date Picker -->
    <script src="../js/bootstrap-datepicker.js"></script>
    <!-- Stellar Parallax -->
    <script src="../js/jquery.stellar.min.js"></script>
    <!-- Main -->
    <script src="../js/main.js"></script>

</body>
