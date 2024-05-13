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
    <title>jobs</title>
    <link rel="stylesheet" href="css.css">

</head>
<?php include "../include/topbar.php" ?>
<body> 
         <h1>Jobs</h1>
         <div id="card-container"></div>
    <script src="functions.js"></script>
    <script>
        // Function call inside the script tag
        loadJobs();
    </script>
        
</body>
<?php include "../include/bottombar.php" ?>
</html>
