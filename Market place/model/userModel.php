<?php 
    require_once('db.php');

    function login($email, $password){
        $con = dbConnection();
        $sql = "select * from user where Email='{$email}' and Password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }
    function getstatus($email, $password){
        $con = dbConnection();
        $sql = "select Status_type from user where Email='{$email}' and Password='{$password}'";
        $result = mysqli_query($con, $sql);
        if ($result) {
            // Fetch the result row as an associative array
            $row = mysqli_fetch_assoc($result);
            
            // Check if a row was found
            if ($row) {
                // Access the value of the Status_type column from the row
                $status_type = $row['Status_type'];
                
                // Return the value of Status_type
                return $status_type;
            } else {
                // If no row was found, return null or false, depending on your requirements
                return null; // or return false;
            }
        }    
       
    }


   
    
    function createUser(){
        $con = dbConnection();
        $fname=$_POST['First_Name'];
        $lname=$_POST['Last_Name'];
        $pass=$_POST['password'];
        $confirmpass=$_POST['confirm_password'];
        $forgotphrase=$_POST['forgot_password_phrase'];
        $country=$_POST['Country'];
        $email=$_POST['email'];
        $status=$_POST['type'];
        $date_of_birth=$_POST['date_of_birth'];
        $gender=$_POST['gender'];
        

       // Inserting into the 'user' table
        $sql1 = "INSERT INTO user (Email, Password, Forgot_password_phrase, Status_type) VALUES ('$email', '$pass', '$forgotphrase', '$status')";

        if(mysqli_query($con, $sql1)){
            // Get the ID of the last inserted record
         $user_id = mysqli_insert_id($con);
         echo $user_id;
            // Inserting into the 'user_profile' table
            $sql2 = "INSERT INTO user_profile ( User_id, First_name, Last_name, Country , Date_of_birth , Gender ) VALUES ( '$user_id', '$fname', '$lname', '$country', '$date_of_birth','$gender')";       
            if(mysqli_query($con, $sql2)){
             return true;
            } else {
                return false;
            }
        } else {
        return false;
        }
    }



  

?>