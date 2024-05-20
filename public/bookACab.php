<?php
    session_start();
    include("connect.php");
    if(isset($_REQUEST['submit'])){
        $id=$_SESSION['id'];
        $sqli="SELECT * FROM `user` WHERE `id`=$id";
        $data=$conn->query($sqli);
        $result=$data->fetch_assoc();
        $fname=$result['fname'];
        $lname=$result['lname'];
        $email=$result['email'];
        $phone=$result['phone'];

        $pick=$_REQUEST['pick'];
        $drop=$_REQUEST['drop'];
        $date=date("Y.m.d");

        $sql="INSERT INTO `drive`(`id`, `fname`, `lname`, `phone`, `email`, `pick`, `drop_loc`, `date`) VALUES ('','$fname','$lname','$phone','$email','$pick','$drop','$date')";
        $conn->query($sql);
        if ($conn->affected_rows>0) {
            echo "<script>alert('Booking Scheduled! We let you know if someone confirm.')</script>";
            echo "<script>location.window.href='user_profile.php'</script>";
        }
        else{
            echo "<script>alert('Some error Occured please try sometime later!')</script>";
        }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Cab</title>

    <link rel="stylesheet" type="text/css" href="css/person/side.css">
    <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> 
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
   
</head>
<body>

<div class="col-md-6 offset-md-3">
    <span class="anchor" id="formChangePassword"></span>
    <hr class="mb-5">

        <!-- form card change password -->
        <div class="card card-outline-secondary">
            <div class="card-header">
                <h3 class="mb-0">Location</h3>
            </div>
            <div class="card-body">
                <form class="form" role="form" autocomplete="off">
                    <div class="form-group">
                        <label for="pick">Pickup Location</label>
                        <input type="text" class="form-control" name="pick" id="pick">
                    </div><br>
                    <div class="form-group">
                        <label for="drop">Drop Location</label>
                        <input type="text" class="form-control" name="drop" id="drop">
                    </div><br>
                    <div class="form-group">
                        <button type="submit" id="submit" name="submit" class="btn btn-warning btn-lg float-right">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
</div>
    
</body>
</html>