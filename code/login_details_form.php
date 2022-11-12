<?php
include('val.php');
?>
<form name="form1ID" id="formID" method="post" action="login_details_insert.php">
  <table width="312" border="1">
    <tr>
      <td colspan="2">Login Details </td>
    </tr>
    <tr>
      <td width="165">Username</td>
      <td width="131"><input name="username" type="text" id="username" class="validate,[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input name="password" type="text" id="password" ></td>
    </tr>
    <tr>
      <td>Type</td>
      <td><input name="type" type="text" id="type" class="validate,[required,custom[onlyLetter]]"> </td>
    </tr>
    <tr>
      <td>Hintq</td>
      <td><input name="hintq" type="text" id="hintq" class="validate,[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Hinta</td>
      <td><input name="hinta" type="text" id="hinta" class="validate,[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit">
      <input type="reset" name="Reset" value="Reset"></td>
    </tr>
  </table>
</form>
