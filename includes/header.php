<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'styles.php' ?>
    <title></title>
</head>
<div class="navbar-brand">
    <a href="index.php">
        <h1 class="navbar-heading">EasyTicket</h1>
    </a>
</div>
<div class="navbar-container">
    <nav class="navbar-menu">
            <?php
                if (!isset($_SESSION['username'])) {
                    ?>
                    <ul><li><a href="reg.php">Signin</a></li></ul>
                    <?php
                }else{
                    $username = $_SESSION['username'];
                    echo "<li><p>$username <a href='./logout.php'>Log Out</a></p></li>";

                }
            ?>
    </nav>
</div>
<body> 
</body>
</html>