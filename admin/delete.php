<?php 
    $id = $_GET['movieId'];
    $link = mysqli_connect("localhost", "root", "", "easyticket");

    $sql = "DELETE FROM movie_db WHERE movieId = $id";

    if ($link->query($sql) === TRUE) {
        header('Location: movies.php');
        exit;
    } else {
        echo "Error deleting record: " . $link->error;
    }
?>