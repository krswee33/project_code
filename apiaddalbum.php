<?php

if (($_SERVER['REQUEST_METHOD']==='POST') && isset($_GET['newitem'])) {


    include ("dbconn.php");

    $positionid = $conn->real_escape_string($_POST["addposition"]);
    $user = $conn->real_escape_string($_POST["adduser"]);
    
    // create INSERT query string
    $insertsql = "INSERT INTO myalbums (myalbum_id, user_ids,position_id ) 
                  SELECT users.userid, myalbums.position_id
                  FROM users
                  INNER JOIN myalbums
                  ON users.userid, myalbums.user_ids";
     
    // perform the query
    $result = $conn->query($insertsql);
                           
    if (!$result) {
                     
        echo $conn->error;
                     
     } else {
         echo "success";

        header("HTTP/1.0 201 Creation success");
    }
}
?>
