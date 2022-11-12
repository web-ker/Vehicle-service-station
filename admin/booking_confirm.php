<?php 
include('db.php');
$booking_id=$_REQUEST['booking_id'];
 $mob=$_REQUEST['mob'];
$time=$_REQUEST['time'];
$date=$_REQUEST['date'];

$sql="update booking_details set status='Confirmed' where booking_id='$booking_id'";
$conn->query($sql);

$msg1="Your Booking has been scheduled at ".$time." and Date ".$date." For More Details Contact 7760332042";
$msg=str_replace(' ','+', $msg1);
$m=file_get_contents("http://trans.vwgsms.com/api/mt/SendSMS?user=smsdemo&password=emo1234&senderid=VENTUR&channel=Trans&DCS=0&flashsms=0&number=".$mob."&text=".$msg."&route=6");

?>
<script>
alert("Ur Bokking Is Confirmed..");
document.location="booking_view.php";
</script>