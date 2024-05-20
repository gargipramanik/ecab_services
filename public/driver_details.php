<?php
    session_start();
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | e-cab</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	
	<!-- <link rel="stylesheet" type="text/css" href="css/person/profile.css"> -->
    <link rel="stylesheet" type="text/css" href="css/home.css">

    <link rel="stylesheet" type="text/css" href="css/person/side.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>


<!--==============================================================================NAVBAR=========================================================-->

    @include("/driverHeader");
    @include("/sidebar_driver");

    if(isset($userInfo))
<div class="contanier-fluid auto_width_fluid">
    <div class="main">
       <div class="card">
            <div class="card-body">
                <h2>About</h2><br>
                <div class="card-subtitle mb-2 text-muted">
                    <div class="row">
                        <div class="col">
                            Name
                        </div>
                        <div class="col">
                            {{$userInfo->fname}} {{$userInfo->lname}} 
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            Email
                        </div>
                        <div class="col">
                            {{$userInfo->email}} 
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            Phone
                        </div>
                        <div class="col">
                            {{$userInfo->phone}} 
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            Gender
                        </div>
                        <div class="col">
                            {{$userInfo->gender}} 
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            Car Number
                        </div>
                        <div class="col">
                            {{$userInfo->car_number}} 
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            Car Model
                        </div>
                        <div class="col">
                            {{$userInfo->car_model}} 
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            Capacity
                        </div>
                        <div class="col">
                            {{$userInfo->capacity}} 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endif
</body>
</html>