<?php
$servername = "localhost:3333";
$username = "root";
$password = "";
$dbname = "db_internship";
//Connection Function
$connection = mysqli_connect($servername, $username, $password, $dbname);

$q = mysqli_query(
    $connection,
    "insert into tbl_user(user_name,user_gender,user_mobile) values('Heer','Female','9106763254')"
)
    or die("Error" . mysqli_error($connection));

if ($q) {
    echo "<script>alert('Record Added');</script>";
}
