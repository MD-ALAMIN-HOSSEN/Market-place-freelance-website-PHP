<?php
    require_once('../model/userModel.php');

    $fname=$lname=$pass=$confirmpass=$forgotphrase=$country=$email=$err_fname=$err_lname=$err_pass=$err_confirmpass=$err_forgotphrase=$err_country=$err_email="";
    $error=false;
    $_POST['type']=$_POST['type'];
    if(isset($_POST['submit'])){
       $fname=$_POST['First_Name'];
       $lname=$_POST['Last_Name'];
       $pass=$_POST['password'];
       $confirmpass=$_POST['confirm_password'];
       $forgotphrase=$_POST['forgot_password_phrase'];
       $country=$_POST['Country'];
       $email=$_POST['email'];
   
       if($fname==""){
           $err_fname=" Give First Name";
           $error=true;
           
       }
   
       if($lname==""){
         $err_lname="Give Last_Name ";
         $error=true;
         
     }
     if($pass==""){
       $err_pass="Give password ";
       $error=true;
       
   }
   if($confirmpass==""){
     $err_confirmpass="Give confirm password ";
     $error=true;
     
   }
   if($confirmpass!=""&&$confirmpass!=$pass){
       $err_confirmpass="password and confirm password doesn't match ";
       $error=true;
       
     }
   if($forgotphrase==""){
     $err_forgotphrase="Give forgot password phrase ";
     $error=true;
     
   }
   if($country==""){
     $err_country="Give Country ";
     $error=true;
     
   }
   if($email==""){
     $err_email="Give mail ";
     $error=true;
     
   }
   
       if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
           $err_email="Invalid email format.";
           $error=true;
       }
       if($error){
           header('location: ../view/signup1.php');
       }
       
       
    }
    if(!$error){
        $status = createUser();
        if($status){
            header('location: ../view/login1.php');
        }else{
            echo "DB error! Please try again";
        }
    }


       
    
    
?>