<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/yegor256/tacit@gh-pages/tacit-css-1.5.3.min.css" />
    <title>NASA API Demo</title>
</head>

<body>
    <h1>Nasa header</h1>

    <?php
            //echo "top <br><br>";

            // endpoint passing in API key as a parameter

            //$endpoint = "https://api.nasa.gov/planetary/apod?api_key=xgGdIVZls9RpFDflegpUWib6qFwSZeol29iexhnC";
            //$endpoint = "https://api.nationalize.io?name=nathaniel";
            $endpoint = "https://api.nasa.gov/planetary/apod?api_key=TaAfg5tcpjse3aHASZxiTPLetbxIWYFCDnJHV2ev";


            $opts = array("ssl"=>array( "verify_peer"=>false,"verify_peer_name"=>false,));
       
           $context = stream_context_create($opts);
           $jsonstring = file_get_contents($endpoint, false, $context);

            // get the contents of the API (JSON)

            //$jsonstring = file_get_contents($endpoint);

             // decode the JSON string into an array

            $array = json_decode($jsonstring, true);
            //echo " before var dump";
            echo "<pre>";
            var_dump($array);
            echo "</pre>";
            
            $imagetitle = $array['title'];
            $imagedesc = $array['explanation'];
            $imageurl = $array['url'];
           // echo "after var dump";

            // display the data

            echo "<h3>$imagetitle</h3>
            <img src='$imageurl' height='250px' width='250px'>
            <p>$imagedesc</p>";

           // echo "after api display call";


        ?> 
</body>
</html>

