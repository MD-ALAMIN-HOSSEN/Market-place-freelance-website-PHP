<?php
session_start();
if(!isset($_SESSION['flag'])){
    header('location: ../view/login1.php');  
    
    }

    $userType=$_SESSION['status'];

    if ($userType=='buyer'){
        header('location: ../view/orders_buyer.php');

    }

    if ($userType=='seller'){
        header('location: ../view/orders_seller.php');
        
    }

?>