
<?php
session_start();
if(!isset($_SESSION['flag'])){
    header('location: ../view/login1.php');  
    
    }


 $email=$name=$details=$err_email=$err_name=$err_details=$result="";
 $error=false;
 if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $name=$_POST['Name'];
    $details=$_POST['details'];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $err_email="Invalid email format.";
        $error=true;
    }
    if($email==""){
        $err_email="Give mail ";
        $error=true;
        
    }
    if($name==""){
        $err_name="Give Name ";
        $error=true;
        
    }
    if($details==""){
        $err_details="Fill the details to submit! ";
        $error=true;
        
    }
    if(!$error){
        if(isset($_FILES['myfile'])) {
            $file_name = $_FILES['myfile']['name'];
            $file_tmp = $_FILES['myfile']['tmp_name'];
            $file_destination = "../upload/" . $file_name;

            if(move_uploaded_file($file_tmp, $file_destination)) {
                //$result = "File uploaded successfully.";
                $result="submitted successfully.";
            } else {
                $result = "Error uploading file.";
            }
        }
        
    }
    
   
  
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>report_bug_contact_me</title>
    <link rel="stylesheet" href="css.css">

</head>
<?php include "../include/topbar.php" ?>

<body>
    <?php
        echo "<br><span style='color: green;'>$result</span>";
    ?>
    <form action="#" class="form" method="post"  enctype="multipart/form-data">
        <div class="form-group ">
            <h1>Report bug /contact us</h1>
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <input class="input-normal" type="text" name="Name">
            <?php
                echo "<br><span style='color: red;'>$err_name</span>";
            ?>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input class="input-normal" type="email" name="email">
            <?php
                echo "<br><span style='color: red;'>$err_email</span>";
            ?>
        </div>
        <div class="form-group">
            <label for="details">Details:</label><br>
            <input class="input-details" type="text" name="details">
            <?php
                echo "<br><span style='color: red;'>$err_details</span>";
            ?>
        </div>
        <div class="form-group ">
            <input type="file" name="myfile" value="">
        </div>
        <div class="form-group center">
            <button class=" button-style" type="submit" name="submit">Submit</button>
        </div>

    </form>


</body>
<?php include "../include/bottombar.php" ?>

</html>