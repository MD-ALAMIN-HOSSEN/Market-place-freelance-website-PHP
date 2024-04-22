<?php
 $email=$err_email="";
 $error=false;
 
 if(isset($_POST['submit'])){
    $email=$_POST['email'];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $err_email="Invalid email format.";
        $error=true;
    }
    if($email==""){
        $err_email="Give mail ";
        $error=true;
        
    }
    if(!$error){
        
    }
  
 }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login1</title>
    <link rel="stylesheet" href="login1css.css">
    <script type="text/javascript" src="javascript.js"></script> 

</head>

<body>
    <form action="login2.php" method="POST" onsubmit="return validateEmail();">
        <div class="form-group center">
            <h1>Login to Job Board</h1>
        </div>
        <div class="form-group center">
            <input type="text" placeholder="Email " name="email" id="email"><br>
            <span class="error" id="emailError"></span>
            <?php
                echo "<br><span style='color: red;'>$err_email</span>";
            ?>
            <br>
        </div>
        <div class="form-group center">
          <button type="submit" name="submit" >Continue with Email</button> 
          <!-- <button type="submit" name="submit" id="" >submit</button>-->
        </div>
        <div class="form-group center">
            <!-- Style the link as a button -->
            <a href="signup1.php" class="button-link">Sign up</a>
        </div>
    </form>
</body>

</html>