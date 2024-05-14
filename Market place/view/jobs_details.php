<?php
session_start();
if(!isset($_SESSION['flag'])){
    header('location: ../view/login1.php');  
    
    }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order_details_buyer</title>
    <link rel="stylesheet" href="css.css">


</head>
<?php include "../include/topbar.php" ?>

<body>
    <h3>Order details</h3>
    <?php
    //echo $_REQUEST['jobData'];
    $jobData = json_decode($_REQUEST['jobData'],true);// use true to convert the output from object to associative array or you have to use -> arrow to access the object
    //print_r($jobData);
    //var_dump($jobData);
    //$jobId = $jobData->Job_id; // Use arrow notation for objects
    //$category = $jobData->Category; // Use arrow notation for objects
    //$jobTitel = $jobData['Titel'];
    //$category = $jobData['Category'];
    //echo $jobId;
    //echo " category  is :".$category;

    ?>
    <div class="card-2">
        <div class="card-left">
            <div class="space-around">
                <div class="titel"><?php echo $jobData['Titel'];?></div>
                <div class="date">Date :<?php echo  date('m/d/Y', strtotime($jobData['Post_dateTime']));?></div>
            </div>
            <div class="form-group">
                <div class="center1 " name="details">
                <?php echo $jobData['Details'];?>
                 <br> 
                 <br>
                 <?php echo $jobData['Skills'];?> 
                </div>
                
            </div>
            <?php 
            //if its a buyer dont create the buttons for order
            if($_SESSION['status']== "buyer"&& $_SESSION['user_id']==$jobData['User_id']){

                //echo 'eah its buyer';
                //echo $_SESSION['user_id'];
            }
            //if its a seller  create the buttons for order
            if($_SESSION['status']!= "buyer"&& $_SESSION['user_id']!=$jobData['User_id']){

                //echo 'eah its seller';
                //echo $_SESSION['user_id'];
            ?>
                <div> <a class="button-link2 space-around" href="../upload/<?php echo $jobData['Job_file'];?>">Files</a></div>
                <div class="margin-button">
                <a class="button-link2 space-around" href="job_proposal_submit.php?Job_id=<?php echo $jobData['Job_id']; ?>">Order</a>
                <a class="button-link2 space-around" href="#">Cancel</a>
                </div>
            <?php 
            }
            ?>
            

        </div>
        <div class="card-right2">
            <div class="space-around price2">Price: <label class="price"><?php echo $jobData['Price'];?> $</label></div>
        </div>
    </div>




</body>
<?php include "../include/bottombar.php" ?>

</html>