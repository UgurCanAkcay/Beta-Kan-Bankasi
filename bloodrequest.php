<?php 
require 'file/connection.php'; 
session_start();
  if(!isset($_SESSION['hid']))
  {
  header('location:login.php');
  }
  else {
    $hid = $_SESSION['hid'];
    $sql = "select bloodrequest.*, receivers.* from bloodrequest, receivers where hid='$hid' && bloodrequest.rid=receivers.id";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<?php $title="Kan Bankası & Blood Bank | Kan Ihtiyaclari"; ?>
<?php require 'head.php'; ?>
<body>
	<?php require 'header.php'; ?>
	<div class="container cont">

		<?php require 'message.php'; ?>

	<table class="table table-responsive table-striped rounded mb-5">
		<tr><th colspan="9" class="title">Kan Ihtiyaclari</th></tr>
		<tr>
			<th>#</th>
			<th>İsim</th>
			<th>Email</th>
			<th>Sehir</th>
			<th>Telefon</th>
			<th>Kan Grubu</th>
			<th>Durumu</th>
			<th colspan="2">Aksiyon</th>
		</tr>

		    <div>
                <?php
                if ($result) {
                    $row =mysqli_num_rows( $result);
                    if ($row) { //echo "<b> Total ".$row." </b>";
                }else echo '<b style="color:white;background-color:red;padding:7px;border-radius: 15px 50px;">Henüz kimse talep etmedi. </b>';
            }
            ?>
            </div>

		<?php while($row = mysqli_fetch_array($result)) { ?>

		<tr>
			<td><?php echo ++$counter;?></td>
			<td><?php echo $row['rname'];?></td>
			<td><?php echo $row['remail'];?></td>
			<td><?php echo $row['rcity'];?></td>
			<td><?php echo $row['rphone'];?></td>
			<td><?php echo $row['bg'];?></td>
			<td><?php echo 'You have '.$row['status'];?></td>
			<td><?php if($row['status'] == 'Accepted'){ ?> <a href="" class="btn btn-success disabled">Kabul edildi</a> <?php }
			else{ ?>
				<a href="file/accept.php?reqid=<?php echo $row['reqid'];?>" class="btn btn-success">Kabul</a>
			<?php } ?>
			</td>
			<td><?php if($row['status'] == 'Rejected'){ ?> <a href="" class="btn btn-danger disabled">Reddedildi</a> <?php }
			else{ ?>
				<a href="file/reject.php?reqid=<?php echo $row['reqid'];?>" class="btn btn-danger">Reddet</a>
			<?php } ?>
			</td>
			
		</tr>
		<?php } ?>
	</table>
</div>
    <?php require 'footer.php'; ?>
</body>
</html>
<?php } ?>