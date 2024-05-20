<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver | e-cab</title>

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

<div class="contanier-fluid auto_width_fluid">
    <div class="main" style="margin-top: 100px;">
    @if(session('message'))
         <div class="alert alert-danger">{{session('message')}}</div>
    @endif
        <div class="contanier">
            <div class="card">
                <div class="card-body">
                <nav class="navbar navbar-expand-lg bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand">Booking Deatils</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <form action="{{url('/search')}}" method="post">
                            @csrf
                            <div class="input-group">
                                <div class="form-outline" data-mdb-input-init>
                                    <input type="search" id="search" name="search" class="form-control" placeholder="Search">
                                </div>
                                <button type="submit" class="btn btn-secondary" data-mdb-ripple-init>
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>                        
                    </div>
                </nav><br>
                    <div class="card-subtitle mb-2 text-muted">
                        <div class="row">
                            <div class="col">
                                <b>Date</b>
                            </div>
                            <div class="col">
                                <b>Pickup Location</b>
                            </div>
                            <div class="col">
                                <b>Drop Location</b>
                            </div>
                            <div class="col">
                                <b>Phone Number</b>
                            </div>
                            <div class="col">
                                <b>Confirm Booking</b>
                            </div>
                        </div>
                        <hr>
                    </div>
                    @if(isset($drivebook))
                    @foreach($drivebook->all() as $bookdata)
                    <div class="card-subtitle mb-2 text-muted">
                        @csrf
                        <div class="row">
                            <div class="col">
                                {{$bookdata->date}}
                            </div>
                            <div class="col">
                                {{$bookdata->pick}}
                            </div>
                            <div class="col">
                                {{$bookdata->drop_loc}}
                            </div>
                            <div class="col">
                                {{$bookdata->phone}}
                            </div>
                            <div class="col">
                                @if($bookdata->action=="Confirmed")
                                    <span style="color:green"><b>{{$bookdata->action}}</b></span>
                                @endif
                                @if($bookdata->action=="Pending")
                                <a href="{{url('/confirm')}}{{$bookdata->id}}"><input type="button" class="btn btn-lg btn-outline-success" value="Confirm"></a>
                                @endif
                            </div>
                        </div>
                        <hr>
                    </div>
                    @endforeach                   
                    @endif
                </div>
            </div>
        </div>        
    </div>
</div>

</body>
</html>