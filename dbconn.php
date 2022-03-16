<?php
    $host = "localhost";
    $user = "testuser";
    $pass = "password";
    $db = "projectdemo";

    $conn = new mysqli($host, $user, $pass, $db);

    if ($conn -> connect_error) {
        echo "there has been an error ".$conn->connect_error;
    }
    
    // else {
    //     echo "successful db connect";
    // }

    
?> 
