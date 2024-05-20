<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | e-cab</title>
</head>
<body>
    
<title>About Us | e-cab</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<link rel="stylesheet" type="text/css" href="css/home.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/flip.css"> -->
	<link rel="stylesheet" type="text/css" href="css/footer.css">

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" type="text/css" href="css/about1.css">
        <link rel="stylesheet" type="text/css" href="css/about2.css">
        <link rel="stylesheet" type="text/css" href="css/about3.css">

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

    <div class="hero-image-about"><img src="Images/about/about3.jpg" width="100%" height="320px" >
        <div class="hero-text" style="margin-left: 25px;">
            <h1 style="font-size:50px;"> About Us</h1>
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> About Us</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="row" style="margin-bottom: 20px !important;">
     <div class="container-fluid" style="width:93%;">
         <div class="col-lg-12">
            <div class="bgsecpartner">
                <p>CAB-EEZ Infra Tech Pvt. Limited (Brand Name: “<span class="cabcolor">E</span>-<span class="ecolor">cab</span>”) is a Green-Tech Urban Mobility Marketplace and we provide, an in-house built, Mobile-based Platform, for City, Inter-City and Customized commuting plans with an all-Electric Fleet of Cars at extremely affordable prices.</p>
                </div>
        </div>
     </div>

    </div>
<!--==============================================================================================================================================================-->

    <div class="heroImage">


    <div class="container">
        <p class="text-white mb-30 text-center">Our Hubs are responsible to ensure that all cars are cleaned every 12
            hours, charged and then operated within the designated routes. They ensure comfortable, on time and safe
            rides for commuters across the city. The Hubs track each car 24/7, so that every time a customer is on
            board, they know they are safe with us.</p>
        <br><br>

        <div class="row">
            <div class="col-lg-4 col-md-4 aos-init aos-animate" data-aos="zoom-in-up" data-aos-duration="1500">
                <div class="our_presence text-white text-center">
                    <img src="images/about/location.jpg" class="img-fluid" alt="">
                    <p>Captive Locations</p>
                    <span>18
                    </span>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 aos-init aos-animate" data-aos="zoom-in-up" data-aos-duration="1500">
                <div class="our_presence text-white text-center">
                    <img src="images/about/fast-energy.jpg" class="img-fluid" alt="">
                    <p>Fast Chargers</p>
                    <span>130
                    </span>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 aos-init aos-animate" data-aos="zoom-in-up" data-aos-duration="1500">
                <div class="our_presence text-white text-center">
                    <img src="images/about/low-energy.jpg" class="img-fluid" alt="">
                    <p>Slow Chargers *</p>
                    <span>400+
                    </span>
                </div>
            </div>
            <div class="col-lg-12 mt-5 aos-init aos-animate" data-aos="zoom-in-up" data-aos-duration="1500">
                <div class=" text-white text-center">
                    <p>* Includes existing and ordered - In Partnered with 3 Large Private Charging Infra Operators</p>
                </div>
            </div>
        </div>


    </div>
</div>
<img src="images/about/car.gif" class="img-responsive" style="width:99%;" alt="">

<div class="associated-partners">
    <div class="containers">
        <center class="">Associated <span class="text-danger">Partners</span></center>
        <p class="text-center"><strong>Additionally Partnered With 3 Large Private Charging Infra Operators</strong></p>
    </div>
</div>
<div class="container">
 
   <section class="customer-logos slider d-flex justify-content-center">
          
       <div class="slide"><img src="images/about/jio.jpg"></div>
      <div class="slide"><img src="images/about/tata.jpg"></div>
      <div class="slide"><img src="images/about/vo.jpg"></div>
   </section>
   

</div>

<!--=================================================================    STICKEY ICON START  ==================================================================-->

@include('stickey');

    <!--====================================================================  FOOTER START   ==========================================================================-->
    
    @include('footer');
<!--====================================================================  FOOTER END   ==========================================================================-->


</body>
</html>