<?php

include'db.php';
session_start();

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = "select * from signinphp where email='$email'";
    $query = mysqli_query($conn,$email_search);

    $email_count = mysqli_num_rows($query);
    if($email_count){
        $email_pass = mysqli_fetch_assoc($query);
        $db_pass = $email_pass['password'];
        if($db_pass){
            echo"login sucess";
            ?>
            <script>
                location.replace("home.html");
            </script>
            <?php
        }
        else{
            echo"password wrong";
        }
    }

    else 
    {
            echo"invalid email";
        }
    
}
?>

















