<?php
session_start();

include_once "checkName.php";
include_once "checkEmail.php";

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

function fileWriteAppend(){
    $current_data = file_get_contents('../Model/user_information.json');
    $array_data = json_decode($current_data, true);
    $extra = array(
        'firstName' => $_POST['firstName'],
        'lastName' => $_POST['lastName'],
        'gender' => $_POST['gender'],
        'dateOfBirth' => $_POST['dateOfBirth'],
        'address' => $_POST['address'],
        'emailAddress' => $_POST['emailAddress'],
        'phoneNumber' => $_POST['phoneNumber'],
        'username' => $_POST['username'],
        'password' => $_POST['password']
    );
    $array_data[] = $extra;
    $final_data = json_encode($array_data);
    return $final_data;
}
function fileCreateWrite(){
    $file=fopen('../Model/user_information.json',"w");
    $array_data=array();
    $extra = array(
        'firstName' => $_POST['firstName'],
        'lastName' => $_POST['lastName'],
        'gender' => $_POST['gender'],
        'dateOfBirth' => $_POST['dateOfBirth'],
        'address' => $_POST['address'],
        'emailAddress' => $_POST['emailAddress'],
        'phoneNumber' => $_POST['phoneNumber'],
        'username' => $_POST['username'],
        'password' => $_POST['password']
    );
    $array_data[] = $extra;
    $final_data = json_encode($array_data);
    fclose($file);
    return $final_data;
}

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
} else {
    if(file_exists('../Model/user_information.json'))
{

     $final_data = fileWriteAppend();
     if(file_put_contents('../Model/user_information.json', $final_data)) {
          $message = "<label class='text-success'>Data added Success fully</p>";
     }
}
else
{
     $final_data = fileCreateWrite();
     if (file_put_contents('../Model/user_information.json', $final_data)) {
          $message = "<label class='text-success'>File createed and  data added Success fully</p>";
     }
}
header('location: ../View/index.php');
}