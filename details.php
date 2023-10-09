<!DOCTYPE html>
<html lang="en">
<?php 
        $id = $_GET['movieId'];
        $link = mysqli_connect("localhost", "root", "", "easyticket");

        $movieQuery = "SELECT * FROM movie_db WHERE movieId = $id"; 
        if($result = $link -> query($movieQuery)){
            if($result -> num_rows == 1){
                $row = $result -> fetch_array(MYSQLI_ASSOC);
?>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Details</title>
</head>

<body>
<div class="movie-show-container">
    <h2><a href="index.php">X</a></h2>
</div>

    
    <div class="detail-panel">
            <h1>DETAILS</h1>
    </div>       
        <div class="row">
                <div class="movie-boxa">
                    <?php
                        echo '<img src="'.$row['movieImg'].'" alt="">';
                        ?>
                </div>
                
        <div class="detail-panel-section">
            <div class="title"><?php echo $row['movieName']; ?></div>
            <div class="movie-information">
                <table>
                    <tr>
                        <td>GENRE:</td>
                        <td><?php echo $row['movieGenre']; ?></td>
                    </tr>
                    <tr>
                        <td>DURATION:</td>
                        <td><?php echo $row['movieDuration']; ?> min</td>
                    </tr>
                    <tr>
                        <td>RELEASE DATE:</td>
                        <td><?php echo $row['movieRel']; ?></td>
                    </tr>
                    <tr>
                        <td>DIRECTOR:</td>
                        <td><?php echo $row['movieDirector']; ?></td>
                    </tr>
                    <tr>
                        <td>ACTORS:</td>
                        <td><?php echo $row['movieActors']; ?></td>
                    </tr>
                    <tr>
                        <td>DESCRIPTION:</td>
                        <td><?php echo $row['movieDescription']; ?></td>
                    </tr>
                </table>
                <?php
            }
        }
                ?>
            </div>
        </div>
    </div>
    </div>
</body>

</html>