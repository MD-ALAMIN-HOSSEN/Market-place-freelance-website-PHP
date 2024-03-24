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
    <title>order_details_buyer_posted</title>
    <link rel="stylesheet" href="css.css">


</head>
<?php include "../include/topbar.php" ?>

<body>
    <h3>Order details</h3>
    <div class="card-2">
        <div class="card-left">
            <div class="space-around">
                <div class="titel">Web development</div>
                <div class="date">Date :11/1/2024</div>
            </div>
        </div>
        <div class="card-right2">
            <label for="#">Status :posted</label>
        </div>
    </div>
    <div class="space-around" name="details">
        I need a protfolio website. <br> <br> Skill: html,css,php
    </div>
    
    <label class="thick" for="#">proposals :</label>
    <div class="proposals">
        <div class="proposal-s">
            <div>
                <img src="../asset/profile pic.png" alt="Girl in a jacket" width="50" height="50">
                <div><Label>Mahin</Label></div>
            </div>
            <div class="space-around ">Price: <label class="price">10$</label></div>
            <div><a class="button-link2 " href="#">see more details</a></div>
            <div><a class="button-link2 " href="#">Accept</a></div>
        </div>
    </div>
    <div class="proposals">
        <div class="proposal-s">
            <div>
                <img src="../asset/profile pic.png" alt="Girl in a jacket" width="50" height="50">
                <div><Label>Riky</Label></div>
            </div>
            <div class="space-around ">Price: <label class="price">10$</label></div>
            <div><a class="button-link2 " href="#">see more details</a></div>
            <div><a class="button-link2 " href="#">Accept</a></div>
        </div>
    </div>
    <div class="proposals">
        <div class="proposal-s">
            <div>
                <img src="../asset/profile pic.png" alt="Girl in a jacket" width="50" height="50">
                <div><Label>roy</Label></div>
            </div>
            <div class="space-around ">Price: <label class="price">10$</label></div>
            <div><a class="button-link2 " href="#">see more details</a></div>
            <div><a class="button-link2 " href="#">Accept</a></div>
        </div>
    </div>




</body>
<?php include "../include/bottombar.php" ?>

</html>