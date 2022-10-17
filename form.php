<?php
include("../Process/process.php")
?>
<html>
    <head>
        <title> Form </title>
</head>
<body>
    <h1> Manager Registration Form </h1>
    <form action= "" method="post" >
        <table>
            <tr>
                <td> Applicant Name </td>

                <td> <select name="name">
                  <option value="Mr.">  Mr </option>
                  <option value="Mrs.">  Mrs </option>
</select>

<input type= "text" name= "fname"  placeholder="Enter Your first Name"> </td>
<td> Last Name </td>
<td><input type= "text" name= "lname"  placeholder="Enter Your last Name"> 
</td>
<td> <?php echo $firstNameError; ?> </td>
<td> <?php echo $firstNameLength; ?> </td>
<td> <?php echo $lastNameError; ?> </td>
<td> <?php echo $lastNamelength; ?> </td>

</tr>

<tr> 
    <td> Father's Name </td>
    <td> <input type = "text" name= "fathername"  placeholder ="Enter your father's name" > </td>
    <td> <?php echo $fNameError; ?> </td>
    <td> <?php echo $fNameLength; ?> </td>

</tr>
<tr>
<td> Mother's Name </td>
    <td> <input type = "text" name= "Mothername" placeholder ="Enter your Mother's name" > </td>
</tr> 
<tr>
   <td>
    <label for="birthday">Date of Birth :</label>
</td>
<td>
<input type="date" id="birthday" name="birthday">
</td>

</tr>

<tr> 
    <td> Gender </td>
   <td> <input type="radio" id="html" name="gender" value="Male"> Male </td>
   <td> <input type="radio" id="html" name="gender" value="Male"> Female </td>
   <td> <?php echo $gender; ?> </td>
</tr>
<tr>
    <td> Email Id </td>
    <td> <input id= "email" type = "email" name="emailId" placeholder = "Enter Your Email"> </td>
    <td> <?php echo $emailId; ?> </td>

</tr>
<tr>
    <td> Mobile Number </td>
    <td> <input place holder = "Enter 11 digit mobile no" type = "text" name= "idNumber" > </td>
</tr>
<tr>
<tr>
    <td>  user name </td>
    <td> <input place holder = "Enter your user name" type = "text" name="username"  > </td>
</tr>
<tr>
    <td>  password </td>
    <td> <input place holder = "Enter your password" type = "text" name="password" id="password" > </td>
</tr>
<tr>
    <td><input type="submit" name= "submit" value= "submit"</td>
    <td><input type="Reset" name= "Reset" value= "Reset"</td>
</tr>
</table>
</form>


    
</body>
</html>