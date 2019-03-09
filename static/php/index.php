<!-- Slider -->

<?php

$page = file_get_contents('slider.html');

$booking_page_alone = file_get_contents('booking-slider-replacement.html');

$others = file_get_contents('others.html');

@include("page.php");

?>
