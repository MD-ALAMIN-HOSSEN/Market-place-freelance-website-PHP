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
    <title>job_proposal_submit</title>
    <link rel="stylesheet" href="css.css">
    <script>
    function validateForm() {
        var price = document.getElementById('Price').value;
        var date = document.getElementById('date').value;
        var details = document.getElementById('details').value;
        var error = false;
        
        // Check if price is empty or not a number
        if (price === "" || isNaN(price)) {
            error = true;
        }

        // Check if date is empty
        if (date === "") {
            error = true;
        }

        // Check if details is empty
        if (details === "") {
            error = true;
        }
        
        var fileInput = document.getElementById('files');
        var selectedFile = fileInput.files[0];

        if (selectedFile === undefined) {
                //alert("Please select a file.");
              error = true;
        }
 
        if(error){
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
        echo $alertmessage;
        //../controller/jobProposalSave.php
    ?>
    <form action="../controller/jobProposalSave.php" class="form" method="post"  enctype="multipart/form-data" onsubmit="return validateForm();">
        <div class="form-group ">
            <h1>Job proposal</h1>
        </div>
        <div class="form-group">
            <label for="Price">Price:</label>
            <input class="input-normal" type="number" name="Price" id="Price">
            <?php
                echo "<br><span style='color: red;'>$err_Price</span>";
            ?>
        </div>
        <div class="form-group">
            <label for="date_of_birth">Date :</label>
            <input class="input-normal" type="date" name="date" id="date">
            <?php
                echo "<br><span style='color: red;'>$err_date</span>";
            ?>
        </div>
        <div class="form-group">
            <label for="details">Cover letter :</label><br>
            <input class="input-details" type="text" name="details" id="details">
            <?php
                echo "<br><span style='color: red;'>$err_details</span>";
            ?>
        </div>
        <div class="form-group ">
            <input type="file" name="myfile" value="" id="files">
        </div>
        <div class="form-group center">
        <input type="hidden" name="Job_id" value="<?php echo $_REQUEST['Job_id']; ?>">
            <button class=" button-style" type="submit" name="submit">Submit proposal</button>
        </div>

    </form>


</body>
<?php include "../include/bottombar.php" ?>

</html>