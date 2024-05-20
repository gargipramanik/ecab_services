<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Us | e-cab</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/flip.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">


	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" type="text/css" href="css/about1.css">
        <link rel="stylesheet" type="text/css" href="css/about2.css">
        <link rel="stylesheet" type="text/css" href="css/about3.css">
        <link rel="stylesheet" type="text/css" href="css/btn.css">

		<script src="js/jquery-3.4.1.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

    <!--========================================================================NAVBAR-START===========================================================================-->
	@include('navbar');
	<!--===========================================================================   NAVBAR-END   =========================================================================================-->

    <div class="hero-image-about"><img src="Images/about/about1.jpg" width="100%" height="320px" >
        <div class="hero-text">
            <h1 style="font-size:50px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Register As Driver</h1>
            <div class="container">
                <nav aria-label="breadcrumb" style="margin-left: 20%">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Register</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

<!--=====================================================================================================================================-->
<div class="col">
<div class="right_cont1_form">
    <h3>Join Us</h3>
    <form method="post" action="{{url('/register_driver')}}" enctype="multipart/form-data">

    
        @csrf
		@if($errors->any())
		<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
    		<li>
				{{$error}}
			</li>
			@endforeach
		</ul>
	    </div>
	    @endif
        <br>
        <label for="fname" class="form-group">First Name</label>
        <input type="text" id="fname" name="fname" class="form-control" required><br>
        <label for="lname" class="form-group">Last Name</label><br>
        <input type="text" id="lname" name="lname" class="form-control" required><br>
        <label for="email" class="form-group">Email</label><br>
        <input type="email" id="email" name="email" class="form-control" required><br>
        <label for="phone" class="form-group">Phone</label><br>
        <input type="number" id="phone" name="phone" class="form-control" required><br>
        <div class="form-group">
		  	<label for="gender"><b>Gender </b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    <input type="radio" name="gender" value="male" id="m" >Male&nbsp;&nbsp;&nbsp;
		    <input type="radio" name="gender" value="female" id="f">Female&nbsp;&nbsp;&nbsp;
		    <input type="radio" name="gender" value="other" id="o" >Other&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</div><br/>
        <label for="pass" class="form-group">Password</label><br>
        <input type="password" id="password" name="password" class="form-control" required><br>
        <div class="form-group">
		   	<label>Profile Picture</label>  
		    <input type="file" name="image" id="image" class="form-control" required> &nbsp;&nbsp;<br> 
		</div>
        <div class="form-group">
		   	<label>Licence</label>  
		    <input type="file" name="licence" id="licence" class="form-control" required> &nbsp;&nbsp;<br> 
		</div>
        <label for="carNumber" class="form-group">Car Number</label><br>
        <input type="text" id="carNumber" name="carNumber" class="form-control" required><br>
        <label for="phone" class="form-group">Car model</label><br>
        <input type="text" id="model" name="model" class="form-control" required><br>
        <div class="form-group">
		  	<label><b>Car Capacity </b></label><p>  
		    <select id="capacity" name="capacity" class="form-select" required>
		       	<option value="">Select</option>
		       	<option value="2">2</option>
		       	<option value="3">3</option>
		       	<option value="4">4</option>
		       	<option value="5">5</option>
		       	<option value="6">6</option>
		    </select> &nbsp;&nbsp;
		</div> <br/>
        <br>
        <input type="submit" class="form-control btn btn-danger" name="submit" id="submit" value="Register">
        <hr color="white">
        <nav style="color: white; text-align:center;">Already have an Account?</nav>
        <p><a href="{{url('/logindriver')}}"><input type="button" class="form-control btn btn-outline-warning" value="Login"></a></p>
    </form>
</div>
</div>

<!--====================================================================  FOOTER START   ==========================================================================-->
@include('footer');
<!--====================================================================  FOOTER END   ==========================================================================-->
	
    
</body>
</html>
