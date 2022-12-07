<?php
$conn = mysqli_connect("localhost","root","","database1");
if(mysqli_connect_error()){
    echo"<script> alert('can not able to connect with database');</script>";
    exit();
}
?>