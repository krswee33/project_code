<?php

	// get the ID of the row
	$itemid = $_GET['Position'];
	
	// concatenate the ID onto the query parameter for the GET endpoint
	$endpoint = "http://localhost/website_project/api.php?item=$itemid";

	$resource = file_get_contents($endpoint);

	$data = json_decode($resource, true);
 
?>


<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="styles/mylist.css">
	</head>
<body>
        
	<div id="container">
		
		<div id="top">	
			<a href='display.php'>
				<div class='addright'>Back to my list</div>
			</a>
			
			<div id="title">My ToDo List</div>	
		</div>
			
		<div id="main">	
			<article>
				<?php	
				
					foreach ($data as $row) {
							
						//get data from column 'info'
						$albumname = $row['Album'];
							
						$artistname = $row['Artist'];
							
						//needs to be converted to be day-month-year
						//$datedue = date('d-m-Y', strtotime($datedue));

                        $imagedata = $row['Cover'];
							
						$position = $row["Position"];
						//$detailsdata = $row["details"];

						//$imgname = $row["imgpath"];
							
							
						echo " <h2>The Albums</h2> 
								
                        <p>$albumname</p>
										
								
					";}	

				?>
				
				          
			</article> 
		</div>
		
	</div>

</body>
</html>