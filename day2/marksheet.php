<?php

$name = "shree";
$regno = 1;

$s1 = 40;
$s2 = 20;
$s3 = 30;

$t = $s1 + $s2 + $s3;
$p = $t / 3;

if ($p >= 60) {
    echo " first division";
}
if ($p >= 50 and $p < 60) {
    echo " Second division";
}
if ($p >= 40 and $p < 50) {
    echo " Third division";
}

if ($p < 40) {
    echo " fail";
}



echo "<br>";
if ($s1 >= 35 and $s2 >= 35 and $s3 >= 35) {
    $r = "pass";
} else {
    $r = "fail";
}

echo $r;
echo $t;
echo $p;
