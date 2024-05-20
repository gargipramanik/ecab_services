<?php
	include("connect.php");
	session_start();
	$ep_id=$_REQUEST['ep'];

	$sql="SELECT * FROM `user` WHERE `id`= '$ep_id'";

	$data=mysqli_query($conn, $sql);
	$result=mysqli_fetch_assoc($data);
  $_SESSION['oldimage']=$result['image'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | e-cab</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	
	<link rel="stylesheet" type="text/css" href="css/person/edit.css">
    <link rel="stylesheet" type="text/css" href="css/about1.css">
    <link rel="stylesheet" type="text/css" href="css/about2.css">
    <link rel="stylesheet" type="text/css" href="css/about3.css">
    <link rel="stylesheet" type="text/css" href="css/btn.css">

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php
    include("navbar_profile.php");
    include("sidebar_profile.php");
?>


<div class="contanier-fluid auto_width_fluid">
    <div class="main">
       <div class="card">
            <div class="card-body">
              <h2>Edit your details</h2><br>
              <form action="editaction_user.php" method="post" enctype="multipart/form-data">
              <input type="hidden" name="uid" value="<?php echo $ep_id; ?>">
                <div class="row">
                  <div class="col">
                    <label for="efname" style="font-size: 15px;">First Name</label>
                    <input type="text" name="efname" id="efname" class="form-control" value="<?php echo $result['fname']; ?>">
                  </div>
                  <div class="col">
                    <label for="elname" style="font-size: 15px;">Last Name</label>
                    <input type="text" name="elname" id="elname" class="form-control" value="<?php echo $result['lname']; ?>">
                  </div>
                </div><br>
                <div class="row">
                  <div class="col">
                    <label for="eemail" style="font-size: 15px;">Email</label>
                    <input type="email" name="eemail" id="eemail" class="form-control" value="<?php echo $result['email']; ?>">
                  </div>
                  <div class="col">
                    <label for="ephone" style="font-size: 15px;">Phone</label>
                    <input type="number" name="ephone" id="ephone" class="form-control" value="<?php echo $result['phone']; ?>">
                  </div>
                </div><br>
                <div class="row">
                  <div class="col">
                    <label for="eimage" style="font-size: 15px;">Profile Picture</label><br>
                    <img src="<?php echo $result['image']; ?>" width="100px" height="100px">
                    <input type="file" name="eimage" id="eimage" class="form-control">
                  </div>
                  <div class="col">
                    <div class="form-group" style="margin-top: 70px; padding-left:25px;">
                      <label for="egender" required><b>Gender </b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input type="radio" name="egender" value="Male" id="m" <?php if($result['gender']=='Male'){echo "checked"; }; ?>>&nbsp;&nbsp;Male&nbsp;&nbsp;&nbsp;
                      <input type="radio" name="egender" value="Female" id="f" <?php if($result['gender']=='Female'){echo "checked"; }; ?>>&nbsp;&nbsp;Female&nbsp;&nbsp;&nbsp;
                      <input type="radio" name="egender" value="Other" id="o" <?php if($result['gender']=='Other'){echo "checked"; }; ?>>&nbsp;&nbsp;Other&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </div><br/>
                  </div>
                </div>

                <div class="text-right mt-3">
                  <button type="submit" class="btn btn-success">Save changes</button>&nbsp;&nbsp;&nbsp;
                  <button type="cancel" class="btn btn-default">Cancel</button>
                </div>
              </form>
            </div>
       </div>
    </div>
</div>
    

</body>
</html>