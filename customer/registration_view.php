<form name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td>Registration Id </td>
      <td>First Name </td>
      <td>Last Name </td>
      <td>DOB</td>
      <td>Mobile No</td>
      <td>City</td>
      <td>State</td>
      <td>Email Id</td>
      <td>HintQ</td>
      <td>HintA</td>
      <td>Password</td>
      <td>Confirm Password </td>
      <td>Edit</td>
      <td>Delete</td>
    </tr>
    <?php
  include('db.php');
	$sql="select * from registration";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res))
	{
  ?>
    <tr>
      <td>&nbsp;<?php echo $row['registration_id'];?></td>
      <td>&nbsp;<?php echo $row['first_name'];?></td>
      <td>&nbsp;<?php echo $row['last_name'];?></td>
      <td>&nbsp;<?php echo $row['dob'];?></td>
      <td>&nbsp;<?php echo $row['mobile_no'];?></td>
      <td>&nbsp;<?php echo $row['city'];?></td>
      <td>&nbsp;<?php echo $row['state'];?></td>
      <td>&nbsp;<?php echo $row['email_id'];?></td>
      <td>&nbsp;<?php echo $row['hintq'];?></td>
      <td>&nbsp;<?php echo $row['hinta'];?></td>
      <td>&nbsp;<?php echo $row['password'];?></td>
      <td>&nbsp;<?php echo $row['confirm_password'];?></td>
      <td>&nbsp;<a href="registration_edit.php?registration_id=<?php echo $row['registration_id'];?>">edit</a></td>
      <td>&nbsp;<a href="registration_delete.php?registration_id=<?php echo $row['registration_id'];?>">delete</a></td>
    </tr>
  <?php 
  }
  ?>
  </table>
</form>