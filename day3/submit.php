<?php

$a = $_POST['Maths'];
$b = $_POST['Science'];
$c = $_POST['Gujarati'];
$d = $_POST['English'];
$e = $a + $b + $c + $d;
echo "$e is the total<br>";
$f = ($e / 400) * 100;
echo "$f is percentage<br>";
if ($f < 50) {
    echo "<div style='background-color:red;'>Sorry you failed!</div>";
} else if ($f < 70) {
    echo "<div style='background-color:green;'>You have passed!</div>";
} else {
    echo "<div style='background-color:lightgreen;'>You passed with flying colors!</div>";
}
