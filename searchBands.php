<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    
    <title>Funda Of Web IT</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Search for your favourite artists by name </h4>
                        <a class="btn btn-primary" href="userHome.php" style="float:right"role="button">HOME</a>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if (isset($_GET['search'])) {
                                                                                                echo $_GET['search'];
                                                                                            } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary"> Search</button>


                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Rank</th>
                                    <th>Band</th>
                                    <th>Album</th>
                                    <th>Year</th>
                                    

                                    
                                </tr>
                            </thead>
                            <tbody>

                            
                                <?php
                                // include("dbconn.php");
                                $host = "localhost";
                                $user = "testuser";
                                $pw = "password";
                                $db = "projectdemo";

                                $conn = new mysqli($host, $user, $pw, $db);

                                if ($conn->connect_error) {

                                    $check = "Not connected " . $conn->connect_error;
                                }

                                if(isset($_GET['search']))
                                    {
                                        $searchvalues = $_GET['search'];
                                        //$searchvalues = preg_replace("#[^0-9a-z]#","",$searchvalues);

                                        $query = ("SELECT * FROM AlbumList WHERE Artist  LIKE '%$searchvalues%' ") or die ("Check your spelling!");
                                        $query_run = mysqli_query($conn, $query);
                                        $query_results = mysqli_num_rows($query_run);

                                        if($query_results > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['Position']; ?></td>
                                                    <td><?= $items['Artist']; ?></td>
                                                    <td><?= $items['Album']; ?></td>
                                                    <td><?= $items['Year']; ?></td>
                                                   



                                                   
                                                </tr>
                                                <?php
                                            }
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                            <td colspan="4">No Record Found</td>
                                        </tr>
                                    }
                                <?php
                                    }
                                
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>