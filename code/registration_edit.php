<?php
include('db.php');
include('val.php');
$registration_id=$_REQUEST['registration_id'];
$sql="select * from registration where registration_id='$registration_id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res); 
?>

<form name="formID" id="formID" method="post" action="registration_update.php">
    <input type="hidden" name="registration_id" value="<?php echo $row['registration_id'];?>">

  <table width="342" border="1">
    <tr>
      <td colspan="2">Registration Details</td>
    </tr>
    <tr>
      <td width="167">First Name </td>
      <td width="159"><input name="first_name" type="text" id="first_name" class="validate,[required,custom[onlyLetter]]"  value="<?php echo $row['first_name'];?>"></td>
    </tr>
    <tr>
      <td>Last Name</td>
      <td><input name="last_name" type="text" id="last_name" class="validate,[required,custom[onlyLetter]]" value="<?php echo $row['last_name'];?>"></td>
    </tr>
    <tr>
      <td>DOB</td>
      <td><input name="dob" type="date" id="dob" value="<?php echo $row['dob'];?>"></td>
    </tr>
    <tr>
      <td>Mobile Number </td>
      <td><input name="mobile_no" type="text" id="mobile_no" class="validate,[required,custom[onlyNumber]]" value="<?php echo $row['mobile_no'];?>"></td>
    </tr>
    <tr>
      <td>City</td>
      <td><input name="city" type="text" id="city" class="validate,[required,custom[onlyLetter]]" value="<?php echo $row['city'];?>"></td>
    </tr>
    <tr>
      <td>State</td>
      <td><input name="state" type="text" id="state" class="validate,[required,custom[onlyLetter]]" value="<?php echo $row['state'];?>"></td>
    </tr>
    <tr>
      <td>Email-ID</td>
      <td><input name="email_id" type="text" id="email_id" class="validate,[required,custom[email]]" value="<?php echo $row['email_id'];?>"></td>
    </tr>
    <tr>
      <td>Hint Question</td>
      <td><input name="hintq" type="text" id="hintq" class="validate,[required,custom[onlyLetter]]" value="<?php echo $row['hintq'];?>"></td>
    </tr>
    <tr>
      <td>Hint Answer </td>
      <td><input name="hinta" type="text" id="hinta" class="validate,[required,custom[onlyLetter]]" value="<?php echo $row['hinta'];?>"></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input name="password" type="text" id="password" value="<?php echo $row['password'];?>"></td>
    </tr>
    <tr>
      <td>Confirm Password </td>
      <td><input name="confirm_password" type="text" id="confirm_password" value="<?php echo $row['confirm_password'];?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit">
      <input type="reset" name="Reset" value="Reset"></td>
    </tr>
  </table>
</form>