<?php
    include "connect.php";
    // Username check
    if(isset($_POST["log"])){
        $username = $_POST["username"];
        $result = mysqli_query($conn, "SELECT * FROM adminlist WHERE username='$username'");
        if(mysqli_num_rows($result) > 0){
            header("location: ../pages/passwordPage.php");
        } else {
            $errorUser = true;
        }   
    }

    // Password check
    if(isset($_POST["passbutton"])){
        $password = $_POST["password"];
        $resultP = mysqli_query($conn, "SELECT * FROM adminlist WHERE password='$password'");
        if(mysqli_num_rows($resultP) > 0){
            header("location: ../pages/admin-only/admin.php");
        } else {
            $errorPass = true;
        }
    }
?>