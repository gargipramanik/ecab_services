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


	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
    <link rel="stylesheet" type="text/css" href="css/person/support.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/person/profile.css"> -->
        

	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <!--============================================================================================================================================================-->

        @include("/driverHeader");
        @include("/sidebar_driver");
    <div class="main">
        <div class="container-fluid" style="margin-top: 50px;">
        <h2>@if(session('message'))
            <div class="alert alert-info">{{session('message')}}</div>
        @endif</h2>
                <div class="right_cont_form">
                            <h3>YOU CAN CONNECT WITH US</h3>
                            @if(isset($userInfo))
                                <form method="post" id="send_enquiry" action="{{url('/supportsubmit')}}">
                                    @csrf
                                    @foreach($userInfo->all() as $data)
                                    <input type="hidden" name="id" value="{{$data->id}}">
                                        <label for="name">Full Name</label>
                                        <input type="text" id="name" name="name" value="{{$data->fname}} {{$data->lname}}" required>
                                        <label for="number">Contact No.</label>
                                        <input type="number" id="phone" name="phone" value="{{$data->phone}}" required style="width: 100%;">
                                        <label for="email">Email ID</label>
                                        <input type="email" id="email" name="email" value="{{$data->email}}" required style="width: 100%;">
                                        <br>
                                        <label for="query">Write Your Query</label>
                                        <textarea name="query" rows="3" id="query" class="form-control" required></textarea><br><br>
                                        <button type="submit" name="submit" id="submit" class="btn btn-lg btn-outline-dark">
                                        Submit
                                        </button>
                                    @endforeach
                            </form>
                            @endif
                        </div> 
                    </div>
                </div>
    </div>
        
</body>
</html>