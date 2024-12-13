<?php 
$hostname = "localhost";
$user = "root";
$password = "";
$dbname = "online_book_store";

$connect = mysqli_connect($hostname,$user ,$password ,$dbname);


if(!$connect){
    echo "Error in Db connection Please check the database Server.";
    die();
}

?>