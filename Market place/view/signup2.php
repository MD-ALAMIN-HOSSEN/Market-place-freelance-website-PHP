<?php
 $fname=$lname=$pass=$confirmpass=$forgotphrase=$country=$email=$err_fname=$err_lname=$err_pass=$err_confirmpass=$err_forgotphrase=$err_country=$err_email="";
 $error=false;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup2</title>
    <link rel="stylesheet" href="css2.css">

</head>

<body>
    <form action="../controller/singupCheck.php" method="post">
        <div class="form-group center">
            <h1>Signup2</h1>
        </div>
        <div class="form-group">
            <label for="name">First Name:</label>
            <input type="text" name="First_Name">
            <?php
                echo "<br><span style='color: red;'>$err_fname </span><br>";
            ?>
            <label for="name">Last Name:</label>
            <input type="text" name="Last_Name">
            <?php
                echo "<br><span style='color: red;'>$err_lname</span>";
            ?>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email">
            <?php
                echo "<br><span style='color: red;'>$err_email</span>";
            ?>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password">
            <?php
                echo "<br><span style='color: red;'>$err_pass</span>";
            ?>
        </div>
        <div class="form-group">
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" name="confirm_password">
            <?php
                echo "<br><span style='color: red;'>$err_confirmpass</span>";
            ?>
        </div>
        <div class="form-group">
            <label for="forgot_password_phrase">Forgot password phrase:</label>
            <input type="text" name="forgot_password_phrase">
            <?php
                echo "<br><span style='color: red;'>$err_forgotphrase</span>";
            ?>
        </div>
        <div class="form-group">
            <label for="Country">Country:</label>
            <input type="text" name="Country">
            <?php
                echo "<br><span style='color: red;'>$err_country</span>";
            ?>
        </div>

        <div class="form-group">
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" name="date_of_birth" require>

        </div>
        <div class="form-group" >
            <label for="gender">Gender:</label>
            <input type="radio" name="gender" id="male" value="male" require>
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="female" require>
            <label for="female">Female</label>
            <input type="radio" name="gender" id="other" value="other" require>
            <label for="other">Other</label>
            <input type="hidden" name="type" value="<?php echo $_POST['type']; ?>">
        </div>

        <div class="form-group center">
            <button type="submit" name="submit">Create Account</button>
        </div>
        <div class="form-group center">
            <a href="login1.php">Already have an account</a>
        </div>
    </form>
</body>

</html>