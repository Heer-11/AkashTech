<!DOCTYPE html>
<html>
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
    <title>Contact form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
        html,
        body {
            min-height: 100%;
            padding: 0;
            margin: 0;
            font-family: Roboto, Arial, sans-serif;
            font-size: 14px;
            color: #666;
        }

        h1 {
            margin: 0 0 20px;
            font-weight: 400;
            color: #1c87c9;
        }

        p {
            margin: 0 0 5px;
        }

        .main-block {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #1c87c9;
        }

        form {
            padding: 25px;
            margin: 25px;
            box-shadow: 0 2px 5px #f5f5f5;
            background: #f5f5f5;
        }

        .fas {
            margin: 25px 10px 0;
            font-size: 72px;
            color: #fff;
        }

        .fa-envelope {
            transform: rotate(-20deg);
        }

        .fa-at,
        .fa-mail-bulk {
            transform: rotate(10deg);
        }

        input,
        textarea {
            width: calc(100% - 18px);
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #1c87c9;
            outline: none;
        }

        input::placeholder {
            color: #666;
        }

        button {
            width: 100%;
            padding: 10px;
            border: none;
            background: #1c87c9;
            font-size: 16px;
            font-weight: 400;
            color: #fff;
        }

        button:hover {
            background: #2371a0;
        }

        @media (min-width: 568px) {
            .main-block {
                flex-direction: row;
            }

            .left-part,
            form {
                width: 50%;
            }

            .fa-envelope {
                margin-top: 0;
                margin-left: 20%;
            }

            .fa-at {
                margin-top: -10%;
                margin-left: 65%;
            }

            .fa-mail-bulk {
                margin-top: 2%;
                margin-left: 28%;
            }
        }
    </style>
</head>

<body>
    <div class="main-block">
        <div class="left-part">
            <i class="fas fa-envelope"></i>
            <i class="fas fa-at"></i>
            <i class="fas fa-mail-bulk"></i>
        </div>
        <form action="#" method="POST">
            <h1>Contact Us</h1>
            <div class="info">
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
                "<a href='display.php'>Display Record</a>"
            </div>
        </form>
    </div>
</body>

</html>