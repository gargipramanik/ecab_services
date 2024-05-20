<!-- Sidebar -->
<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
       <link rel="stylesheet" href="css/admin/style.css"></link>
  </head>
</head>
<body >
@if(isset($adminInfo))
@foreach($adminInfo->all() as $data)
@csrf
<div class="sidebar" id="mySidebar">
<div class="side-header">
    <img src="images/logo.png" width="120" height="120"> 
    <h5 style="margin-top:10px;">Hello {{$data->fname}},</h5>
</div>

<hr style="border:1px solid; background-color:#8a7b6d; border-color:#3B3131;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="{{url('/admin_profile')}}"><i class="fa fa-home"></i> Dashboard</a>
    <a href="{{url('/user_data')}}"><i class="fa fa-users"></i> Users</a>
    <a href="{{url('/cab_data')}}"><i class="fa fa-car"></i> Cabs</a>
    <a href="{{url('/driver_data')}}"><i class="fa fa-id-card"></i> Drivers</a>
    <a href="{{url('/admin_data')}}"><i class="fa fa-user-secret"></i> Admin Profile</a>
    <a href="{{url('/total_drive')}}"><i class="fa fa-taxi"></i> Total Drive</a>
    <a href="{{url('/support_data')}}"><i class="fa fa-info"></i> Support</a>
    <a href="{{url('/apply')}}"><i class="fa fa-copy"></i> Applied Drivers</a>
    <a href="{{url('/declined_driver')}}"><i class="fa-solid fa-circle-xmark"></i> Declined Drivers</a>


  
  <!---->
</div>
 
<div id="main">
    <button class="openbtn" onclick="openNav()"><i class="fa fa-home"></i></button>
</div>
@endforeach
@endif

<script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
