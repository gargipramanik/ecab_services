@include("/adminHeader")
    @include("/sidebar")

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
<div >
  <h2>Applied Drivers</h2>
  @if(isset($userData))
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Image</th>
        <th class="text-center">Name</th>
        <th class="text-center">Email</th>
        <th class="text-center">Phone</th>
        <th class="text-center">Gender</th>
        <th class="text-center">Car Number</th>
        <th class="text-center">Licence</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    @php
      $count=1;
    @endphp
    @foreach($userData->all() as $data)
    <tr>
      <td>@php echo $count;@endphp</td>
      <td><img height="100px" width="100px" src="{{$data->profile}}" alt=""></td>
      <td>{{$data->fname}} {{$data->lname}}</td>      
      <td><a href="mailto:'{{url('$data->email')}}'">{{$data->email}}</a></td>      
      <td><a href="tel:'{{url('$data->phone')}}'">{{$data->phone}}</a></td> 
      <td>{{$data->gender}}</td>     
      <td>{{$data->car_number}}</td>
      <td><a href="{{url('/licence')}}{{$data->id}}"><button type="button" class="btn btn-secondary " style="height:40px">
      <input type="hidden" name="ids" value="{{$data->id}}">
    Licence
  </button></a>
      <td><a href="{{url('/apply_driver')}}{{$data->id}}"><button class="btn btn-success" style="height:40px">Accept</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="{{url('/d_driver')}}{{$data->id}}"><button class="btn btn-danger" style="height:40px">Decline</button></a></td>
      </tr>
      @php
            $count=$count+1;
      @endphp
  @endforeach
  </table>
  @endif

  
  
</div>
    <script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>