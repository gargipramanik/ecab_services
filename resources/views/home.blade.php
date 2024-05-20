<?php
  ini_set('session.gc_maxlifetime', 123456778800);
  session_set_cookie_params(123456778800);
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home | e-cab</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/flip.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <style>
        table {
            width: 95%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #312875;
            color: white;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>

  @include('navbar');

	<section>
		<div id="carouselExampleDark" class="carousel carousel-dark slide">
		  <div class="carousel-indicators">
		    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
		    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
		  </div>
		  <div class="carousel-inner">
		    <div class="carousel-item fade active" data-bs-interval="10000">
		      <img src="Images/slider/cab.jpg" class="d-block w-100 " alt="...">
		      <div class="carousel-caption d-none d-md-block">
		        <h1 style="font-size: 90px; color: white; text-align: left;">It's not just a <span style="color: #bdb03c;">Trip</span><br>it's an <span style="color: black;">Experience</span></h1>
		      </div>
		    </div>
		    <div class="carousel-item fade" data-bs-interval="2000">
		      <img src="Images/slider/cab2.jpg" class="d-block w-100" alt="...">
		      <div class="carousel-caption d-none d-md-block">
		        <h1 style="font-size: 90px; color: white; text-align: left;">Join our <span style="color: #45a4c4;">Blue</span><br>Disruption with <span style="color: #1cbd62;"> Electric </span><br> Vehicles</h1>
		        <p>
		        </p>
		      </div>
		    </div>
		    <div class="carousel-item fade">
		      <img src="Images/slider/cab3.jpg" class="d-block w-100" alt="...">
		      <div class="carousel-caption d-none d-md-block">
		        <h1 style="font-size: 90px; color: white; text-align: left;">Your <span style="color: #45a4c4;">safety</span>,<br>is Our <span style="color: #45a4c4;">Responsibility</span></h1>
		        <p>
		        </p>
		      </div>
		    </div>
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Next</span>
		  </button>
		</div>
	</section>
	<!--===========================================================================   SLIDER-END  =====================================================================================-->

	<!--===========================================================================   TEXT PICTURE & VIDEO START   ====================================================================-->

	<div class="container-fluid auto_width_fluid mt-5">
	  <div class="row row-cols-2">
	    <div class="col"><h1 align="left"><span style="color: red;">Join Our Blue Disruption.</span> Partner with us, to save Mother Earth</h1><br>

					<p align="left">With the Development and the Urbanization today, the largest source of climate pollution in India is Transportation. Whilst, the Indian Government has created a momentum to move towards a cleaner and a greener energy source - through its Faster Adoption and Manufacturing of Electric (& Hybrid) Vehicles (FAME) Scheme, that encourages and, in some segments, even mandates the adoption of Electric Vehicles (EVs), we at E-Cab have taken up the mantle to support the Govt’s Goal of reaching 100% EV penetration by 2030.</p>

					<p align="left">At least, in the public commuting space.</p>
				</div>
				<div class="col"><h3><span style="background-color: #cccbc8;">&nbsp;&nbsp;&nbsp;&nbsp;We do care about <span style="color: green;">Mother Nature&nbsp;&nbsp;&nbsp;&nbsp;</span></span></h3> <img src="images/FrontPage/car.jpg" height="200px" width="70%"> </div>
	    <div class="col"><p align="left">When we say, with us, it is just not a Trip, but an Experience – it is. With us, you contribute to your Environment. It is about helping in the reduction of Carbon Emissions. It is about your allegiance to Mother Earth, to make our World a better place to be.</p>
				<p align="left">When you can enjoy a plethora of benefits for yourself whilst contributing to Mother Earth, why should you settle for anything lesser? If you have not taken a ride with us, try it now and experience the difference.</p>
			</div>
	    <div class="col"><video controls src="Images\FrontPage\cabe.mp4" height="315px" width="100%"></div>
	  </div>
	</div>
	<!--===========================================================================   TEXT PICTURE & VIDEO END   ======================================================================-->

	<!--===========================================================================   TEXT PICTURE & VIDEO 2 START   ====================================================================-->

	  <table cellpadding="20" border="2" align="center" style="margin-top: 40px;">
      <thead>
      <tr>
        <th colspan="5" style="text-align: center;"><span style="font-size: 50px;"><u>CHART OF FARE</u></span></th>
      </tr>
      <tr>
        <th style="text-align: center;">Distance</th>
        <th style="text-align: center;">Basic fare (in Rs.)</th>
        <th style="text-align: center;">Waiting Charges</th>
        <th style="text-align: center;">Day Time Consolidated fare <br>(Between 4-30 A.M and 10-30 P.M.)<br> [Inclusive all] (in Rs.)</th>
        <th style="text-align: center;">Night Time Consolidated fare <br>(Between 10-30 P. M and 4-30 A.M. of the next day)
          <br> [Inclusive night charge @ 15% on basic fare,<br> rounded off to nearest Rs. 5 point] (in Rs.)</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td style="text-align: center;">Upto 2 K.M.</td>
        <td style="text-align: center;">25</td>
        <td style="text-align: center;">No waiting Charges(< 15 Minutes) Rs. 2/Minute</td>
        <td style="text-align: center;">50</td>
        <td style="text-align: center;">50</td>
      </tr>
      <tr>
        <td style="text-align: center;">Upto 4 K.M.</td>
        <td style="text-align: center;">49</td>
        <td style="text-align: center;">No waiting Charges(< 15 Minutes) Rs. 2/Minute</td>
        <td style="text-align: center;">75</td>
        <td style="text-align: center;">80</td>
      </tr>
      <tr>
        <td style="text-align: center;">Upto 6 K.M.</td>
        <td style="text-align: center;">73</td>
        <td style="text-align: center;">No waiting Charges(< 15 Minutes) Rs. 2/Minute</td>
        <td style="text-align: center;">100</td>
        <td style="text-align: center;">110</td>
      </tr>
      <tr>
        <td style="text-align: center;">Upto 8 K.M.</td>
        <td style="text-align: center;">97</td>
        <td style="text-align: center;">No waiting Charges(< 15 Minutes) Rs. 2/Minute</td>
        <td style="text-align: center;">130</td>
        <td style="text-align: center;">145</td>
      </tr>
      <tr>
        <td style="text-align: center;">Upto 10 K.M.</td>
        <td style="text-align: center;">121</td>
        <td style="text-align: center;">No waiting Charges(< 15 Minutes) Rs. 2/Minute</td>
        <td style="text-align: center;">155</td>
        <td style="text-align: center;">170</td>
      </tr>
      <tr>
        <td style="text-align: center;">Upto 12 K.M.</td>       
        <td style="text-align: center;">145</td>
        <td style="text-align: center;">No waiting Charges(< 15 Minutes) Rs. 2/Minute</td>
        <td style="text-align: center;">180</td>
        <td style="text-align: center;">200</td> 
      </tr>
      <tr>
        <td style="text-align: center;">Upto 14 K.M.</td>
        <td style="text-align: center;">169</td>
        <td style="text-align: center;">No waiting Charges(< 15 Minutes) Rs. 2/Minute</td>
        <td style="text-align: center;">200</td>
        <td style="text-align: center;">225</td>
      </tr>
      <tr>
        <td style="text-align: center;">Upto 16 K.M.</td>
        <td style="text-align: center;">193</td>
        <td style="text-align: center;">No waiting Charges(< 15 Minutes) Rs. 2/Minute</td>
        <td style="text-align: center;">225</td>
        <td style="text-align: center;">225</td>
      </tr>
      <tr>
        <td style="text-align: center;">Upto 18 K.M.</td>
        <td style="text-align: center;">217</td>
        <td style="text-align: center;">No waiting Charges(< 15 Minutes) Rs. 2/Minute</td>
        <td style="text-align: center;">250</td>
        <td style="text-align: center;">280</td>
      </tr>
      <tr>
        <td style="text-align: center;">Upto 20 K.M.</td>
        <td style="text-align: center;">241</td>
        <td style="text-align: center;">No waiting Charges(< 15 Minutes) Rs. 2/Minute</td>
        <td style="text-align: center;">275</td>
        <td style="text-align: center;">310</td>
      </tr>
      <tr>
        <td style="text-align: center;">Upto 23 K.M.</td>
        <td style="text-align: center;">277</td>
        <td style="text-align: center;">No waiting Charges(< 15 Minutes) Rs. 2/Minute</td>
        <td style="text-align: center;">310</td>
        <td style="text-align: center;">350</td>
      </tr>
      <tr>
        <td style="text-align: center;">Upto 26 K.M.</td>
        <td style="text-align: center;">313</td>
        <td style="text-align: center;">No waiting Charges(< 15 Minutes) Rs. 2/Minute</td>
        <td style="text-align: center;">345</td>
        <td style="text-align: center;">390</td>
      </tr>
      <tr>
        <td style="text-align: center;">Upto 30 K.M.</td>
        <td style="text-align: center;">349</td>
        <td style="text-align: center;">No waiting Charges(< 15 Minutes) Rs. 2/Minute</td>
        <td style="text-align: center;">380</td>
        <td style="text-align: center;">435</td>
      </tr>
      </tbody>
    </table>
			<br>
		<br>
		<br>

<!--===========================================================================   TEXT PICTURE & VIDEO 2 END   ====================================================================-->

<!--===========================================================================   CHANGE PIC START  =====================================================================================-->
	<!--It will be written-->
<!--===============================================================   CHANGE PIC END  ================================================================================-->
	
<!--=================================================================================   BAR START   =========================================================================-->
	<section class="messages">
	  <div class="container-fluid auto_width_fluid">
	     <p><strong><span class="tab-h">We have already saved&nbsp;</span> <span class="text-success font-weight-bold">1850+</span>&nbsp;Tonnes of&nbsp; <span class="text-success font-weight-bold">Carbon-Di-Oxide</span></strong></p>
	  </div>
	</section>
	
<!--======================================================================   BAR END   =============================================================================-->

<!--========================================================================   CONTROL START   =============================================================================-->
<section>
<div class="client_counter">
      <div class="container-fluid auto_width_fluid">
        <div class="counter-title1 text-center pb-30">
          <span class="journey position-relative text-white" style="">Journey So <mark class="bg-transparent  p-0 text-danger"> Far</mark>
          </span>
        </div>
        <div class="row">
          
          <div class=" col-lg-4 col-md-6 col-sm-6">
            <div class="counterr gray">
              <div class="counter-icon">
                <img src="images/FrontPage/app.jpg" class="img-fluid" alt="">
              </div>
              <div class="counterr-content">
                <div class="cntr-text-wrpr">
                  <h3>Website Visiters</h3>
                  <div class="countr-num d-flex">
                    <p id="number1" class="number"><?php if (isset($_SESSION['page'])) {$_SESSION['page']=$_SESSION['page']+1;}else{$_SESSION['page']=1;}echo$_SESSION['page'];?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=" col-lg-4 col-md-6 col-sm-6">
            <div class="counterr gray">
              <div class="counter-icon">
                <img src="images/FrontPage/customers.jpg" class="img-fluid" alt="">
              </div>
              <div class="counterr-content">
                <h3>Active Customers</h3>
                <h3 class="cntr-text-wrpr">
                <div class="countr-num d-flex">
                  <p id="number5" class="number">105</p>
                </div>
                </h3>
                </h3>
              </div>
            </div>
          </div>
          <div class=" col-lg-4 col-md-6 col-sm-6">
            <div class="counterr gray">
              <div class="counter-icon">
                <img src="images/FrontPage/rating.jpg" class="img-fluid" alt="">
              </div>
              <div class="counterr-content">
                <div class="cntr-text-wrpr">
                  <h3>Customer Ratings</h3>
                  <div class="countr-num d-flex">
                    <p id="number1" class="number">4</p>
                  </div>
                  
                  
                </div>
                
                
              </div>
            </div>
          </div>
          <div class=" col-lg-4 col-md-6 col-sm-6 mt-2">
            <div class="counterr gray">
              <div class="counter-icon">
                <img src="images/FrontPage/social.jpg" class="img-fluid" alt="">
              </div>
              <div class="counterr-content">
                <div class="cntr-text-wrpr">
                  <h3>Social Media Followers</h3>
                  <div class="countr-num d-flex">
                    <p id="number2" class="number">50</p>
                  </div>
                </div>
                
                
              </div>
            </div>
          </div>
          <div class="  col-lg-4 col-md-6 col-sm-6 mt-3">
            <div class="counterr gray">
              <div class="counter-icon">
                <img src="images/FrontPage/radio.jpg" class="img-fluid" alt="">
              </div>
              <div class="counterr-content">
                <div class="cntr-text-wrpr">
                  <h3>Radio Listenership</h3>
                  <div class="countr-num d-flex">
                    <p id="number4" class="number">1</p>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          
          
          <div class="   col-lg-4 col-md-6 col-sm-6 mt-2">
            <div class="counterr gray">
              <div class="counter-icon">
                <img src="images/FrontPage/post.jpg" class="img-fluid" alt="">
              </div>
              <div class="counterr-content">
                <h3>Social Media Posts</h3>
                <h3 class="cntr-text-wrpr">
                <div class="countr-num d-flex">
                  <p id="number6" class="number">5</p>
                </div>
                
                </h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

</section>
    <!--==================================================================================   CONTROLS END   =============================================================================-->


<!--=======================================================================  FLIP START ==================================================================================-->
<section>
<div class="container-fluid auto_width_fluid">
      <div class="counter-title1  text-center pb-30">
        <span class="journey journey1  position-relative text-black">Travelling With Us, Helps You Save
          Every<mark class="bg-transparent  p-0 text-danger ">  Possible Buck!</mark>
        </span>
      </div>
      <div class="row travelling-with-us">
        <div class="col-lg-3 col-md-6">
          <div class="flip-box">
						<div class="flip-box-inner">
							<div class="flip-box-front">
								<img src="images/flip/1.jpg" style="width:100%;height:250px;">		
								<span>Experience Pure Electric</span>
							</div>
								<div class="flip-box-back">
									<p class="lines">Experience the new Paradigm in commuting. Experience Electric – with our own Fleet of Silent, Automatic, Sanitized Electric Vehicles (EVs). With us, it is not just a trip, it is an Experience!</p>
								</div>	
						</div>
					</div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="flip-box">
            <div class="flip-box-inner">
              <div class="flip-box-front">
                <img src="Images/flip/2.jpg" class="img-fluid" alt="Avatar" style="width:100%;height:250px;">
                <span>Enjoy Flat Rates, All day long</span>
              </div>
              <div class="flip-box-back">
                
                <p class="lines">Morning, Afternoon or Evening – if the route is the same, the cost will be the same – with us there is No Surge Pricing, because every occasion of yours is equal and important to us</p>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="flip-box">
            <div class="flip-box-inner">
              <div class="flip-box-front">
                <img src="Images/flip/3.jpg" class="img-fluid" alt="Avatar" style="width:100%;height:250px;">
                <span>Make Contact Less Payments</span>
              </div>
              <div class="flip-box-back">
                <p class="lines">We care for your well-being and so we encourage you to Make On-Line Payments. Use our secure Payment Gateway to choose from multiple payment options – UPI, Net Banking, Credit/Debit Cards, Wallets etc</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="flip-box">
            <div class="flip-box-inner">
              <div class="flip-box-front">
                <img src="Images/flip/4.jpg" class="img-fluid" alt="Avatar" style="width:100%;height:250px;">
                <span>Plan Your Travel With Us</span>
              </div>
              <div class="flip-box-back">
                
                <p class="lines">For a guaranteed booking, we encourage you to Schedule your travel. We value your time and hence we do immediate assignments of Cab Managers for every trip you book in advance</p>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="flip-box">
            <div class="flip-box-inner">
              <div class="flip-box-front">
                <img src="Images/flip/5.jpg" class="img-fluid" alt="Avatar" style="width:100%;height:250px;">
                <span>Zero Waiting Charges</span>
              </div>
              <div class="flip-box-back">
                <p class="lines">Dressing up for an important occasion or when the Lift is not working – we know it takes time, so we do not charge for Waiting</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="flip-box">
            <div class="flip-box-inner">
              <div class="flip-box-front">
                <img src="Images/flip/6.jpg" class="img-fluid" alt="Avatar" style="width:100%;height:250px;">
                <span>Zero Cancellations Charges</span>
              </div>
              <div class="flip-box-back">
                <p class="lines">A last-minute change of plan – we understand that too, so we do not charge for Cancellations as we value your decision</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="flip-box">
            <div class="flip-box-inner">
              <div class="flip-box-front">
                <img src="Images/flip/7.jpg" class="img-fluid" alt="Avatar" style="width:100%;height:250px;">
                <span>Zero Technology Usage Charges</span>
              </div>
              <div class="flip-box-back">
                
                <p class="lines">When you Commute with us, you pay only for the travel and Not for using our App as we do not believe in hidden costs</p>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="flip-box">
            <div class="flip-box-inner">
              <div class="flip-box-front">
                <img src="Images/flip/8.jpg" class="img-fluid" alt="Avatar" style="width:100%;height:250px;">
                <span>Zero Hassle Travel</span>
              </div>
              <div class="flip-box-back">
                <p class="lines">Our App has been built in-house and does not allow our Cab Managers to cancel any trip. Once you are on a trip, we Track your ride all throughout, irrespective of day or night</p>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

</section>
   <!--=======================================================================  FLIP END ==================================================================================-->


  <!--==============================================================================   CONTACT DETAILS START   ==========================================================================-->
  <section class="h3-contact-section  position-relative z-1 overflow-hidden bg-dark" >
    <div class="container-fluid auto_width_fluid">
      <div class="row justify-content-center call-us">
        <div class="col-lg-6 col-sm-12">
          <div class="at-section-title text-center">
              <span class="at-subtitle lead text-white position-relative shape-primary">
                <strong>Need a Cab</strong>
                <mark class="bg-transparent text-danger p-0">?</mark>
              </span>
              <h2 class="h1 text-white ">Call Us To Book Now..</h2>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 call-us">
            <a href="tel:+980009850" class="call-btn d-inline-flex align-items-center">
              <span class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle text-white">
                <i class="fa fa-mobile" aria-hidden="true"></i>
              </span>
              <span class="ms-3 text-center texts" id="call-us">+91 &nbsp;720 &nbsp;887&nbsp; 8771</span>
            </a>
          </div>
        </div>
      </div>
    </section>
<!--====================================================================  CONTACT DETAILS END   ==========================================================================-->

<!--====================================================================  FOOTER START   ==========================================================================-->
@include('footer');
<!--====================================================================  FOOTER END   ==========================================================================-->
	
<!--=================================================================    STICKEY ICON START  ==================================================================-->

@include('stickey');

<!--===========================================================================   JAVASCRIPT  ================================================================================-->

	

	<script type="text/javascript">
		let index = 0;
		displayImages();
		function displayImages() {
		  let i;
		  const images = document.getElementsByClassName("carousel-item");
		  for (i = 0; i < images.length; i++) {
		    images[i].style.display = "none";
		  }
		  index++;
		  if (index > images.length) {
		    index = 1;
		  }
		  images[index-1].style.display = "block";
		  setTimeout(displayImages, 2000); 
		}
	</script>
  


</body>
</html>