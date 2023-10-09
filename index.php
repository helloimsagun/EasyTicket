<?php 
    session_start();
    if(!isset($_SESSION['username'])) {
        header("Location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>EasyTicket</title>
</head>
<?php
    $conn = new mysqli("localhost", "root", "", "easyticket");
    $sql = "SELECT * FROM movie_db";
    ?>
    <?php 
        
        include './includes/header.php';
    ?>
<body>
<div class="movie-show-container">
        <h1>Showing Movies</h1>

        <div class="movies-container">

            <?php
                if($result = $conn -> query($sql)){
                    if($result -> num_rows > 0){
                        while($row = $result -> fetch_array()){
                            ?>
                        <div class="movie-box">
                            <img src="<?php echo $row['movieImg'];?>" alt="">
                            <div class="movie-info">
                                <h3><?php echo $row["movieName"];?></h3>
                                <?php echo '<a href="details.php?movieId='.$row['movieId'].'">Detail</a>'?>
                            </div>
                        </div>
            <?php
                        }
                    }
                }
            ?>
            
        </div>
    </div>
    <div class="trailers-section">
        <h1>Trailers</h1>
        <div class="trailers-grid">
            <div class="trailers-grid-item">
                <img src="img/Brahmastra.jpg" alt="">
                <div class="trailer-item-info" data-video="JKa05nyUmuQ">
                    <h3>Brahmastra</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/wakandaForever.jpg" alt="">
                <div class="trailer-item-info" data-video="C8JZRySDcZQ">
                    <h3>Wakanda Forver</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/premgeet3.jpg" alt="">
                <div class="trailer-item-info" data-video="C8JZRySDcZQ">
                    <h3>Prem Geet 3</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
        </div>
    </div>
<footer>
    <?php 
        
        include './includes/footer.php';
    ?>
</footer>

</body>
</html>