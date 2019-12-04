<?php
include "Fan.php";

$fan1 = new Fan();
$fan1->setSpeed($fan1->FAST);
$fan1->setRadius(10);
$fan1->setColor("Yellow");
$fan1->setOn(true);
echo($fan1->toString());

$fan2 = new Fan();
$fan1->setSpeed($fan2->MEDIUM);
$fan1->setRadius(5);
$fan1->setColor("Blue");
$fan1->setOn(false);
echo($fan2->toString());