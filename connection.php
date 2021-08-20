<?php
    $con = mysqli_connect("127.0.0.1","root","","bank","3307") or die(mysqli_error($con));
    
    if(!isset($_SESSION)){
        session_start();
    }
?>