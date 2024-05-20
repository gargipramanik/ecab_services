<?php
    //session_start();
    include("connect.php");
    $id=$_SESSION['id'];
    $sqli="SELECT * FROM `driver` WHERE `id`='$id'";

	$data=mysqli_query($conn, $sqli);
    $result=mysqli_fetch_assoc($data);

?>

<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport"
          content="width=device-width, 
                   initial-scale=1.0"> 
    <title>Bootstrap5 Sidebar</title> 
    <link rel="stylesheet" type="text/css" href="css/person/side.css">
    <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> 
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
</head> 
  
<body> 
  
    <div class="sidebar">
        <ul class="nav">
            <li>
                <a href="driver_profile.php">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="driver_details.php">
                    <i class="fa fa-car" aria-hidden="true"></i>
                    <span>Details</span>
                </a>
            </li>
            <li>
                <a href="edit_user.php?ep=<?php echo $result['id']; ?>">
                    <i class="fa fa-pen-to-square" aria-hidden="true"></i>
                    <span>Edit Details</span>
                </a>
            </li>
            <li>
                <a href="changepassword.php">
                    <i class="fa fa-gear" aria-hidden="true"></i>
                    <span>Change Password</span>
                </a>
            </li>
            <li>
                <a href="support.php">
                    <i class="fa fa-circle-info" aria-hidden="true"></i>
                    <span>Support</span>
                </a>
            </li>
        </ul>
            
    </div>

</body> 
  
</html>