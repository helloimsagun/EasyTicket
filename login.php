<?php 
    session_start();

    error_reporting(0);

    $message = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login</title>
</head>
<body>
    <?php

    include 'dbcon.php';

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $email_search = "SELECT * FROM user_db where email='$email'";
        $query = mysqli_query($con,$email_search);

        $email_count = mysqli_num_rows($query);

        if($email_count){
            $email_pass = mysqli_fetch_assoc($query);

            $db_pass = $email_pass['password'];

            $_SESSION['username'] = $email_pass['username'];

            $pass_decode = password_verify($password, $db_pass);

            if($pass_decode){
                echo "login successful";
                ?>
                 <script>
                        location.replace("index.php");
                </script>   
                <?php
            }else{
            $message = "password Incorrect";
            }
        }else{
        $message = "Invalid Email";
        }
    }    

    ?>
    <div class="container">
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
        <?php if($message){
        ?>
            <div class='alert alert-danger'><?php echo $message;?></div>
        <?php }
        ?>
            <div class="form" >
                <h2>Login</h2>
                <input type="email" name="email" placeholder="E-mail" value=""required><br>
                <input type="password" name="password" placeholder="Password" value=""required><br>
                <button type="submit" name="submit" button class="btnn">Log In</button><br>
                <p>Don't have an account?<a href="reg.php">Create new Account</a><p>
            </div>
        </form>        
    </div>
</body>
</html>