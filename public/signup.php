<?php
    include('../private/dbconnect.php');

    if (isset($_POST['signup'])) {
         $name = $_POST['name'];
         $mobile_number = $_POST['mobile_number'];
         $email =  $_POST['email'];
         $address = $_POST['address'];
         $password = $_POST['password'];
         $cpassword = $_POST['cpassword'];

         if ($password != $cpassword) {
             echo "<script> alert('Password Does Not Match'); </script>";
         }

         $check_sql = "SELECT * FROM `customer` WHERE `email`='$email'";
         $check_sql_run = mysqli_query($conn,$check_sql);

         if (mysqli_num_rows($check_sql_run) > 0) {
            echo "<script> alert('Account Already Exits'); 
            window.open('signup.php','_self');</script>";

            die();
         }

         $sql = "INSERT INTO `customer`(`name`, `mobile_number`, `email`, `address`, `password`) VALUES('$name', '$mobile_number', '$email', '$address', '$password')";
         $check_sql_run = mysqli_query($conn,$sql);

         if ($check_sql_run == true) {
            echo "<script> 
            alert('Successfully Inserted the Data');
            window.open('index.php','_self');
            </script>";
            
         }

         else{
            echo "<script> alert('Failed to insert the data'); </script>";
         }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - Customer</title>
</head>
<style>
    .container{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .box {
        border-radius: 20px;
        margin: auto;
        background: rgba(0, 0, 0, 0.8);
        padding: 40px 40px;
        color: #fff;
        width: 30%;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    form input{
        padding: 12px 5px;
        background: white;
        outline: none;
        border: none;
        color: black;
        border-radius: 5px;
        margin: 10px;
        font-weight: bold;
    }

    .box h2 {
        text-align: center;
    }

    
</style>
<body>
    <div class="container">
        <div class="box">
            <h2>Sign Up</h2>
            <form action="signup.php" method="post">
                <input type="text" name="name" placeholder="Name" required>
                <input type="number" name="mobile_number" placeholder="Mobile Number" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="address" placeholder="Address" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="cpassword" placeholder="Confirm Password" required>
                <input type="submit" name="signup" value="Sign Up">
            </form>
        </div>
    </div>
</body>
</html>