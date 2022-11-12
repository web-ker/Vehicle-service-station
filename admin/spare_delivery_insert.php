<?php
$jobcard_id=$_POST['jobcard_id'];
$item_id=$_POST['item_id'];
$d_item_qty=$_POST['d_item_qty'];
$labour_charges=$_POST['labour_charges'];
$date=$_POST['date'];
include('db.php');
$sql="insert into spare_delivery values(null,'$jobcard_id','$item_id','$d_item_qty','$labour_charges','$date')";
$conn->query($sql);
?>
<script>
alert('Spare Added successfully...');
document.location="spare_delivery_view.php?jobcard_id=<?php echo $jobcard_id; ?>";
</script>