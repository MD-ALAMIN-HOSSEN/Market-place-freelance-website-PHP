<?php
session_start();
if(!isset($_SESSION['flag'])){
    header('location: ../view/login1.php');  
    
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
    <script>
    function validateForm11() {
        //alert("Please enter a all the information.");
        var job_titel = document.getElementById('job-titel').value;
        var price = document.getElementById('Price').value;
        var date = document.getElementById('date').value;
        var category = document.getElementById('Category').value;
        var details = document.getElementById('details').value;
        var skills = document.getElementById('skills').value;
        var error = false;

    // Check if job title is empty
        if (job_titel === "") {
            
            error = true;
        }

        // Check if price is empty or not a number
        if (price === "" || isNaN(price)) {
            error = true;
        }

        // Check if date is empty
        if (date === "") {
              error = true;
        }

        // Check if category is selected
        if (category === "") {
            error = true;
        }

        // Check if details is empty
        if (details === "") {
        error = true;
        }

        // Check if skills is empty
        if (skills === "") {
            error = true;
         }

        var fileInput = document.getElementById('files');
        var selectedFile = fileInput.files[0];

        if (selectedFile === undefined) {
                //alert("Please select a file.");
              error = true;
        }
        
        if (error) {
            alert("Please enter a all the information.");
         }
        
        // Return false if there are errors, true otherwise
    return !error;
}


</script>
</head>
<?php include "../include/topbar.php" ?>

<body>
    <?php
       // echo "<br><span style='color: green;'>{$_SESSION['user_id']}</span>";
    ?>
    <form action="../controller/jobPostCheck.php" class="form" method="post"  enctype="multipart/form-data" onsubmit="return validateForm11();">
        <div >
            <h2>Job post</h2>
        </div>
        <div class="form-group">
            <label for="job-titel">Job titel:</label>
            <input class="input-normal" type="text" name="job-titel" id="job-titel">
            <?php
                echo "<br><span style='color: red;'>$err_Price</span>";
            ?>
        </div>
        <div class="form-group">
            <label for="Price">Price:</label>
            <input class="input-normal" type="number" name="Price" id="Price">
            <?php
                echo "<br><span style='color: red;'>$err_Price</span>";
            ?>
        </div>
        <div class="form-group">
            <label for="date_of_birth">Delivery date :</label>
            <input class="input-normal" type="date" name="date" id="date">
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
            <input class="input-details" type="text" name="details" id="details">
            <?php
                echo "<br><span style='color: red;'>$err_details</span>";
            ?>
        </div>
        <div class="form-group">
            <label for="skills">Skills :</label><br>
            <input class="input-normal" type="text" name="skills" id="skills">
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