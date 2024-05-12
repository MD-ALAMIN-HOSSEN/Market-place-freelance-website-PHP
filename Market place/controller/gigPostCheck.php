<?php
require_once('../model/userModel.php');
$result = creategig();
if ($result ){
    header('location: ../view/dashboard.php');
}
?>