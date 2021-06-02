<?php
$connection = mysqli_connect("localhost", "root", "", "notheme");

$id = $_GET['deleteid'];

$q = mysqli_query(
    $connection,
    "update tbl_user set is_delete = 1 where user_id='{$ID}'"
)
    or die(mysqli_error($connection));

if ($q) {
    echo "<script>alert('Record Deleted');window.location='display.php';</script>";
}
