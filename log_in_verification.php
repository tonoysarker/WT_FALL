<?php
include("../Model/connection.php");
session_start();

if (isset($_POST['login'])) {
$username = $_POST['username'];
$password = $_POST['password'];

$invalidInput = false;

if (empty($username)) {
    $_SESSION['emptyUsername'] = true;
    $invalidInput = true;
}
if (empty($password)) {
    $_SESSION['emptyPassword'] = true;
    $invalidInput = true;
}
if (strlen($password) < 6) {
    $_SESSION['weakPassword'] = true;
    $invalidInput = true;
}
if ($invalidInput) {
    header('location: ../View/log_in.php');
} else {
    $select_user = "select * from user where u_name='$username' AND pass='$password'";
    $query= mysqli_query($con, $select_user);
    $check_user = mysqli_num_rows($query);

    if($check_user == 1){

        $isset=true;

    if($isset){
              $_SESSION['username'] = $username;
                 setcookie("username",$username, time()+ 3600);
                 header('location: ../View/home.php'); 
             }
             else
             {
                header('location: ../View/log_in.php'); 
             }

    }
}
}