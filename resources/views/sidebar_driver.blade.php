<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport"
          content="width=device-width, 
                   initial-scale=1.0"> 
    <title>Bootstrap5 Sidebar</title> 
    <link rel="stylesheet" type="text/css" href="css/person/side.css">
    <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> 
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
</head> 
  
<body> 
  
@if(isset($userInfo))
@foreach($userInfo->all() as $data)
    <div class="sidebar">
        <ul class="nav">
            <li>
                <a href="{{url('/driver_profile')}}">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span> Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{url('/bookingdetails_driver')}}">
                    <i class="fa fa-car" aria-hidden="true"></i>
                    <span> Bookings</span>
                </a>
            </li>
            <li>
                <a href="{{url('/driver_details')}}">
                <i class="fa-solid fa-calendar-week"></i>
                    <span> Details</span>
                </a>
            </li>
            <li>
                <a href="{{url('/editdriver')}}{{$data->id}}">
                    <i class="fa fa-pen-to-square" aria-hidden="true"></i>
                    <span> Edit Details</span>
                </a>
            </li>
            <li>
                <a href="{{url('/change_driver')}}{{$data->id}}">
                    <i class="fa fa-gear" aria-hidden="true"></i>
                    <span> Change Password</span>
                </a>
            </li>
            <li>
                <a href="{{url('/support_driver')}}">
                    <i class="fa fa-circle-info" aria-hidden="true"></i>
                    <span> Support</span>
                </a>
            </li>
        </ul>
            
    </div>
    @endforeach
    @endif

</body> 
  
</html>