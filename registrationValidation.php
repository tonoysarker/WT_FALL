<?php
include("../Model/connection.php");

session_start();
include_once "checkName.php";
include_once "checkEmail.php";
if(isset($_POST['sign_up'])){

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$dateOfBirth = $_POST['dateOfBirth'];
$address = $_POST['address'];
$emailAddress = $_POST['emailAddress'];
$phoneNumber = $_POST['phoneNumber'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

$invalidInput = false;


if (empty($firstName)) {
    $_SESSION['emptyFirstName'] = true;
    $invalidInput = true;
}
if (empty($lastName)) {
    $_SESSION['emptyLastName'] = true;
    $invalidInput = true;
}
if (empty($gender)) {
    $_SESSION['emptyGender'] = true;
    $invalidInput = true;
}
if (empty($dateOfBirth)) {
    $_SESSION['emptyDateOfBirth'] = true;
    $invalidInput = true;
}
if (empty($address)) {
    $_SESSION['emptyAddress'] = true;
    $invalidInput = true;
}
if (empty($emailAddress)) {
    $_SESSION['emptyEmailAddress'] = true;
    $invalidInput = true;
}
if (empty($phoneNumber)) {
    $_SESSION['emptyPhoneNumber'] = true;
    $invalidInput = true;
}
if (empty($username)) {
    $_SESSION['emptyUsername'] = true;
    $invalidInput = true;
}
if (empty($password)) {
    $_SESSION['emptyPassword'] = true;
    $invalidInput = true;
}
if (empty($confirmPassword)) {
    $_SESSION['emptyConfirmPassword'] = true;
    $invalidInput = true;
}
if (checkName($firstName)) {
    $_SESSION['invalidFirstName'] = true;
    $invalidInput = true;
}
if (checkName($lastName)) {
    $_SESSION['invalidLastName'] = true;
    $invalidInput = true;
}
if (checkEmail($emailAddress)) {
    $_SESSION['invalidEmailAddress'] = true;
    $invalidInput = true;
}
if (strlen($phoneNumber) != 11) {
    $_SESSION['invalidPhoneNumber'] = true;
    $invalidInput = true;
}
if (strlen($password) < 6) {
    $_SESSION['weakPassword'] = true;
    $invalidInput = true;
}
if ($password != $confirmPassword) {
    $_SESSION['unmatchedPassword'] = true;
    $invalidInput = true;
}
if ($invalidInput) {
    header('location: ../View/registration.php');
}
 else {
    if($password==$confirmPassword)
{
 
    $insert = "insert into user (f_name,l_name,gender,dob,address,email,phone,u_name,pass)
		values('$firstName','$lastName','$gender','$dateOfBirth','$address','$emailAddress','$phoneNumber','$username','$password')";

		$query = mysqli_query($con, $insert);
        if($query){
			
			
            header('location: ../View/log_in.php');
		}
        else{
            
            header('location: ../View/registration.php');
        }
  
}


}
}