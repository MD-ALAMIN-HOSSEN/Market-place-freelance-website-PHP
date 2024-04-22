<?php
 $pass=$err_pass="";
 $error=false;
 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login2</title>
    <link rel="stylesheet" href="login2css.css">
 
</head>

<body>
    <form action="../controller/loginCheck.php" method="post">
        <div class="form-group center">
            <h1>Welcome </h1>
        </div>
        <div class="form-group ">
            <label><?php echo $_POST['email'];?></label>
        </div>
        <div class="form-group center">
            <input type="hidden" name="email" value="<?php echo $_POST['email'];?>">
            <input type="password" placeholder="password " name="password"><br>
            <?php
                echo "<br><span style='color: red;'>$err_pass</span>";
            ?>
        </div>
        <div class="form-group center ">
            <!-- Style the link as a button -->
            <a href="forgot_password.php" class="button-link">Forgot password?</a><br>
        </div>
        <div class="form-group center">
            <button type="submit"  name="submit">Login</button>
        </div>

    </form>
</body>

</html>