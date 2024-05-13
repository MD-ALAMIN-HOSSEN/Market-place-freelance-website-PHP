<?php 
session_start();
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

    function gettingUserId($email, $password){
        $con = dbConnection();
        $sql = "select * from user where Email='{$email}' and Password='{$password}'";
        $result = mysqli_query($con, $sql);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            if ($row) {
                // Access the value of the Status_type column from the row
                $user_id = $row['User_id'];
                // Return the value of Status_type
                return $user_id;
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
         //echo $user_id;
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

    function saveReportBugContactMe (){
        $con = dbConnection();
        $name=$_POST['Name'];	
        $email=$_POST['email'];
        $details=$_POST['details'];
        $files = $_FILES['myfile']['name'];

        $sql1 = "INSERT INTO contact (name,	email, details, files) VALUES ('$name', '$email', '$details', '$files')";

        if(mysqli_query($con, $sql1)){        
             return true;            
        } else {
        return false;
        }	
    }


    function createJob(){
        $con = dbConnection();
        $jobTitel=$_POST['job-titel'];
        $price=$_POST['Price'];
        $delivery_date=$_POST['date'];
        $category=$_POST['Category'];
        $details=$_POST['details'];
        $skills=$_POST['skills'];
        $user_id=$_SESSION['user_id'];
        $status="posted";
       //echo $user_id;
       $file_name = $_FILES['myfile']['name'];// file name
        $file_tmp = $_FILES['myfile']['tmp_name'];//temp location
        $file_type = $_FILES['myfile']['type'];//type
        $file_size = $_FILES['myfile']['size'];//size
        $uploads_dir = '../upload/';
        //echo exec('whoami');
        //move the file to the dir
        move_uploaded_file($file_tmp, $uploads_dir . $file_name);


       // Inserting into the 'job' table
        $sql1 = "INSERT INTO job (Category, User_id, Titel, Price, Delivery_date, Details, Skills, Post_dateTime, Job_file, Status) 
        VALUES ('$category', '$user_id', '$jobTitel', '$price', '$delivery_date', '$details', '$skills', NOW(), '$file_name', '$status')";
        if(mysqli_query($con, $sql1)){
            //echo  "saved";
             return true;
           } else {
                return false;
            }
    
    }

    function creategig(){
        $con = dbConnection();
        $gigTitel=$_POST['gig-titel'];
        $price=$_POST['Price'];
        $number_of_review=$_POST['number-of-review'];
        $delivery_in_days=$_POST['delivery_in_days'];
        $category=$_POST['Category'];
        $details=$_POST['details'];
        $skills=$_POST['skills'];
        $user_id=$_SESSION['user_id'];
        //$status="posted";
        $uploads_dir = '../upload/';

       //gig image
       $file_name_gig = $_FILES['gig-image']['name'];// file name
        $file_tmp_gig = $_FILES['gig-image']['tmp_name'];//temp location
        $file_type_gig = $_FILES['gig-image']['type'];//type
        $file_size_gig = $_FILES['gig-image']['size'];//size
        move_uploaded_file($file_tmp_gig, $uploads_dir . $file_name_gig);

       // Inserting into the 'gig' table
        $sql1 = "INSERT INTO gig (Category, User_id, Titel, Image, Details, Skills, Price, Delivery_in_days, Post_dateTime) 
        VALUES ('$category', '$user_id', '$gigTitel', '$file_name_gig', '$details', '$skills', '$price', '$delivery_in_days', NOW())";
        if(mysqli_query($con, $sql1)){
            //echo  "saved";
             return true;
           } else {
            echo "Error: " . mysqli_error($con);
                return false;
            }
    
    }

    function getAllJobs() {
        $con = dbConnection();
        $sql = "SELECT * FROM job";
        $result = mysqli_query($con, $sql);
        if($result){
            //echo  "saved";
            $job_data = array();
            while ($row = mysqli_fetch_assoc($result)) {
                $job_data[] = $row;
            }
            return $job_data;
           } else {
            echo "Error: " . mysqli_error($con);
                return false;
            }

    }
    

?>