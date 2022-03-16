<?php
$endpoint = "http://localhost:8888/website_project/apimain.php";
$resource = file_get_contents($endpoint);
$data = json_decode($resource, true);
?>

<!DOCTYPE html>
<html>

<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<title>All Albums</title>
	<link rel="stylesheet" href="mylist.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/picnic">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">;
</head>

<body>
	<p> <a class='btn btn-primary' href='userHome.php' role='button'>HOME</a></p>
	<br>
	<br>



	<div id='container'>
		<div id='dynamic'></div>
		<div class='flex two three-800 four-1200' id='newrows'>";

			<?php

			// iterate through result set 
			$counter = '0';
			foreach ($data as $row) {

				$Position = $row['Position'];
				// get data from column 'info'
				$albumname = $row['Album'];

				//get data from column 'duedate'  
				$artistname = $row['Artist'];
				$coverart = $row['Cover'];
				$counter++;
				

				echo "<div>

							<article class='card '>
					
								<header> 
								
									<h4> {$counter}. {$albumname}</h4> 
								</header>
					
								<p> 
									{$artistname}
								</p>
					
								<img style='height:200px;max-width:200px;' src= {$coverart} > 
								<a href='adduseralbum.php' type='button' style='float:right' method='POST' class='btn btn-primary'>Add </a>

					
					
							</article>
						
								</div>";
			}

			

			?>


		</div>

	</div>
</body>

</html>

<!-- <a href='adduseralbum.php' class='btn btn-primary' role='button' data-bs-toggle='button'>+</a> -->

<!-- <form name='mylist' method='POST'action='submit' class='btn btn-primary' role='button' data-bs-toggle='button' >+</form> -->