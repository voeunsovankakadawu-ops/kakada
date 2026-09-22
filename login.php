<?php
session_start();
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['pss'];
    if (empty($username) || empty($password)) {
        $message = "Please, enter username and password";
        

    }
    else {

        if (
            isset($_SESSION['user']) &&
            isset($_SESSION['pss']) &&
            $username == $_SESSION['user'] &&
            $password == $_SESSION['pss']
        ) {

            $_SESSION['logged_in'] = true;

            header("Location: dashboard.php");
            exit();

        }
        else {

            $message = "Username or password is incorrect";

        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <form method="POST">

        <h2>Login Form</h2>

        <input
            type="text"
            name="username"
            placeholder="Username"
        ><br>

        <input
            type="password"
            name="pss"
            placeholder="Password"
        ><br>

        <button type="submit">Login</button>

        <h3><?php echo $message; ?></h3>

    </form>

    <a href="signup.php">Create Account</a>

</body>

</html>