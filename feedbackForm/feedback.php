<?php

    // variable for submit contact form
    $submit=false;
    if(isset($_POST['name'])){
        $server="localhost";
        $username="root";
        $password="";
        $database="portfolio";
            
            $con = mysqli_connect($server,$username,$password);
            
            if(!$con){
                die("Connection failed: " . mysqli_connect_error());
            }
            //  echo "Success connection to database"; 
            
            mysqli_select_db($con, $database);

            $name=$_POST['name'];
            $email=$_POST['email'];
            $msg=$_POST['msg'];
            $suggestions=$_POST['suggestions'];
            $sql="INSERT INTO `portfolio`.`feedback` (`name`, `email`, `msg`,`suggestions`, `date`) VALUES ('$name', '$email', '$msg','$suggestions', current_timestamp());";
            
            
            if ($con->query($sql) === true) {
                // Successfully inserted
                $submit = true;
    } 
            else{
                echo "insertion is failed Error :  $sql <br>$con->error ";
            }
            
            $con->close();
    }      
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="feedback.css">
</head>
<body>
    
    <div class="container"><br>
        <br><h1>Feedback Form</h1><br><!-- Vote of thanks -->
                     <?php
                           if($submit==true){

                               echo "<div class='thanks'>Thanks for submitting your response</div>";
                            } 
                     ?>
                     <br>
        <form action="feedback.php" method="post" id="feedbackForm">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message" id="message">Message:</label>
                <textarea id="msg" name="msg" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="suggestions" id="suggestion">Suggestions:</label>
                <textarea id="suggestions" name="suggestions" rows="4" required></textarea>
            </div>
            <button type="submit" id="submit">Submit Feedback</button>
            <div id="responseMessage" class="response-message"></div>
        </form>
    </div>
    <!-- <script src="feedback.js"></script> -->
</body>
</html>