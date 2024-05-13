<?php
require_once('../model/userModel.php');
$job_data = getAllJobs();
if (!empty($job_data)){
    //foreach ($job_data as $job) {
        // Print values of each row
        //echo "Category: " . $job['Category'] . "<br>";
        //echo "User ID: " . $job['User_id'] . "<br>";
        //echo "Title: " . $job['Job_id'] . "<br>";
        // Similarly, print other columns as needed
        //echo "<br>"; // Add line break for better readability between rows
    //}
    //header('location: ../view/dashboard.php');
    $data = json_encode($job_data);
    echo $data;
}
?>