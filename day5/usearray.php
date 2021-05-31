<?php
//Associative Array
//Key =  Value
//Method1
$a[0] = 10;
$a['c'] = "Computer";
$a['php'] = "Web development";
$a[10] = "Ten";
$a[50] = 50.40;

//Method2
//Always use this method to create an Array
$a = array(
    0 => 10,
    "c" => "computer",
    "php" => "web development",
    10 => "Ten",
    50 => 50.40
);
//Print Value
echo "C for" . $a['c'];

foreach ($a as $value) {
    echo "<br/>Value is $value";
}

foreach ($a as $key => $value) {
    echo "<br/>Key is <b>$key</b> and Value is <b>$value</b>";
}
