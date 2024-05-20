<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <link rel="stylesheet" type="text/css" href="css/about1.css">
  <link rel="stylesheet" type="text/css" href="css/about2.css">
  <link rel="stylesheet" type="text/css" href="css/about3.css">
  <link rel="stylesheet" type="text/css" href="css/careers.css">
 <title>Image Gallery</title>
 </head>
<body>
    <!--========================================================================NAVBAR-START===========================================================================-->
	@include('navbar');
	<!--===========================================================================   NAVBAR-END   =========================================================================================-->
    <div class="hero-image-about"><img src="Images/about/career.jpg" width="100%" height="320px" >
    <div class="hero-text" style="margin-left: 25px;">
      <h1 style="font-size:50px;">Gallary</h1>
      <div class="container">
        <nav aria-label="breadcrumb">
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"> Gallary</li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
   <h1 align="center">IMAGE <span style="color: pink;">GALLERY</span></h1>

   
<div class="img-gallery">
    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="images/GalleryImage/gallery1.jpeg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Charging up for a greener future.</h5><br>
        <p class="card-text">We are the most affordable luxury you could ask for. <span style="color: darkblue;">#e-cab</span></p>
         
    </div>
    </div>
    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="images/GalleryImage/gallery3.jpeg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Zero emissions, infinite possibilities.</h5><br>
        <p class="card-text">Be comfortable again.</p>
         
    </div>
    </div>
    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="images/GalleryImage/gallery5.jpeg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Driving into a sustainable tomorrow.</h5><br>
        <p class="card-text">Whatever you’re up to this weekend, take a  e-cab and make it even better.</p>
         
    </div>
    </div>
    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="images/GalleryImage/gallery9.jpeg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Electric dreams on wheels.</h5><br>
        <p class="card-text">Know where your ride is going and make sure to avoid the traffic.</p>
         
    </div>
    </div>
    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="images/GalleryImage/gallery7.jpeg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Silent but powerful. <span style="color: darkblue;">#ElectricVibes</span></h5><br>
        <p class="card-text">One of the greatest pleasures you can have in a  e-cab</p>
         
    </div>
    </div>
    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="images/GalleryImage/gallery10.jpeg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Embrace the electric revolution.</h5><br>
        <p class="card-text">It’s been a long day, but you’re finally home. Thanks for the ride.</p>
         
    </div>
    </div>
    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="images/GalleryImage/gallery11.jpeg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Going green, one kilowatt at a time.</h5><br>
        <p class="card-text">We make your ride comfortable and easy.</p>
         
    </div>
    </div>
    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="images/GalleryImage/gallery12.jpeg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">My ride is electrifying.</h5><br>
        <p class="card-text">We’re on the road to your destination with a smile on our face.</p>
         
    </div>
    </div>
    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="images/GalleryImage/gallery13.jpeg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Eco-friendly and stylish. <span style="color: darkblue;">#EVLife</span></h5><br>
        <p class="card-text">The friendly Cab Company.</p>
         
    </div>
    </div>
    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="images/GalleryImage/gallery4.jpeg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Unleashing the power of electrons.</h5><br>
        <p class="card-text">Grab a  e-cab instead of a Lyft. It’s cheaper, cleaner, and faster.</p>
         
    </div>
    </div>
    <div class="sheet">
        <img src="">
    </div>
    <div class="sheet">
        <img src="">
    </div>
    <img src="">
    <img src="">
    <img src="">
    <img src="">
    <img src="">
    <img src="">
    <img src="">

</div>  \

 <!--=================================================================    STICKEY ICON START  ==================================================================-->

 @include('stickey');
<!--====================================================================  FOOTER START   ==========================================================================-->
@include('footer');
<!--====================================================================  FOOTER END   ==========================================================================-->


   

  
</body>
</html>