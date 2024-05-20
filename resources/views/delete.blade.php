<?php
	include("connect.php");
	$del_id=$_REQUEST['del'];

	$sql="DELETE FROM `user` WHERE `id`= '$del_id'";

	$data=mysqli_query($conn, $sql);

	if ($data) {
		header("location:admin_data.php");
	}
	else{
		echo "Data not deleted";
	}
?>