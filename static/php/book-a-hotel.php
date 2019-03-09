<?php

$book = 1;
$page = file_get_contents('slider.html');

ob_start();
@include("book.php");
$page .= ob_get_clean();

@include("page.php");

?>