<?php
	include("connect.php");
	$del_id=$_REQUEST['del'];

	$sql="DELETE FROM `query` WHERE `id`= '$del_id'";

	$data=mysqli_query($conn, $sql);

	if ($data) {
		header("location:support_data.php");
	}
	else{
		echo "Data not deleted";
	}
?>