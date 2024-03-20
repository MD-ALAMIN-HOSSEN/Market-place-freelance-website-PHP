<?php
 $email=$err_email="";
 $error=false;
 
 if(isset($_POST['submit'])){
    $email=$_POST['email'];
    if($email==""){
        $err_email="Give mail ";
        $error=true;
        
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $err_email="Invalid email format.";
        $error=true;
    }
    if(!$error){
        header('location: ../view/login2.php');
    }
  
 }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login1</title>
    <style>
    body {
        display: flex;
        font-size: 20px;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .option {
        text-align: center;
        background-color: #D9D9D9;
    }

    form {
        width: 30%;
        border: 1px solid #000;
        border-radius: 10px;
        margin: auto;
        padding: 30px;
    }

    .form-group {
        padding: 3px;
        margin: 10px;
        display: block;
    }

    .center {
        text-align: center;
    }

    label {
        font-size: 20px;
    }

    button {
        font-size: 20px;
    }

    /* Style link as a button */
    .button-link {
        display: inline-block;
        padding: 10px 20px;
        background-color: #D9D9D9;
        color: #000;
        border: none;
        border-radius: 5px;
        text-decoration: none;

    }
    </style>
</head>

<body>
    <form action="login1.php" method="POST">
        <div class="form-group center">
            <h1>Login to Job Board</h1>
        </div>
        <div class="form-group center">
            <input type="email" placeholder="Email " name="email">
            <?php
                echo "<br>$err_email";
            ?>
            <br>
        </div>
        <div class="form-group center">
            <button type="submit" name="submit">Continue with Email</button>
        </div>
        <div class="form-group center">
            <!-- Style the link as a button -->
            <a href="signup1.php" class="button-link">Sign up</a>
        </div>
    </form>
</body>

</html>