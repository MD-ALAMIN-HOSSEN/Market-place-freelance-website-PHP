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
    <div class="card-2">
        <div class="card-left">
            <div class="space-around">
                <div class="titel">Web development</div>
                <div class="date">Date :11/1/2024</div>
            </div>
            <div class="form-group">
                <div class="center1 " name="details">
                    I need a protfolio website. <br> <br> Skill: html,css,php
                </div>
                <div> <a class="button-link2 space-around" href="#">Files</a></div>
            </div>
            <div class="margin-button">
                <a class="button-link2 space-around" href="#">Accept</a>
                <a class="button-link2 space-around" href="#">Cancel</a>
            </div>

        </div>
        <div class="card-right2">
            <div class="space-around price2">Price: <label class="price">10$</label></div>
            <div> 
            <img src="../asset/profile pic.png" alt="Girl in a jacket" width="100" height="100">
            <div><a class="button-link2 " href="#">Contact me</a></div>
            </div>
            
            <div><a href="#" class="space-around space-around">report user</a></div>
        </div>
    </div>




</body>
<?php include "../include/bottombar.php" ?>

</html>