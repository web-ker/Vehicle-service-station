<?php
include('val.php');
?>
<form name="formID" id="formID" method="post" action="registration_insert.php">
  <table width="342" border="1">
    <tr>
      <td colspan="2"> Registration Details</td>
    </tr>
    <tr>
      <td width="167">First Name </td>
      <td width="159"><input name="first_name" type="text" id="first_name" class="validate,[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Last Name</td>
      <td><input name="last_name" type="text" id="last_name" class="validate,[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>DOB</td>
      <td><input name="dob" type="date" id="dob"></td>
    </tr>
    <tr>
      <td>Mobile Number </td>
      <td>      <input type="text" name="textfield" class="validate,[required,custom[onlyNumber]]" pattern="[789][0-9]{9}"></td>
    </tr>
    <tr>
      <td>City</td>
      <td><input name="city" type="text" id="city" class="validate,[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>State</td>
      <td><input name="state" type="text" id="state" class="validate,[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Email-ID</td>
      <td><input name="email_id" type="text" id="email_id" class="validate,[required,custom[email]]"></td>
    </tr>
    <tr>
      <td>Hint Question</td>
      <td><input name="hintq" type="text" id="hintq" class="validate,[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Hint Answer </td>
      <td><input name="hinta" type="text" id="hinta" class="validate,[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input name="password" type="text" id="password"></td>
    </tr>
    <tr>
      <td>Confirm Password </td>
      <td><input name="confirm_password" type="text" id="confirm_password"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit">
      <input type="reset" name="Reset" value="Reset"></td>
    </tr>
  </table>
 </form>
