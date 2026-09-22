<?php
$message="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST['username'];
    $password=$_POST['pss'];
    if (empty($username) || empty($password)){
        $message="Please,enter username and password";
    }
    else{
        // store in the SESSION
        $_SESSION['user']=$username;
        $_SESSION['pss']=$password;
        $message="Create account successfully";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method="POST">
         <h2>Sign Up form</h2>
         <input type="text" name="username" placeholder="Username"><br>
         <input type="password" name="pss" placeholder="password"><br>
         <button>Create Account</button>
         <h3><?php $message?></h3>
         <a href="login.php">Login</a>
   </form> 
</body>
</html>