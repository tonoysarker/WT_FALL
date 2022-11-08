<?php
session_start();

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
    $data = file_get_contents('../Model/user_information.json');
    $json_arr = json_decode($data, true);
    foreach ($json_arr as $key => $value) {
        if($value['username'] == $username && $value['password'] == $password) {
            setcookie('username', $username, time() + 3600, '/');
            setcookie('password', $password, time() + 3600, '/');
            setcookie('authorized', true, time() + 3600, '/');
            header('location: ../View/home.php');
        } else {
            $_SESSION['wrongPassword'] = true;
            header('location: ../View/log_in.php');
            unset($_SESSION['wrongPassword']);
        }
    }
}