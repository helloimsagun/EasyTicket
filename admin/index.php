<?php

$link = mysqli_connect("localhost", "root", "", "easyticket");
$sql = "SELECT * FROM movie_db";


if(isset($_POST['submit'])){
        $insert_query = "INSERT INTO 
        movie_db (  movieImg,
                        movieName,
                        movieGenre,
                        movieDuration,
                        movieRel,
                        movieDirector,
                        movieActors,
                        movieDescription)
        VALUES (        'img/".$_POST['movieImg']."',
                        '".$_POST["movieName"]."',
                        '".$_POST["movieGenre"]."',
                        '".$_POST["movieDuration"]."',
                        '".$_POST["movieRel"]."',
                        '".$_POST["movieDirector"]."',
                        '".$_POST["movieActors"]."',
                        '".$_POST["movieDescription"]."')";
        mysqli_query($link,$insert_query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Admin Panel</title>
</head>
<body>
    <div class="admin-section-header">
        <div class="admin-logo">
            EasyTicket
        </div>
        <div class="admin-login-info">
            <a href="#">Welcome, Admin</a>
            <img class="admin-user-avatar" src="../img/avatar.png" alt="">
        </div>
    </div>
    <div class="admin-container">
        <div class="admin-section-column">
            <div class="admin-section-panel">
                <div class="admin-panel-section-header">
                    <h2>Movies</h2>
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <input placeholder="Movie Name" type="text" name="movieName" required>
                    <input placeholder="Genre" type="text" name="movieGenre" required>
                    <input placeholder="Duration" type="number" name="movieDuration" required>
                    <input placeholder="Release Date" type="date" min="<?php echo date("Y-m-d");?>" name="movieRel" required>
                    <input placeholder="Director" type="text" name="movieDirector" required>
                    <input placeholder="Actors" type="text" name="movieActors" required><br>
                    <textarea placeholder="Enter Description" name="movieDescription" rows="10" cols="30" required></textarea><br>
                    <input type="file" name="movieImg" accept="image/*">
                    <button type="submit" value="submit" name="submit" class="form-btn">ADD MOVIE</button> 
                </form>
            </div>
        </div>
            <div class="rmovie">
                <li><a href="movies.php">Delete Movie</a></li>
            </div>
    </div> 
</body>
</html>