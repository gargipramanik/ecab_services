<!-- Sidebar -->
<?php
    include("connect.php");
    $id=$_SESSION['mid'];
    $sqli="SELECT * FROM `user` WHERE `id`='$id'";

	$data=mysqli_query($conn, $sqli);
    $result=mysqli_fetch_assoc($data);
?>
<div class="sidebar" id="mySidebar">
<div class="side-header">
    <img src="images/logo.png" width="120" height="120"> 
    <h5 style="margin-top:10px;">Hello <?php echo $result['fname']; ?>,</h5>
</div>

<hr style="border:1px solid; background-color:#8a7b6d; border-color:#3B3131;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="admin_profile.php" ><i class="fa fa-home"></i> Dashboard</a>
    <a href="user_data.php"><i class="fa fa-users"></i> Users</a>
    <a href="cab_data.php"><i class="fa fa-car"></i> Cabs</a>
    <a href="driver_data.php"><i class="fa fa-id-card"></i> Drivers</a>
    <a href="admin_data.php"><i class="fa fa-user-secret"></i> Admin Profile</a>
    <a href="support_data.php"><i class="fa fa-info"></i> Support</a>
  
  <!---->
</div>
 
<div id="main">
    <button class="openbtn" onclick="openNav()"><i class="fa fa-home"></i></button>
</div>


