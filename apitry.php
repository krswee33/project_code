<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Nasa</h1>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <?php
            
            header("Content-Type: application /json");
            // endpoint passing in API key as a parameter

            $endpoint = "https://api.nasa.gov/planetary/apod?api_key=xgGdIVZls9RpFDflegpUWib6qFwSZeol29iexhnC";
            //$endpoint = "https://api.nationalize.io?name=nathaniel";


            // get the contents of the API (JSON)

            $jsonstring = file_get_contents($endpoint);

             // decode the JSON string into an array

            $array = json_decode($jsonstring);



            $imagename = $array['name'];
            //$imagedesc = $array['explanation'];
            //$imageurl = $array['url'];


            // display the data
            
            echo "<h3>$imagename</h3>
            ";


           


            

                  

        ?> 

    

    
  </body>
</html>