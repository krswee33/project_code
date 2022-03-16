<?php
include("dbconn.php");

//DB IS 'PROJECT DEMO'
$searchvalues = $_GET['search'];
$schedule = " SELECT * FROM Album WHERE Artist LIKE '%$searchvalues%' ";

$scheduleresults = $conn->query($schedule);

if (!$scheduleresults) {
    echo $conn->error;
    exit();
}

?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/picnic">

    <title>Hello, world!</title>


<body>

    <a class="btn btn-primary" href="userHome.php" role="button">HOME</a>
    <br>
    <br>



    <div id='container'>
        <div id='dynamic'></div>
        <div class='flex two three-800 four-1200' id='newrows'>";

            <?php
            while ($row = $scheduleresults->fetch_assoc()) {
                $albumname = $row['Album'];
                $artistname = $row['Artist'];
                $position = $row['Position'];


                $cover = $row['Cover'];
                $image = $row['Thumbnail'];
                $coverdata = base64_encode(file_get_contents($cover));
                $imageData = base64_encode(file_get_contents($image));


                echo "
    
    <div>
    
        
        <article class='card '>

            <header> 
            
                <h4>{$position} . {$albumname}</h4> 


            </header>


            <p> 
                {$artistname} 
                <a href='addalbum.php' class='btn btn-primary' role='button' data-bs-toggle='button'>+</a>

            </p>


            
            <img style='height:200px;width:200px;' src= $cover>


          

        </article>
    
</div>
    
    
    ";
            }

            ?>


</body>

</html>