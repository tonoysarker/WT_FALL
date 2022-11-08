<?php
session_start();
?>

<html>
<head>
    <title>Log in</title>
</head>
<body>
    <form action="../Controller/log_in_verification.php" style="text-align: center;" method="POSt">
        <fieldset style="display: inline-block; text-align: left;">
            <br>
            <legend><h1>Log in</h1></legend>
            <label for="username">Username: </label>
            <input type="text" name="username" id="username">
            <?php
            if (isset($_SESSION['emptyUsername'])) {
                echo "<p style='color: red;'>Username is empty.</p>";
                unset($_SESSION['emptyUsername']);
            }
            ?>
            <br>
            <br>
            <label for="password">Password: </label>
            <input type="password" name="password" id="password">
            <?php
            if (isset($_SESSION['emptyPassword'])) {
                echo "<p style='color: red;'>Password is empty.</p>";
                unset($_SESSION['emptyPassword']);
            } else if(isset($_SESSION['weakPassword'])) {
                echo "<p style='color: red'>Password must be 6 characters long.</p>";
               unset($_SESSION['weakPassword']);
            } else if(isset($_SESSION['wrongPassword'])) {
                echo "<p style='color: red'>Username or password wrong.</p>";
               unset($_SESSION['wrongPassword']);
            }
            ?>
            <br>
            <br>
            <input type="submit" value="Log in">
            <br>
            <br>
        </fieldset>
    </form>
</body>
</html>