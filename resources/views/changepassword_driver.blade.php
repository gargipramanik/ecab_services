<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password | Login</title>

    <link rel="stylesheet" type="text/css" href="css/person/side.css">
    <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> 
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    
</head>
<body>

@include("driverHeader");
@include("sidebar_driver");
<div class="col-md-6 offset-md-3">
    <span class="anchor" id="formChangePassword"></span>
    <hr class="mb-5">
    @if(isset($passInfo))
        <!-- form card change password -->
        <h2>@if(session('message'))
            <div class="alert alert-info">{{session('message')}}</div>
        @endif</h2>
           
        <div class="card card-outline-secondary">
            <div class="card-header">
                <h3 class="mb-0">Change Password</h3>
            </div>
            <div class="card-body">
                <form method="post" action="{{url('/update_driverpassword')}}" role="form" autocomplete="off">
                    @csrf
                    <input type="hidden" name="uid" value="{{$passInfo->id}}">
                    <div class="form-group">
                        <label for="inputPasswordOld">Current Password</label>
                        <input type="password" class="form-control" id="inputPasswordOld" name="opass">
                    </div><br>
                    <div class="form-group">
                        <label for="inputPasswordNew">New Password</label>
                        <input type="password" class="form-control" id="inputPasswordNew" name="npass">
                        <span class="form-text small text-muted">
                            The password must be 4-16 characters, and must <em>not</em> contain spaces.
                        </span>
                    </div><br>
                    <div class="form-group">
                        <label for="inputPasswordNewVerify">Confirm Password</label>
                        <input type="password" class="form-control" id="inputPasswordNewVerify" name="cpass">
                        <span class="form-text small text-muted">
                            To confirm, type the new password again.
                        </span>
                    </div><br>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-success btn-lg float-right">Save</button>
                    </div>
                </form>
            </div>
        </div>
        @endif
</div>

</body>
</html>