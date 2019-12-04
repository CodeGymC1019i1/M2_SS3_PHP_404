<?php
include "classStopWatch.php";
$time = new StopWatch();

$arr = [];
for($i = 0; $i < 100000; $i++)
    $arr[$i] = mt_rand(-100,100);

$time->start();
for($i = 0; $i < 100000; $i++) {
    for($j = $i; $j < 1000; $j++) {
        if ($arr[$j] < $arr[$i]) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
        }
    }
}
$time->stop();
echo "Time enforcement: ".$time->getElapsedTime();