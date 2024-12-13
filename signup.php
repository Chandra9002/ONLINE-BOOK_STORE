<?php

include('dbconnection.php');
if(isset($_POST['submit'])) {
    


    $name = $_POST['full-name'];
    $email = $_POST['email'];
    $contact = $_POST['mobile'];
    $address = $_POST['address'];
    $password = $_POST['password'];


    
    

    $sql = "insert into curdoperation(full-name,email,mobile,address,password)values('$name','$email', '$contact','$address','$password')";
   

    

    // print_r($query);
    // die();

    
    
        echo "<script>alert('data inserted sucessfully')</script>";
    } else {
        echo "<script>alert('there is an error')</script>";

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online_book_store- Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="signup-wrapper">
        <div class="signup-container">
            <h2>Create Your Account</h2>
            <p>Join us and start order book today!</p>
            <form action="signup.php" method="POST">
                <div class="input-group">
                    <label for="full-name"> Name</label>
                    <input type="text" id="full-name" name="full-name" required placeholder="Enter your  name">
                </div>
                <div class="input-group">
                    <label for="email">Email </label>
                    <input type="email" id="email" name="email" required placeholder="Enter your email">
                </div>
                <div class="input-group">
                    <label for="mobile">contact</label>
                    <input type="number" id="mobile" name="mobile" required placeholder="Enter your contact number">
                </div>
                <div class="input-group">
                    <label for="email">address</label>
                    <input type="text" id="address" name="address" required placeholder="Enter your address">
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required placeholder="Enter a password">
                </div>
               
                <button type="submit" class="btn" name="submit">Sign Up</button>
                <div class="login-link">
                    Already have an account? <a href="login.html">Log in</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

