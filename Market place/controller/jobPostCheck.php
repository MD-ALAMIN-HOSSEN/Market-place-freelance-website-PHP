<?php
require_once('../model/userModel.php');
$result = createJob();
if ($result ){
    header('location: ../view/dashboard.php');
}
?>