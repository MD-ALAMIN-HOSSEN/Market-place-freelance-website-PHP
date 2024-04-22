<?php
require_once('../model/userModel.php');

$status = saveReportBugContactMe ();
if($status){
    header('location: ../view/login1.php');
}else{
    echo "DB error! Please try again";
}

?>