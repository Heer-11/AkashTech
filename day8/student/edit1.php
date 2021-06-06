<html>
<?php
$connection = mysqli_connect("localhost", "root", "", "notheme");

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("location:fetch1.php");
}

$editid = $_GET['id'];
//Select data from table
$editq =  mysqli_query($connection, "select * from tbl_student where ID='{$editid}'") or die(mysqli_error($connection));
$editdata = mysqli_fetch_array($editq);
//print_r($editdata);


if ($_POST) {
    $txt1 = $_POST['txt1'];
    $txt2 = $_POST['txt2'];
    $txt3 = $_POST['txt3'];
    $txt4 = $_POST['txt4'];
    $txt5 = $_POST['txt5'];
    $txt6 = $_POST['txt6'];
    $txt7 = $_POST['txt7'];
    $txt8 = $_POST['txt8'];
    $txt9 = $_POST['txt9'];
    $txt0 = $_POST['txt0'];


    $uq = mysqli_query(
        $connection,
        "UPDATE `tbl_student` SET `fname`='{$txt1}',`lname`='{$txt2}',`email`='{$txt3}',
        `pass`='{$txt4}',`gen`='{$txt5}',`mobile`='{$txt6}',`address`='{$txt7}',`area`='{$txt8}',
        `pincode`='{$txt9}' 'bloodgroup'='{$txt0}' WHERE mobile='{$txt6}'"
    )  or die(mysqli_error($connection));




    if ($uq) {
        echo "<script>
    alert('Record Updated');
    window.location='display1.php';
    </script>";
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
                Firstname: <input type="text" value="<?php echo $editdata['fname']; ?>" name="txt1" required /><br />
                Lastname: <input type="text" value="<?php echo $editdata['lname']; ?>" name="txt2" required /><br />
                Email: <input type="email" value="<?php echo $editdata['email']; ?>" name="txt3" required /><br />
                Password: <input type="password" value="<?php echo $editdata['pass']; ?>" name="txt4" required /><br />
                Gender: <input type="text" value="<?php echo $editdata['gen']; ?>" name="txt5" required /><br />
                Mobile: <input type="text" value="<?php echo $editdata['mobile']; ?>" name="txt6" required /><br />
                Address: <input type="text" value="<?php echo $editdata['address']; ?>" name="txt7" required /><br />
                Area: <input type="text" value="<?php echo $editdata['area']; ?>" name="txt8" required /><br />
                Pincode: <input type="text" value="<?php echo $editdata['pincode']; ?>" name="txt9" required /><br />
                Bloodgroup: <input type="text" value="<?php echo $editdata['bloodgroup']; ?>" name="txt0" required /><br />
                <input type="submit" value="Register" />
                "<a href='display1.php'>Display Record</a>"
            </div>
        </form>
    </div>
</body>
<a href='studentform1.php'>Add Record</a>

</html>