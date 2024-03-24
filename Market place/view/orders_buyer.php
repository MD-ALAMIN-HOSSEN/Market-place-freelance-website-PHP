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

        <h2>Order Buyer</h2>
        <a href="order_details_buyer.php" class="card-link">
        <div class="card">
            <div class="card-left">
                <div class="space-around">
                    <div class="titel">Web development</div>
                    <div class="date">Date  :11/1/2024</div>
                </div>
                <div class="details space-around">I need a protfolio website.</div>
                <div class="skills space-around">Skill: html,css,php</div>
            </div>
            <div class="card-right">
                <div class="menu-icon space-around"><img src="../asset/menu.png" alt=""></div>
                <div class="space-around">Price: <label class="price" >10$</label></div>
                <div class="status space-around">status : Posted</div>
                <div > <a class="button-link2 space-around"  href="order_details_buyer.php"> see more</a></div>
            </div>
        </div>
        </a>
        <a href="order_details_buyer.php" class="card-link">
        <div class="card">
            <div class="card-left">
                <div class="space-around">
                    <div class="titel">Web development</div>
                    <div class="date">Date  :11/1/2024</div>
                </div>
                <div class="details space-around">I need a protfolio website.</div>
                <div class="skills space-around">Skill: html,css,php</div>
            </div>
            <div class="card-right">
                <div class="menu-icon space-around"><img src="../asset/menu.png" alt=""></div>
                <div class="space-around">Price: <label class="price" >10$</label></div>
                <div class="status space-around">status : Running</div>
                <div > <a class="button-link2 space-around"  href="order_details_buyer.php"> see more</a></div>
            </div>
        </div>
        </a>
        
</body>
<?php include "../include/bottombar.php" ?>
</html>
