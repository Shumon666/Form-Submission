<!DOCTYPE html>
<html>
<head>
<title> Form Submission </title>
</head>
<body>
<h1>Form Submission</h1>

<body>
    <h3>1.Basic Information</h3>
    </body>

<?php
$validateFirstName="";
$validateuserLastName="";
$username="";
$validateemail="";
$validatepass="";
$validategender="";
$validatedob="";
$validateReligion="";
$validatePresentAddress="";
$validatParmanentAdress="";
$validatePhone="";
$validatePersonalWebsiteLink="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $validateFirstName=$_REQUEST["First Name"];
    $validateuserLastName=$_REQUEST["Lastst Name"];
    $username=$_REQUEST["username"];
    $email=$_REQUEST["email"];
    $password=$_REQUEST["password"];
    $gender=$_REQUEST["gender"];
    $dob=$_REQUEST["dob"];
    $Religion=$_REQUEST["Religion"];
    $validatePresentAddress=$_REQUEST["Present Adress"];
    $validatParmanentAdress=$_REQUEST["Parmanent Adress"];
    $validatePhone=$_REQUEST["Phone "];
    $validatePersonalWebsiteLink=$_REQUEST["Personal Website Link"];

    $usernamelength= strlen($username);
    $passwordlength= strlen($password);
    

    if(empty($Firstname))
    {
        $validatename= "You can not submit without Firstname";
    }
    else
    {
        $validatename= "Your Firstname is: ".$Firstname;
    }
    if(empty($LastName))
    {
        $validateuserLastName= "You can not submit without LastName";
    }
    else
    {
        $validateuserLastName= "Your Firstname is: ".$LastName;
    }


    if(empty($email) || preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'))
    {
        $validateemail= "You have to enter a valid email";
    }
    else
    {
        $validateemail= "Your email is: ".$email;
    }

    if(empty($password) || $passwordlength < 6)
    {
        $validatepass= "Password is required and minimum lenth 6";
    }

    if(empty($username) || $usernamelength < 5)
    {
        $validateusername= "Username is required and minimum lenth 5";
    }

    if(empty($gender))
    {
        $validategender= "Gender is required";
    }

    if(empty($dob))
    {
        $validatedob= "Date of Birth is required";
    }
    if(empty($Religion))
    {
        $validateReligion= "Religion is required";
    }
    if(empty($PresentAdress))
    {
        $validatePresentAdress= "Present_Adress is required";
    }
    if(empty($PArmanentAdress))
    {
        $$validatPermanentAdress= "PArmanent_Adress is required";
    }
    if(empty($Phone))
    {
        $validatePhone= "Phone is required";
    }
    if(empty($PersonalWebsite))
    {
        $validatePersonalWebsiteLink= "Personal_Website Link is required";
    }
}
?>
<form  action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
  <table>
  	<tr>
  		<td>First Name: </td>
  		<td><input type="text" First Name="First Name"></td>
      <br>
      <?php echo $validateFirstName?>
  	</tr>

<form  action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
  	<tr>
  		<td>Lastst Name: </td>
  		<td><input type="text" Lastst Name="Lastst Name"></td>
      <br>
      <?php echo $validateuserLastName?>
  	</tr>
  	
  	
  	</tr>
  	<tr>
  		<td>Gender: </td>
  		<br>
  		<td>
			<input type="radio" id="male" name="gender" value="male">
			<label>Male</label><br>
			<input type="radio" id="female" name="gender" value="female">
			<label>Female</label><br>
			<input type="radio" id="other" name="gender" value="other">
			<label>Other</label>
		</td>
    <br>
      <?php echo $validategender?>
  	</tr>
  	<tr>
  		<td>Date of Birth</td>
  		<td><input type="date" name="dob"></td>
      <br>
      <?php echo $validatedob?>
  	</tr>


      <tr>
  		<td>Religion</td>
  		<td>
          <select>  
            <option value="Select">Select</option>}  
            <option value="Islam">Islam</option>  
            <option value="Hindu">Hindu</option>  
            <option value="Bodho">Bodho</option>  
            <option value="Christan">Christan</option>  
            <option value="Others">Others</option>  
            
          </select>
        </td>
      <?php echo $validateReligion?>
      <br></br>

      <tr>
  		<td>2.Contract Information: </td>
      <br>
      
  	</tr>
  	
  	</tr>
      <td>Present Adress: </td>
  		<td><input type="textarea" name="Present Adress"></td>
      <br>
      <?php echo $validatePresentAddress?>
  	</tr>
      <td>Parmanent Adress: </td>
  		<td><input type="textarea" name="Parmanent Adress"></td>
      <br>
      <?php echo $validatParmanentAdress?>
  	</tr>
      <td>Phone: </td>
  		<td><input type="tel" name="Phone"></td>
      <br>
      <?php echo $validatePhone?>

      <tr>

  		<td>Email: </td>
  		<td><input type="email" name="email"></td>
      <br>
      <?php echo $validateemail?>
  	</tr>
  	</tr>
      <td>Personal Website Link: </td>
  		<td><input type="url" name="Personal Website Link"></td>
      <br>
      <?php echo $validatePersonalWebsiteLink?>
  	</tr>
      <br>
      <tr>
  		<td>3.Account Information: </td>
      <br>
      <tr>
  		<td>Username: </td>
  		<td><input type="text" name="username"></td>
      <br>
      <?php echo $username?>
  	</tr>
  	<tr>
  		<td>Password: </td>
  		<td><input type="password" name="password"></td>
      <br>
      <?php echo $validatepass?>
  	</tr>
  	<tr>
  		<td>Confirm Password: </td>
  		<td><input type="password" name="c-password"></td>
      <br>
      <?php echo $validatepass?>

  </table>
  <input type="submit" value="Submit">
</form> 

</body>
</html>