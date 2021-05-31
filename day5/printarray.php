//Method1
<?php
//Numerical Array

$a[0] = "First";
$a[1] = "Second";
$a[2] = "Third";
$a[3] = "Fourth";
$a[4] = "Fifth";

//Method2
//index Dynamic Array
$a[] = 10;
$a[] = 20;
$a[] = 30;
$a[] = 40;
$a[] = 50;


//Method3
//Always use this mathod to create an Array
$a = array(10, 20, 30, "A", "B", "C", "heer");

//Print Array Value
echo $a[3];

//Print Whole Array
for ($i = 0; $i < count($a); $i++) {
    echo "<br/>" . $a[$i];
} //3 Inbuilt Functions toDebug an Array 
echo "<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
var_dump($a);
echo "<pre>";
?>