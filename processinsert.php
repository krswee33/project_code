<?php
 
    include('dbconn.php');
    include('signup.php');
 
    $mynamedata = $conn -> real_escape_string($_POST['username']);
    //$emaildata = $conn -> real_escape_string($_POST['email']);
    $passworddata = $conn -> real_escape_string($_POST['password']);



    $insertquery="INSERT INTO users (userid,username,password) VALUES (null, '$mynamedata','$passworddata')";
       
    $result = $conn -> query($insertquery);
   
    if(!$result) {
       
        echo $conn -> error;
   
    } else {
       
        //echo "<p>$myfactdata ----has been added to your database----</p>";
        // echo '<link  href="index.php">';

        // AFTER PROCESSING, TAKES YOU BACK TO YOUR PAGE TO SHOW YOU THE ADDED INFORMATION
        header("Location: index.php");
        exit();
       
    } 


?>

