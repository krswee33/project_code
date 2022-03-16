

 <?php
include("dbconn.php");


header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD']==='GET') {

    // return
    if(isset($_GET['albums'])){

    $read =  getAlbum();

    searchdb($read); //this just calls a function 


function searchdb($read){

    include("dbconn.php");
    //send result to search database
    $results = $conn->query($read); 
 
    if (!$results) { 
        echo $conn->error; 
        
    } 

    $api_response = array();

    while ($row = $results->fetch_assoc()){
        array_push($api_response, $row);
    }

    $response = json_encode($api_response);

    echo $response;// this sends the response back to the webpage
}
    }


//this is the query:

}
?>
