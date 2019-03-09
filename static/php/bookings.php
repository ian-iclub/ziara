<?php

$book = 0;

// $page = file_get_contents('slider.html');
$booking_page_alone = file_get_contents('booking-slider-replacement.html');

ob_start();
@include("book.php");
$booking_page_alone .= ob_get_clean();

@include("booking-slider-replacement.php");

?>