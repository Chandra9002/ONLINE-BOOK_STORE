<?php
session_start();
if(isset($_SESSION['userid'])){

    unset($_SESSION['userid']);
    header(header: 'location:login.php');

}else{
    echo "session is not set yet";
}
    ?>