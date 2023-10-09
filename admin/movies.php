<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Movies</title>
</head>
<?php
    $conn = new mysqli("localhost", "root", "", "easyticket");
    $sql = "SELECT * FROM movie_db";
    ?>
<body>
<div class="movie-show-container">
    <h1><a href="index.php"><</a></h1>
        <h2>Movies</h2>
        
        <div class="movies-container">
            <div class="row">
            <?php
                if($result = $conn -> query($sql)){
                    if($result -> num_rows > 0){
                        while($row = $result -> fetch_array()){
            ?>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="movie-box">
                        <img src="../<?php echo $row['movieImg'];?>" alt="" class="img-responsive">
                            <div class="movie-info">
                                <h3><?php echo $row["movieName"];?></h3>
                                <?php echo '<a href="delete.php?movieId='.$row['movieId'].'" title="Delete Record" >Delete</a>';?>
                            </div>
                    </div>
                </div>
            <?php
                        }
                    }
                }
            ?>
            </div>
        </div>
    </div>
</body>
</html>