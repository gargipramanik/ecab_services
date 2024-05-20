<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | e-cab</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/flip.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="css/about1.css">
    <link rel="stylesheet" type="text/css" href="css/about2.css">

    <script src="js/jquery-3.4.1.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <style type="text/css">
  	*{
    	box-sizing: border-box;
		}
		* {
		    scrollbar-width: auto;
		    scrollbar-color: #45a4c4 #ffffff;
    }
    </style>

</head>
<body>

    <!--========================================================================NAVBAR-START===========================================================================-->
	@include('navbar');
	<!--===========================================================================   NAVBAR-END   =========================================================================================-->

    <div class="hero-image-about"><img src="Images/about/about2.jpg" width="100%" height="320px" >
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
<!--==========================================================================  PICTURES START  =========================================-->
<div class="container">
  <div class="">
<div class="row service_top_crd d-flex">

    <div class="col-lg-6 servicecard_left ">
        <p><strong> When it's about&nbsp;Commuting, we keep it&nbsp;Simple!</strong>
</p>
        <span class="text-justify">For all your commuting needs - City commute, Inter City travel or In-City Rentals, Book Cab-E  for hassle-free commute. Every trip with us is an experience. Travel at ease with clean &amp; sanitized Cars, Pocket-friendly Flat Pricing,  No Surge Cost, No Cancellation Charges, No Waiting Charges, No App Usage Charges and No Trip Cancellations.
</span><br>
      <!--   <button class="btn btn-danger">Book Now</button> -->
    </div>
    <div class="col-lg-6 servicecard_right d-none d-md-block">

        <img src="images/about/our-services.jpg" class="img-fluid img-responsive" healt="">
    </div>

</div>
</div>
</div>

<!--==========================================================================  PICTURES START 2  =========================================-->

<div class="ourprocess_wraper mt-5">
<div class="container">
    <div class="row">
        <div class="col-lg-4 text-center mt-5">
           <div class="card special-services-card">
                <img class="card-img-top" src="images/about/c2.jpg" alt="Card image cap">
                <div class="card-body services-data">
                  <h5 class="cs"><span>1</span>City Commute</h5><br><br>
                  <p>Office. School. College. Pub. Movie. Salon. Friend’s Home Party. Visiting a Relative. Shopping. Gym. Club. If you have the reason, we have the EV. With a Plethora of features in Silent, Automatic Electric Vehicles – why should you settle for anything lesser. Make us your 24/7 trusted Travel Buddy for all your needs. Book now, to experience the difference.</p><br><br>
                </div>
              </div>
        </div>
 
          <div class="col-lg-4 text-center mt-5">
           <div class="card special-services-card">
                <img class="card-img-top" src="images/about/int.jpg" alt="Card image cap">
                <div class="card-body services-data">
                  <h5 class="cs"><span>2</span>In-City Rentals</h5><br><br>
                  <p>Planning to travel outside for Work or Leisure? Just give us an hour for your out-of-town rides. Our affordable rates will ensure your do not exceed your Budget. If you want a return, let us know in advance and the car will be at your door step. What’s more – there are no additional charges for waiting, extra time or extra kilometers. We only add the Toll charges (if any), on actuals</p><br><br>
                
                </div>
              </div>
        </div>

        

          <div class="col-lg-4 text-center mt-5">
           <div class="card special-services-card">
                <img class="card-img-top" src="images/about/in.jpg" alt="Card image cap">
                <div class="card-body services-data">
                  <h5 class="cs"><span>3</span>Inter-City Travel</h5><br><br>
                  <p>Planning to travel outside for Work or Leisure? Just give us an hour for your out-of-town rides. Our affordable rates will ensure your do not exceed your Budget. If you want a return, let us know in advance and the car will be at your door step. What’s more – there are no additional charges for waiting, extra time or extra kilometers. We only add the Toll charges (if any), on actuals</p><br><br>
                </div>
              </div>
        </div>

     

       
    </div>
</div>
</div>

<!--==========================================================================  PICTURES END  =========================================-->

<!--=================================================================    STICKEY ICON START  ==================================================================-->

@include('stickey');

<!--====================================================================  FOOTER START   ==========================================================================-->
    
@include('footer');
<!--====================================================================  FOOTER END   ==========================================================================-->

    
</body>
</html>