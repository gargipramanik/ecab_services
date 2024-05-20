<!-- nav -->
<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="css/admin/style.css"></link>
  </head>
</head>
<body >
 <nav  class="navbar navbar-expand-lg navbar-light px-5" style="background-color: #5da670;">
    
    <a class="navbar-brand ml-5" href="admin_profile.php">
        <img src="images/logo.png" width="80" height="80" alt="">
    </a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
    
    <div class="user-cart">
         <a href="{{url('/admin_profile')}}" style="text-decoration:none;">
                <h6 style="color: #fff; margin-right: 20px;">Home</h6>
        </a>
    </div>
    <div class="user-cart">
        <a href="{{url('/admin_profile')}}" style="text-decoration:none;">
                <h6 style="color: #fff; margin-right: 20px;">|</h6>
        </a>
    </div>
    <div class="user-cart">
        <a href="{{url('/logout')}}" style="text-decoration:none;">
                <h6 style="color: #fff; margin-right: 10px;">Logout</h6>
        </a>
    </div>  
</nav>
</body>
</html>