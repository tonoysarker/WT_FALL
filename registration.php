<?php
session_start();
?>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <form action="../Controller/registrationValidation.php" style="text-align: center;" method="POST">
        <fieldset style="display: inline-block; text-align: left;">
            <legend><h1>Manager Registration</h1></legend>
            <label for="first_name">First name: </label>
            <input type="text" name="firstName" id="first_name">
            <?php
            if (isset($_SESSION['emptyFirstName'])) {
                echo "<p style='color: red'>First name is empty.</p>";
                unset($_SESSION['emptyFirstName']);
            } else if(isset($_SESSION['invalidFirstName'])) {
                echo "<p style='color: red'>First name is invalid.</p>";
                unset($_SESSION['invalidFirstName']);
            }
            ?>
            <br>
            <br>
            <label for="last_name">Last name: </label>
            <input type="text" name="lastName" id="last_name">
            <?php
            if (isset($_SESSION['emptyLastName'])) {
                echo "<p style='color: red'>Last name is empty.</p>";
                unset($_SESSION['emptyLastName']);
            } else if(isset($_SESSION['invalidLastName'])) {
                echo "<p style='color: red'>Last name is invalid.</p>";
                unset($_SESSION['invalidLastName']);
            }
            ?>
            <br>
            <br>
            <label>Gender: </label>
            <input type="radio" name="gender" id="male" value="Male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="Female">
            <label for="female">Female</label>
            <?php
            if (isset($_SESSION['emptyGender'])) {
                echo "<p style='color: red'>Gender is empty.</p>";
                unset($_SESSION['emptyGender']);
            }
            ?>
            <br>
            <br>
            <label for="date_of_birth">Date Of Birth: </label>
            <input type="date" name="dateOfBirth" id="date_of_birth">
            <?php
            if (isset($_SESSION['emptyDateOfBirth'])) {
                echo "<p style='color: red'>Date of birth is empty.</p>";
                unset($_SESSION['emptyDateOfBirth']);
            }
            ?>
            <br>
            <br>
            <label for="address">Address: </label>
            <input type="text" name="address" id="address">
            <?php
            if (isset($_SESSION['emptyAddress'])) {
                echo "<p style='color: red'>Address is empty.</p>";
                unset($_SESSION['emptyAddress']);
            }
            ?>
            <br>
            <br>
            <label for="email_address">Email Address: </label>
            <input type="email" name="emailAddress" id="email_address">
            <?php
            if (isset($_SESSION['emptyEmailAddress'])) {
                echo "<p style='color: red'>Email address is empty.</p>";
                unset($_SESSION['emptyEmailAddress']);
            } else if(isset($_SESSION['invalidEmailAddress'])) {
                echo "<p style='color: red'>Email address is invalid.</p>";
                unset($_SESSION['invalidEmailAddress']);
            }
            ?>
            <br>
            <br>
            <label for="phone_number">Phone number: </label>
            <input type="number" name="phoneNumber" id="phone_number">
            <?php
            if (isset($_SESSION['emptyPhoneNumber'])) {
                echo "<p style='color: red'>Phone number is empty.</p>";
                unset($_SESSION['emptyPhoneNumber']);
            } else if(isset($_SESSION['invalidPhoneNumber'])) {
                echo "<p style='color: red'>Phone number must have 11 digits.</p>";
                unset($_SESSION['invalidPhoneNumber']);
            }
            ?>
            <br>
            <br>
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
            }
            ?>
            <br>
            <br>
            <label for="confirm_password">Connfirm password: </label>
            <input type="password" name="confirmPassword" id="confirm_password">
            <?php
            if (isset($_SESSION['emptyConfirmPassword'])) {
                echo "<p style='color: red;'>Confirm password is empty.</p>";
                unset($_SESSION['emptyConfirmPassword']);
            } else if(isset($_SESSION['unmatchedPassword'])) {
                echo "<p style='color: red'>Password and confirm password must be same.</p>";
                unset($_SESSION['unmatchedPassword']);
            }
            ?>
            <br>
            <br>
            <input type="submit" value="Register">
            <br>
            <br>
        </fieldset>
    </form>
</body>
</html>