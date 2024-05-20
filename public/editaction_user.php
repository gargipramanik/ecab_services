<?php
	session_start();
	include("connect.php");
		$ep_id=$_REQUEST['uid'];
		$fname=$_REQUEST['efname'];
		$lname=$_REQUEST['elname'];
		$email=$_REQUEST['eemail'];
		$phone=$_REQUEST['ephone'];
		$gender=$_REQUEST['egender'];
		$fileName=$_FILES['eimage']['name'];
		$fileType= $_FILES['eimage']['type'];
		$fileTmp= $_FILES['eimage']['tmp_name'];
		$fileSize= $_FILES['eimage']['size'];
		$folder='uploads/'.$fileName;

		if(!file_exists("uploads")) mkdir("uploads");
			move_uploaded_file($fileTmp, $folder);

		$image_old=$_SESSION['oldimage'];

		if ($folder=='uploads/') {

			$sql="UPDATE `user` SET `fname`='$fname',`lname`='$lname',`email`='$email',`phone`='$phone',`gender`='$gender',`image`='$image_old' WHERE `id`='$ep_id'";
			$data=mysqli_query($conn, $sql);
			if ($data) {
				header("location:user_profile.php");
			}
			else{
				echo "Data not updated";
			}
				
		}
		else{
			$sql1="UPDATE `user` SET `fname`='$fname',`lname`='$lname',`email`='$email',`phone`='$phone',`gender`='$gender',`image`='$folder' WHERE `id`='$ep_id'";
			$data2=mysqli_query($conn, $sql1);
			if ($data2) {
				header("location:user_profile.php");
			}
			else{
				echo "Data not updated";
			}
		}


		

?>
