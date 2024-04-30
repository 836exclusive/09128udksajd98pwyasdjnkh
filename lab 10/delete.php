<?php
	$id=$_GET['id'];
	include('config.php');
	mysqli_query($conn,"delete from `registrations` where id='$id'");
	header('location:index.php');
?>