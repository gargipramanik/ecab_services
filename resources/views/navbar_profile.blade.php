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
	<link rel="stylesheet" href="css/home.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    
  <style type="text/css">
		* {
		    scrollbar-width: auto;
		    scrollbar-color: #45a4c4 #ffffff;
		}
  	.navbar{
  		position: relative;
  		display: border-box;
  		display: flex;
  		flex-wrap: wrap;
	    align-items: center;
	    justify-content: space-between;
	    padding: 0.5rem 1rem;
	    z-index: 100;
	    position: fixed;
	    width: 100%;
  	}
  	/*.carousel-inner{
  		width: 1000px;
  		position: relative;
  		margin: auto;
  	}
		*/
  </style>
</head>
<body>

<!--========================================================================NAVBAR-START===========================================================================-->
	<header> 
		@csrf
		@if(isset($userInfo))
			@foreach($userInfo->all() as $data)
				<div class="content">
				<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top" style="position: fixed;">
					&nbsp;&nbsp;<img src="{{$data->image}}" alt="" width="60px" height="60px">
				<div class="container-fluid">
				<h4>Welcome</h4><h3>&nbsp;{{$data->fname}},</h3>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0 navbar-text navbar-brands">
						<li class="nav-item">
						<a class="nav-link active ms-4" aria-current="page" href="{{url('/user_profile')}}">Home</a>
						</li>
						<li class="nav-item">
						<a class="nav-link ms-4" href="{{url('/messages')}}">Replies</a>
						</li>	
						<li class="nav-item">
						<a class="nav-link ms-4" href="{{url('/logout')}}">Logout</a>
						</li>	        
					</ul>
					</div>
				</div>
				</nav>
				</div>
			@endforeach
		@endif
	</header>
	<!--===========================================================================   NAVBAR-END   =========================================================================================-->
    <script src="js/jquery-3.4.1.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>