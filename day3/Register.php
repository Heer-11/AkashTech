<html lang="en">

<head>
    <title>User Registration</title>
</head>

<body>
    <h1>Register</h1>
    <form action="signup.php" method="POST">
        Username: <input type="text" name="username" required /><br />
        Email: <input type="email" name="email" required /><br />
        Password: <input type="password" name="password" required /><br />
        Confirm password: <input type="password" name="password_confirm" required /><br />
        <input type="submit" value="Register" />
    </form>
</body>

</html>