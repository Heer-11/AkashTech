<html>
<?php
//DB Connection
$connection = mysqli_connect("localhost", "root", "", "notheme");
//Query
$q = mysqli_query($connection, "select * from tbl_student where is_delete = 0")
    or die(mysqli_error($connection));
?>

<head>
    <title>Student Details</title>
    <style>
        /* default styling. Nothing to do with freexing first row and column */
        main {
            display: flex;
        }

        main>* {
            border: 1px solid;
        }

        table {
            border-collapse: collapse;
            font-family: helvetica
        }

        td,
        th {
            border: 1px solid;
            padding: 10px;
            min-width: 200px;
            background: white;
            box-sizing: border-box;
            text-align: left;
        }

        .table-container {
            position: relative;
            max-height: 300px;
            width: 500px;
            overflow: scroll;
        }

        thead th {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 2;
            background: hsl(20, 50%, 70%);
        }

        thead th:first-child {
            left: 0;
            z-index: 3;
        }

        tfoot {
            position: -webkit-sticky;
            bottom: 0;
            z-index: 2;
        }

        tfoot td {
            position: sticky;
            bottom: 0;
            z-index: 2;
            background: hsl(20, 50%, 70%);
        }

        tfoot td:first-child {
            z-index: 3;
        }

        tbody {
            overflow: scroll;
            height: 200px;
        }

        /* MAKE LEFT COLUMN FIXEZ */
        tr> :first-child {
            position: -webkit-sticky;
            position: sticky;
            background: hsl(180, 50%, 70%);
            left: 0;
        }

        /* don't do this */
        tr> :first-child {
            box-shadow: inset 0px 1px black;
        }
    </style>
</head>

<body>
    <?php
    echo "<table  border='1'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>FirstName</th>";
    echo "<th>LastMobile</th>";
    echo "<th>Email</th>";
    echo "<th>Password</th>";
    echo "<th>Gender</th>";
    echo "<th>Mobile</th>";
    echo "<th>Address</th>";
    echo "<th>Area</th>";
    echo "<th>Pincode</th>";
    echo "<th>Bloodgroup</th>";
    echo "</tr>";
    $i = 0;
    while ($row = mysqli_fetch_array($q)) {
        $i++;
        echo "<tr>";
        echo "<td>{$row['ID']}</td>";
        echo "<td>{$row['fname']}</td>";
        echo "<td>{$row['lname']}</td>";
        echo "<td>{$row['email']}</td>";
        echo "<td>{$row['pass']}</td>";
        echo "<td>{$row['gen']}</td>";
        echo "<td>{$row['mobile']}</td>";
        echo "<td>{$row['address']}</td>";
        echo "<td>{$row['area']}</td>";
        echo "<td>{$row['pincode']}</td>";
        echo "<td>{$row['bloodgroup']}</td>";
        echo "<td><a href='edit1.php?id={$row['ID']}'>Edit</a> |<a href='delete1.php?deleteid={$row['ID']}'>Delete</a></td>";

        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
<a href='studentform1.php'>Add Record</a>

</html>