<?php
session_start();
if(!isset($_SESSION['flag'])){
    header('location: ../view/login1.php');  
    
    }
    
 $date=$Price=$details=$err_date=$err_Price=$err_details=$result="";
 $error=false;
 if(isset($_POST['submit'])){
    $Price=$_POST['Price'];
    $details=$_POST['details'];

    if(empty($_POST['date'])) {
        $err_date = "Please select a date.";
        $error = true;
    }
    
    if($Price==""&& !is_numeric($Price)){
        $err_Price="Give Price ";
        $error=true;
        
    }
    if($details==""){
        $err_details="Fill the Requirment to submit! ";
        $error=true;
        
    }
    if(!$error){
        if(isset($_FILES['myfile'])) {
            $file_name = $_FILES['myfile']['name'];
            $file_tmp = $_FILES['myfile']['tmp_name'];
            $file_destination = "../upload/" . $file_name;

            if(move_uploaded_file($file_tmp, $file_destination)) {
                //$result = "File uploaded successfully.";
                $result="Submitted Successfully.";
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
    <title>job_post</title>
    <link rel="stylesheet" href="css.css">
    <script type="text/javascript" src="javascript.js"></script>
</head>
<?php include "../include/topbar.php" ?>

<body>
    <?php
       // echo "<br><span style='color: green;'>{$_SESSION['user_id']}</span>";
    ?>
    <form action="../controller/jobPostCheck.php" class="form" method="post"  enctype="multipart/form-data">
        <div >
            <h2>Job post</h2>
        </div>
        <div class="form-group">
            <label for="job-titel">Job titel:</label>
            <input class="input-normal" type="text" name="job-titel">
            <?php
                echo "<br><span style='color: red;'>$err_Price</span>";
            ?>
        </div>
        <div class="form-group">
            <label for="Price">Price:</label>
            <input class="input-normal" type="number" name="Price">
            <?php
                echo "<br><span style='color: red;'>$err_Price</span>";
            ?>
        </div>
        <div class="form-group">
            <label for="date_of_birth">Delivery date :</label>
            <input class="input-normal" type="date" name="date" require>
            <?php
                echo "<br><span style='color: red;'>$err_date</span>";
            ?>
        </div>
        <div class="form-group">
            <label for="Category">Category :</label>
            <select name="Category" id="Category">
            <option value="">choose</option>
            <option value="web development">web development</option>
            <option value="app development">app development</option>
            </select>
            <?php
                echo "<br><span style='color: red;'>$err_date</span>";
            ?>
        </div>
        <div class="form-group">
            <label for="details">Details :</label><br>
            <input class="input-details" type="text" name="details">
            <?php
                echo "<br><span style='color: red;'>$err_details</span>";
            ?>
        </div>
        <div class="form-group">
            <label for="skills">Skills :</label><br>
            <input class="input-normal" type="text" name="skills">
            <?php
                echo "<br><span style='color: red;'>$err_details</span>";
            ?>
        </div>
        <div class="form-group ">
            <label for="files" class="button-style-label">Attach files</label>
            <input id="files" style="visibility:hidden;" type="file" name="myfile" >
        </div>
        <div class="form-group center">
            <button class=" button-style" type="submit" name="submit">Post</button>
            <button class=" button-style" type="button" name="cancel" onclick="goBack()">cancel</button>
      
        </div>

    </form>


</body>
<?php include "../include/bottombar.php" ?>

</html>