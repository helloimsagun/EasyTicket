<?php 
    session_start();

    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Register</title>
</head>
<body>
    <?php

    include 'dbcon.php';

    if(isset($_POST['submit'])){
        $username= mysqli_real_escape_string($con, $_POST['username']);
        $email= mysqli_real_escape_string($con, $_POST['email']);
        $mobile= mysqli_real_escape_string($con, $_POST['mobile']);
        $password= mysqli_real_escape_string($con, $_POST['password']);
        $cpassword= mysqli_real_escape_string($con, $_POST['cpassword']);
        
        $pass = password_hash($password, PASSWORD_BCRYPT);
        $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

        $emailquery = "SELECT * FROM user_db where email='$email'";
        $query = mysqli_query ($con,$emailquery);

        $emailcount = mysqli_num_rows($query);

        

        if($emailcount>0){
            echo "email already exists";
        }else{

            if(preg_match('/^[0-9]{10}+$/', $mobile)) {
                if($password ===$cpassword){
            
                    $insertquery = "insert into user_db( username, email, mobile, password, cpassword) values('$username','$email','$mobile','$pass','$cpass')"; 
    
                    $iquery = mysqli_query($con, $insertquery);
    
                    if($iquery){
                        echo "Inserted Successfull";
                        header("location: login.php");
                    }
                } else {
                    echo "Invalid Password";
                }
            }else{
                echo "Not Inserted";
            }
        }
    }
    ?>
    <div class="container">
        <form action="" method="POST">
            <div class="form">
                <h2>Register</h2>
                <input type="name" name="username" placeholder="User Name" value=""required><br>
                <input type="email" name="email" placeholder="Email"value=""required><br>
                <input type="mobile" name="mobile" placeholder="Mobile No."value=""required><br>       
                <input type="password" name="password" placeholder="Password"value=""required><br>
                <input type="password" name="cpassword" placeholder="Confirm Password"value=""required><br>
                <button type="signup" name="submit" button class="btnn">Sign Up</button><br>
                <p>Already have an Account?<a href="login.php">Login</a></p>
            </div>   
        </form>    
    </div>
</body>
</html>