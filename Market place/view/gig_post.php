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
        function validateForm() {
            var gig_titel = document.getElementById('gig-titel').value;
            var price = document.getElementById('Price').value;
            var number_of_review = document.getElementById('number-of-review').value;
            var delivery_in_days = document.getElementById('delivery_in_days').value;
            var category = document.getElementById('Category').value;
            var details = document.getElementById('details').value;
            var skills = document.getElementById('skills').value;
            var error = false;
        
            if (gig_titel === "") {
                error = true;
            }
        
            if (price === "" || isNaN(price)) {
                error = true;
            }
            if (number_of_review === "" || isNaN(number_of_review)) {
                 error = true;
            }
        
            if (delivery_in_days === "" || isNaN(delivery_in_days)) {
                error = true;
            }
        
            if (category === "") {
                error = true;
            }
        
            if (details === "") {
                error = true;
            }
        
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
                alert("Please enter all the information.");
                
            }
        
            return !error;
        }
    </script>
</head>
<?php include "../include/topbar.php" ?>

<body>
    <?php
       //echo "<br><span style='color: green;'>{$_SESSION['user_id']}</span>";
    ?>
    <form action="../controller/gigPostCheck.php" class="form" method="post"  enctype="multipart/form-data" onsubmit="return validateForm();" >
        <div >
            <h2>gig post</h2>
        </div>
        <div class="form-group">
            <label for="gig-titel">gig titel:</label>
            <input class="input-normal" type="text" name="gig-titel" id="gig-titel">
        
        </div>
        <div class="form-group">
        <label for="files" class="button-style-label">Add gig image</label>
            <input id="files" style="visibility:hidden;" type="file" name="gig-image"  >
        
        </div>
        <div class="form-group">
            <label for="Price">Price:</label>
            <input class="input-normal" type="number" name="Price" id="Price">
        
        </div>
        <div class="form-group">
            <label for="number-of-review">Number of reviews:</label>
            <input class="input-normal" type="number" name="number-of-review" id="number-of-review">
    
        </div>
        <div class="form-group">
            <label for="delivery_in_days">Delivery in days :</label>
            <input class="input-normal" type="number" name="delivery_in_days" id="delivery_in_days">

        </div>
        <div class="form-group">
            <label for="Category">Category :</label>
            <select name="Category" id="Category">
            <option value="">choose</option>
            <option value="web development">web development</option>
            <option value="app development">app development</option>
            </select>
   
        </div>
        <div class="form-group">
            <label for="details">Details :</label><br>
            <input class="input-details" type="text" name="details" id="details">

        </div>
        <div class="form-group">
            <label for="skills">Skills :</label><br>
            <input class="input-normal" type="text" name="skills" id="skills">

        </div>
        <div class="form-group center">
            <button class=" button-style" type="submit" name="submit">Post</button>
            <button class=" button-style" type="button" name="cancel" onclick="goBack()">cancel</button>
      
        </div>

    </form>


</body>
<?php include "../include/bottombar.php" ?>

</html>
