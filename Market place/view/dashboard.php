
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
    <title>Login1</title>
    <link rel="stylesheet" href="css.css">

</head>
<?php include "../include/topbar.php" ?>
<body>
    
            <h1>Dashboard</h1>
            
        
</body>
<?php include "../include/bottombar.php" ?>
</html>
