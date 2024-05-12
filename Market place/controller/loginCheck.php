<?php
session_start();

require_once('../model/userModel.php');

$pass=$err_pass="";
$error=false;

if(isset($_POST['submit'])){
   $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    if($email == "" || $password == ""){
        echo "null Email password";
    }else {
    
        $status = login($email, $password);
        $status_type=getstatus($email, $password);
        $user_id = gettingUserId($email, $password);
    
        if($status){
            setcookie('flag', 'true', time()+3000, '/');
            $_SESSION['flag'] = "true";
            $_SESSION['status'] = $status_type;
            $_SESSION['user_id'] = $user_id;
            header('location: ../view/dashboard.php');
        }else{
            echo "invalid User!";
        }    
    }
   
}
 

exit();
?>