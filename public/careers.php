<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link rel="stylesheet" type="text/css" href="css/home.css">
  <link rel="stylesheet" type="text/css" href="css/about1.css">
  <link rel="stylesheet" type="text/css" href="css/about2.css">
  <link rel="stylesheet" type="text/css" href="css/about3.css">
  <link rel="stylesheet" type="text/css" href="css/careers.css">

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>
<body>
  <!--========================================================================NAVBAR-START===========================================================================-->
	<?php include("navbar.php"); ?>
	<!--===========================================================================   NAVBAR-END   =========================================================================================-->
    <div class="hero-image-about"><img src="Images/about/career.jpg" width="100%" height="320px" >
    <div class="hero-text" style="margin-left: 25px;">
      <h1 style="font-size:50px;">Careers</h1>
      <div class="container">
        <nav aria-label="breadcrumb">
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"> Careers</li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
    <div class="container">
    <div class="career_page_main_section">
      <span class="journey  journey2  position-relative text-dark">Join Our <mark class="bg-transparent  p-0 text-danger"> E-Cab Family</mark>
      </span>
    </div>
    <div class="row mb-5 mt-5">
      <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="career_card">
          <h2 class="mb-3">MANAGER OPERATIONS – INFRASTRUCTURE MANAGEMENT</h2>
          <ul class="mb-3">
            <li>Graduate in any field .</li>
            <li>Preferable Age: 28 to 35 Years.</li>
            <li>Open to working in Shifts including Night.</li>
            <li>5+ years of experience in the Transportation / Automobile industry</li>
            <li>Experience in Setting up Infrastructures</li>
          </ul>
          <div class="career_btn_group">
                <a class="apply_btn" href="apply.php">Apply Now</a>
                <a class="apply_btn float-end" href="pdf/m1.pdf" target="_blank">View  - Key Job Responsibilities &amp; Skills </a>
          </div>
         
        </div>
      </div>
      
      <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="career_card">
          <h2 class="mb-3">MANAGER – OPERATIONS (DAY &amp; NIGHT SHIFT)</h2>
          <ul class="mb-3">
            <li>Salary: Rs. 20,000 – 30,000 per month</li>
            <li>Educational Qualification: Bachelor’s Degree</li>
            <li>Location: Aeromall Pune Airport</li>
            <li>Working Conditions: 6 days working 1 day weekly off</li>
          </ul>
          <div class="career_btn_group">
           <a class="apply_btn" href="apply.php">Apply Now</a>
            <a class="apply_btn float-end" href="pdf/m2.pdf" target="_blank">View  - Key Job Responsibilities &amp; Skills </a>
            </div>
        </div>
      </div>
      
      <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="career_card">
          <h2 class="mb-3">AIRPORT CLIENT ENGAGEMENT REPRESENTATIVE</h2>
          <ul class="mb-3">
            <li>Bachelor’s degree in any stream</li>
            <li>At least 1-5 years of experience working in sales or a similar role</li>
            <li>Familiarity with the local area and routes</li>
            <li>Multilingual abilities English, Hindi and Marathi (Optional)</li>
           
          </ul>
          <div class="career_btn_group">
           <a class="apply_btn" href="apply.php">Apply Now</a>
            <a class="apply_btn float-end" href="pdf/m3.pdf" target="_blank">View  - Key Job Responsibilities &amp; Skills </a>
            </div>
        </div>
      </div>
      
      <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="career_card">
          <h2 class="mb-3">OPERATIONS MANAGER - TRANSPORTATION AND CHARGING INFRASTRUCTURE</h2>
          <ul class="mb-3">
            <li>Graduate in any field</li>
            <li>Preferable Age: 28 to 35 Years.</li>
            <li>Open to working in Shifts, Including Night Shifts</li>
            <li>5+ years of experience in the Transportation / Automobile industry</li>
            <li>Experience in Setting up Infrastructures</li>
          </ul>
          <div class="career_btn_group">
           <a class="apply_btn" href="apply.php">Apply Now</a>
            <a class="apply_btn float-end" href="pdf/m4.pdf" target="_blank">View  - Key Job Responsibilities &amp; Skills </a>
           </div>
        </div>
      </div>
    </div>
  </div>
<!--=================================================================    STICKEY ICON START  ==================================================================-->

<?php include("stickey.php");?>
<!--====================================================================  FOOTER START   ==========================================================================-->
    <?php include("footer.php");?>
<!--====================================================================  FOOTER END   ==========================================================================-->

<?php
  if (isset($_REQUEST['submit1'])) {
    session_start();
    $_SESSION['post']=$_REQUEST['post'];
    $post=$_SESSION['post'];
  }
?>


	
</body>
</html>