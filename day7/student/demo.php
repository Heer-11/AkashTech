<html lang="en">
<?php
$connection = mysqli_connect("localhost", "root", "", "notheme");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $gen = $_POST['gender'];
    $mobile = $_POST['mobile_no'];
    $address = $_POST['address'];
    $area = $_POST['area'];
    $pincode = $_POST['pincode'];
    $bloodgroup = $_POST['bloodgroup'];

    $q = mysqli_query(
        $connection,
        "INSERT INTO `tbl_student` (`fname`, `lname`, `email`, `pass`, `gen`, `mobile`, `address`, `area`, `pincode`, `bloodgroup`) 
        VALUES ('$fname', '$lname', '$email', '$pass', '$gen', ' $mobile', ' $address', '$area', '$pincode', '$bloodgroup')"
    )
        or die(mysqli_error($connection));

    if ($q) {
        echo "<script>alert('Record Added');</script>";
    }
}
?>

<head>
    <title>User Registration</title>
</head>

<body>
    <h1>Register</h1>
    <form action="#" method="POST">
        Firstname: <input type="text" name="fname" required /><br />
        Lastname: <input type="text" name="lname" required /><br />
        Email: <input type="email" name="email" required /><br />
        Password: <input type="password" name="password" required /><br />
        Gender: <input type="text" name="gender" required /><br />
        Mobile: <input type="text" name="mobile_no" required /><br />
        Address: <input type="text" name="address" required /><br />
        Area: <input type="text" name="area" required /><br />
        Pincode: <input type="text" name="pincode" required /><br />
        Bloodgroup: <input type="text" name="bloodgroup" required /><br />
        <input type="submit" value="Register" />
    </form>
</body>

</html>