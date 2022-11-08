<?php
setcookie('username', $username, time() - 3600, '/');
setcookie('password', $password, time() - 3600, '/');
setcookie('authorized', true, time() - 3600, '/');
header('location: ../View/log_in.php');