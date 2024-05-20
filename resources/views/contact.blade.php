
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

	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/flip.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="css/about1.css">
    <link rel="stylesheet" type="text/css" href="css/about2.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
        

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

    <div class="hero-image-about"><img src="Images/about/contact.jpg" width="100%" height="320px" >
        <div class="hero-text" style="margin-left: 25px;">
            <h1 style="font-size:50px;">Contact</h1>
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Contact</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!--============================================================================================================================================================-->

    <div class="feat bg-gray pt-5 pb-5">
   <div class="container" id="values">
       <div class="section-head col-sm-12 text-center pb-2
            ">
            <h2 class="contact-us-heading">CAB-EEZ INFRA TECH PRIVATE LIMITED</h2>
            <br>
         </div>
      <div class="row justify-content-center">
         <div class="col-lg-4 col-sm-8">
            <div class="item">
               <span class="icon feature_box_col_six">  <i class="fa fa-envelope" aria-hidden="true"></i></span>
               <h6>Email Us</h6>
               <p>  contact@ecabcars.com</p>
            </div>
         </div>
         <div class="col-lg-4 col-sm-8">
            <div class="item">
               <span class="icon feature_box_col_one"><i class="fa fa-globe"></i></span>
               <h6>Address</h6>
               <p>Office No. 105 G&E, 1st Floor,<br>
              SDF, Sector-V<br>
              Bidhannagar,<br> Kolata (E), Kolkata - 400072
               </p>
            </div>
         </div>
         <div class="col-lg-4 col-sm-8">
            <div class="item">
               <span class="icon feature_box_col_two"><i class="fa fa-phone" aria-hidden="true"></i></span>
               <h6>Call Us At</h6>
               <p>+91 &nbsp;789 &nbsp;456&nbsp; 1230</p>
                <p>Working Days - Monday To Friday</p>
                <p>Working Hours - 10:00 AM - 06:00 PM</p>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="container mt-5">
	  <div class="row row-cols-2">
	    <div class="col"><div class="right_cont_form">
            <h3>YOU CAN CONNECT WITH US</h3>
            <form method="post" id="send_enquiry" action="{{url('/supportsubmitnu')}}">
               @csrf
               <label for="name">Full Name</label>
               <input type="text" id="name" name="name" required>
               <label for="number">Contact No.</label>
               <input type="number" id="phone" name="phone" required style="width: 100%;">
               <label for="email">Email ID</label>
               <input type="email" id="email" name="email" required style="width: 100%;">
              <br>
               <label for="query">Write Your Query</label>
               <textarea name="query" rows="5">  </textarea>
              <button type="submit" name="submit" id="form_submit" class="button-submit">
              Submit
              </button>
            </form>

         </div> </div>
	    <div class="col mt-5">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30159.41825507659!2d72.85303801562503!3d19.1108458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9abc81d7d3f%3A0x7c8b5869486ac221!2sCAB%20EEZ%20Infra%20Tech%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1676980068155!5m2!1sen!2sin" width="100%" height="580" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

		</div>
	</div>
</div>
		<br>
		<br>
		<br>

        <!--=================================================================    STICKEY ICON START  ==================================================================-->

<@include('stickey');
<!--====================================================================  FOOTER START   ==========================================================================-->
@include('footer');
<!--====================================================================  FOOTER END   ==========================================================================-->

    
</body>
</html>
