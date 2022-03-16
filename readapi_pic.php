<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/yegor256/tacit@gh-pages/tacit-css-1.5.3.min.css" />
    <title>Read API Demo</title>
</head>

<body>
    <h1>10 Random Picsum Images</h1>

    <?php

if($_SERVER['REQUEST_METHOD']==='GET'){
    header("Content-Type: application /json");
            // get a random number for the page
            //$rand = rand(1, 10);

            // path for the API (random page, limit to 10 photos)
            //$apipath = "https://picsum.photos/v2/list?page={$rand}&limit=10";
            //$path = "https://api.nasa.gov/planetary/apod?api_key=TaAfg5tcpjse3aHASZxiTPLetbxIWYFCDnJHV2ev";
            $path = "http://localhost:8888/things2doapi/api.php";
            // get the contents of the API (JSON)
            $apijson = file_get_contents($path);

            // decode the JSON string into an array
            $arrayapi = json_decode($apijson, true);

            //print_r($arrayapi);

            // Iterate and display
            foreach ($arrayapi as $row) {
            
                print_r($row);

                // $imgurl = $arrayapi['id'];
                // $titlename = $arrayapi['type'];
                // echo "<img src='{$imgurl}' width='100px'> ";
                // echo "$titlename";
            }
        }
        ?> 
</body>
</html>

