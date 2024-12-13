<?php
include('dbconnection.php');
if(isset($_POST['submit'])){
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Email = $_POST['Email'];
    $Address = $_POST['Address'];
    $ContactNumber = $_POST['ContactNumber'];

//     print_r($_POST);
// die();

    $query = mysqli_query($con, "insert into customer(FirstName, LastName, Email, Address, ContactNumber) Values('$FirstName', '$LastName','$Email','$Address', '$ContactNumber')");
    if($query){
        echo "<script>alert('data inserted successfully')</script>";
    }else{
        echo "<script>alert('there is an error')</script>";
    }
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="customer.php" method="post">
        <label for="">FirstName:</label>
        <input type="text" name="FirstName"><br><br>

        <label for="">LastName:</label>
        <input type="text" name="LastName"><br><br>

        <label for="">Email:</label>
        <input type="email" name="Email"><br><br>

        <label for="">Address</label>
        <input type="text" name="Address"><br><br>

        <label for="">ContactNumber</label>
        <input type="number" name="ContactNumber"><br><br>

        <button type="submit" name="submit">submit</button>
    </form>
</body>
</html>