
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
    <title>dashboard</title>
    <link rel="stylesheet" href="css.css">

</head>
<?php include "../include/topbar.php" ?>
<body>
    
            <h1>Dashboard</h1>
            you are logged in as a : <?php echo $_SESSION['status'];  ?>
            <?php
                if($_SESSION['status']=="buyer"){
                    //echo "bubyer button";
                    ?>
                    <br>
                    <br>
                    <a href="job_post.php" class="button-link"> Post job</a>
            <?php
                }
                if($_SESSION['status']=="seller"){
                    //echo "seller button";
                    ?>
                    <br>
                    <br>
                    <a href="gig_post.php" class="button-link"> Post gig</a>
            <?php
                }
            ?>
            
        
</body>
<?php include "../include/bottombar.php" ?>
</html>
