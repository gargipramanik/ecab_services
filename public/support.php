<?php
    include("connect.php");
    if(isset($_REQUEST['submit'])){
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $phone=$_REQUEST['number'];
        $query=$_REQUEST['query'];


        $sql="INSERT INTO `query`(`id`, `name`, `email`, `phone`, `query`) VALUES ('','$name','$email','$phone','$query')";

        $data=mysqli_query($conn, $sql);

        if($data){
            echo "<script>alert('Query posted')</script>";
            echo "<script>window.location.href=support.php</script>";
        }
        else{
            echo "<script>alert('Some problem occured. Please try sometimes later!')<script>";
            echo "<script>window.location.href=support.php</script>";

        }
    }
session_start();
    $id=$_SESSION['id'];
    $sqli="SELECT * FROM `user` WHERE `id`='$id'";

	$data=mysqli_query($conn, $sqli);
    $result=mysqli_fetch_assoc($data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | e-cab</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
    <link rel="stylesheet" type="text/css" href="css/person/support.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/person/profile.css"> -->
        

	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <!--============================================================================================================================================================-->

    <?php
        include("navbar_profile.php");
        include("sidebar_profile.php");
    ?>
    <div class="main">
        <div class="container-fluid">
                <div class="right_cont_form">
                            <h3>YOU CAN CONNECT WITH US</h3>
                            <form method="post" id="send_enquiry">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" value="<?php echo $result['fname'];?> <?php echo $result['lname'];?>" required>
                            <label for="number">Contact No.</label>
                            <input type="number" id="number" name="number" value="<?php echo $result['phone'];?>" required style="width: 100%;">
                            <label for="email">Email ID</label>
                            <input type="email" id="email" name="email" value="<?php echo $result['email'];?>" required style="width: 100%;">
                            <br>
                            <label for="query">Write Your Query</label>
                            <textarea name="query" rows="3" id="query" required>  </textarea>
                            <button type="submit" name="submit" id="form_submit" class="button-submit">
                            Submit
                            </button>
                            </form>
                        </div> 
                    </div>
                </div>
    </div>
    <script>
        var query= document.getElementById('query').value;
        if(query==""){
            document.getElementById('form_submit').disable=true;
        }
    </script>
     
</body>
</html>