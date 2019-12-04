<?php
include "classRectangle.php";

$width  = 10;
$height = 20;
$rectangle = new Rectangle($width, $height);

echo($rectangle->display()."<br>");
echo($rectangle->getArea()."<br>");
echo($rectangle->getPerimeter());