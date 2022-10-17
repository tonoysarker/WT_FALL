<?php

   
    $firstNameError= "";
    $firstNameLength="";
    $lastNameError="";
    $lastNamelength="";
    $fNameError="";
    $fNameLength="";
    $emailId="";
    $gender="";
    
if(isset($_REQUEST["submit"]))
{
    if(empty($_REQUEST["fname"]))
    {
        $firstNameError= "First Name is required";
    }else
    {
        $firstNameError= "your first name is ".$_REQUEST["fname"];
    }
    if(strlen($_REQUEST["fname"])<8)
   {
    $firstNameLength= "; first name is not valid";
    }
    else
    {
        $firstNameLength="; your length is ok";
    }

}

if(isset($_REQUEST["submit"]))
{
    if(empty($_REQUEST["lname"]))
    {
        $lastNameError= "Last Name is required";
    }else
    {
        $lastNameError= "; your last name is ".$_REQUEST["lname"];
    }
    if(strlen($_REQUEST["lname"])<6)
   {
    $lastNamelength= "last name is not valid";
    }
    else
    {
        $lastNamelength=" your length is ok";
    }

}

if(isset($_REQUEST["submit"]))
{
    if(empty($_REQUEST["fathername"]))
    {
        $fNameError= "fathername is required";
    }else
    {
        $fNameError= "Father name is ".$_REQUEST["fathername"];
    }
    if(strlen($_REQUEST["fathername"])<8)
   {
    $fNameLength= "Father name is not valid";
    }
    else
    {
        $fameLength="father name  length is ok";
    }

}

if(isset($_REQUEST["submit"]))
{
    if (isset($_REQUEST["gender"]))
    {
        $gender= "Succuss";

    }else
    {
        $gender="no radio batton found";
    }
}

if(isset($_REQUEST["submit"]))
{
    if(strtolower($_REQUEST["emailId"]))
    {
        $emailId="enter valid email";
    }
    else
    {
        $emailId="email is ok";
    }
}


?>
