
<?php

session_start();
// echo "<p>Hello </p> "; 
// echo $_SESSION['username'];


include('dbconn.php');
//include('auth_session.php');

 $query = "SELECT * FROM users ";


 $result   = mysqli_query($conn, $query);

// $name = ($_GET['username']);

// echo "$name";
?>

<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/picnic">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  <title>Homepage</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="signup.php">Register</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Logout</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            
          </li> -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              My Profile
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">My Albums</a></li>
              <li><a class="dropdown-item" href="#">Top 5 </a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>

          
          

        </ul>
        <!-- <form class="d-flex" action="" method="GET">
          <input class="form-control me-2" name="search" value=<?php if(isset($_GET['search'])) {echo $_GET['search'];}?> placeholder="Search data" >
          <button class="btn btn-primary"  type="submit">Search</button>
        </form> -->
        <a class="btn btn-primary" href="searchBands.php" role="button">Search Artists</a>

      </div>
    </div>
  </nav>


 


  <div>
    <img src="img/Rolling-Stone-logo.jpeg" class="img-fluid" >


  </div>

  

  <div class="mx-auto lineup" style="width: 800px";>
  <p>  
            <?php
            echo "<p>Hello </p> "; 
            echo $_SESSION['username'];
            ?>
            </p>
    <H1 class="homepagefont">THE TOP 500 ALBUMS OF ALL TIME</H1>
    <h2>Selected by the music industry, rated by you.</h2>
    <a href="displaycardsapi.php" type="button" class="btn btn-primary btn-lg">show me the albums</a>
  </div>

  <!-- CODE THAT DISPLAYS CARDS -->

  <div id='container'>
        <div id='dynamic'></div>
        <div class='flex two three-800 four-1200' id='newrows'>";
				
				<?php
					
					// iterate through result set 
					foreach ($data as $row) {
							
						$Position = $row['Position'];
						// get data from column 'info'
						$albumname = $row['Album'];
								
						//get data from column 'duedate'  
						$artistname = $row['Artist'];
						$coverart = $row['Cover'];
						
						 echo "<div>
						
							<article class='card '>
					
								<header> 
									<h4>{$position} . {$albumname}</h4> 
								</header>
					
								<p> 
									{$artistname} 
									<a href='addalbum.php' class='btn btn-primary' role='button' data-bs-toggle='button'>+</a>
								</p>
					
								<img style='height:200px;width:200px;' src= $coverart>
					
							</article>
						
					</div>" ;

					}	
					
				?>
					
			
		</div>
		
	</div>



  


  



  <?php
include("footer.html");
  ?>









</body>

</html>