<?php

    header("Content-Type: application/json");

    // API GET - no ?item query parameter
    if (($_SERVER['REQUEST_METHOD']==='GET') && (!isset($_GET['card']))) {

        include ("dbconn.php");
            
        $read = "SELECT * FROM AlbumList";

        $result = $conn->query($read);

        if (!$result) {
            echo $conn -> error;
        }

        // build a response array
        $api_response = array();

        while ($row = $result->fetch_assoc()) {
            
            array_push($api_response, $row);
        }
            
        // encode the response as JSON
        $response = json_encode($api_response);

        // echo out the response
        echo $response;
    }


    // API GET - with ?item query parameter
    if (($_SERVER['REQUEST_METHOD']==='GET') && (isset($_GET['item']))) {

        include ("dbconn.php");

        $positionid = $conn->real_escape_string($_GET["item"]);

        $read = "SELECT * FROM AlbumList WHERE id='$positionid' ";

        $result = $conn->query($read);

        if (!$result) {
            echo $conn -> error;
        }

        // build a response array
        $api_response = array();

        while ($row = $result->fetch_assoc()) {
            
            array_push($api_response, $row);
        }
            
        // encode the response as JSON
        $response = json_encode($api_response);

        // echo out the response
        echo $response;
    }

    // POST
    if (($_SERVER['REQUEST_METHOD']==='POST') && isset($_GET['newitem'])) {


        include ("dbconn.php");

        $positionid = $conn->real_escape_string($_POST["addposition"]);
        $user = $conn->real_escape_string($_POST["adduser"]);
        
        // create INSERT query string
		$insertsql = "INSERT INTO myalbums (myalbum_id, user_ids,position_id ) 
					  VALUES(NULL,'$user','$positionid')";	
		 
		// perform the query
		$result = $conn->query($insertsql);
 							  
		if (!$result) {
						 
			echo $conn->error;
						 
		 } else {

            header("HTTP/1.0 201 Creation success");
		}
    }

    if (($_SERVER['REQUEST_METHOD']==='POST') && isset($_GET['newitem'])) {

        include("dbconn.php");

        $sql = "SELECT * FROM users;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck>0){
            while ($row = mysqli_fetch_assoc($result)){
                echo $row['username']. "<br>";
            }
        }

    }

    ?>

