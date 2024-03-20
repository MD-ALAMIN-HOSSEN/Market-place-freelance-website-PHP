<?php
session_start();
$_SESSION['flag'] = "true";
header('location: ../view/dashboard.php');
exit();
?>