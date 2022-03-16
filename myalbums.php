
<?php
    include("dbconn.php");
    
 
    $read = "SELECT * FROM MyAlbumList";
 
    $result = $conn->query($read);
 
    if (!$result) {
        echo $conn->error;    
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>Amazing Facts</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
 
<body>
 
 <div class="container">
 
        <div class="row">
                <div class="column"><h1>My Albums</h1></div>
        </div>

        <div class="row">
                <div class="column">
                        <a class="button" href="userDisplay.php">Back to main list</a>
                </div>
        </div>


    <!-- LOOPS THROUGH THE DB AND PRINTS CONTENTS OUT IN LIST FORM  -->
        <div class="row">
                <div class="column">
               
                <ul>
                <?php
                        while ($row = $result->fetch_assoc()) {
                           
                            $fact = $row['fact'];

                            // echo " <li >$fact <button><a href='delete.php?id=".$fact['fact']."'>Delete</a></button></li> ";  
                            //echo "<button><a href='delete.php?id=".$fact['fact']."'>Delete</a></button>";
                            
                            echo "<li>
                                    $fact
                            </li>";

                        }
                    ?>
                </ul>
         
                </div>
        </div>
       
       
 </div>
 
</body>
</html>