<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Cab</title>

    <link rel="stylesheet" type="text/css" href="css/person/side.css">
    <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> 
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
   
</head>
<body>

@include("/navbar_profile");
@include("/sidebar_profile");

<div class="col-md-6 offset-md-3">
    <span class="anchor" id="formChangePassword"></span>
    <hr class="mb-5">

        <!-- form card change password -->
        @if(session('message'))
                <div class="alert alert-info">{{session('message')}}</div>
            @endif</h2>
        <div class="card card-outline-secondary">
            <div class="card-header">
                <h3 class="mb-0">Location</h3>
            </div>
            <div class="card-body">
                <form class="form" role="form" action="/bookcab" method="post" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <label for="pick">Pickup Location</label>
                        <input type="text" class="form-control" name="pick" id="pick" required>
                    </div><br>
                    <div class="form-group">
                        <label for="drop">Drop Location</label>
                        <input type="text" class="form-control" name="drop" id="drop" required>
                    </div><br>
                    <div class="form-group">
                        <button type="submit" id="submit" name="submit" class="btn btn-warning btn-lg float-right">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
</div>
    
</body>
</html>