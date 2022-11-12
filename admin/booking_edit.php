<?php 
include('db.php');
$booking_id=$_REQUEST['booking_id'];
$sql="select * from booking_details where booking_id='$booking_id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>
<form name="form1" method="post" action="booking_update.php">
<input type="hidden" name="$booking_id" value="<?php echo $row['booking_id'];?>">
  <p align="center"><h1 align="center"> booking_details </h1>
  <div align="center">
    <table width="20%"  border="0">
      <tr>
        <td>Customer_id</td>
        <td><input name="customer_id" type="text" id="customer_id" value="<?php echo $row['customer_id'];?>"></td>
      </tr>
      <tr>
        <td>service_id</td>
        <td><input name="service_id" type="text" id="service_id" value="<?php echo $row['service_id'];?>"></td>
      </tr>
      <tr>
        <td>car_id</td>
        <td><input name="car_id" type="text" id="car_id" value="<?php echo $row['car_id'];?>"></td>
      </tr>
      <tr>
        <td>booking_time</td>
        <td><input name="booking_time" type="time" id="booking_time" value="<?php echo $row['booking_time'];?>"></td>
      </tr>
      <tr>
        <td>booking_date</td>
        <td><input name="booking_date" type="date" id="booking_date" value="<?php echo $row['booking_date'];?>"></td>
      </tr>
	  <tr>
        <td>status</td>
        <td><input name="status" type="text" id="status" value="<?php echo $row['status'];?>"></td>
      </tr>
       <tr>
        <td colspan="2">         <div align="center">
           <input type="submit" name="Submit" value="Submit">
           <input type="reset" name="Reset" value="Reset">
        </div></td>
       </tr>
     
  </table>
    </p>
  </div>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
</form>
