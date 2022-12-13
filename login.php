<?php

$is_invalid = false;
session_start();


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/dbconnection.php";
    
    $sql = sprintf("SELECT * FROM newusers
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email_id"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: home.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <title>Login</title> 
</head>
    <body class="form-data">
    <?php if(isset($_SESSION["user_id"])):?>
        
        <p>You are already logged in</p>
        <p><a href="logout.php">Logout</a></a></p>
        
    <?php else: ?>
        
        <!-- <p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p> -->
        <div class="bg-image"></div>
    <div class="login-box">
    <img src="avatar.png"  class="avatar">
        <h1>Login</h1>
        <?php if ($is_invalid): ?>
        <em class="em-class" style="color:red;">Invalid login</em>
    <?php endif; ?>
            <!-- <form name="myForm" action="login.php" onsubmit="return validateForm()" method="post"> -->
            <form method="post">
            <input type="text" name="email_id" placeholder="Email" value="<?= htmlspecialchars($_POST["email_id"] ?? "") ?>">
            <p style="color:red;visibility:hidden" id="req">*Enter a valid username</p>
            <input type="password" name="password" placeholder=" Password"> <br><br>
            <p style="color:red;visibility:hidden" id="pwdid">*Password is required</p>
            <input type="submit" name="submit" value="Login">   
            </form>
        </div>
    
        <script src="script/validate.js"></script>
        
    <?php endif; ?>
    
    </body>
</html>








