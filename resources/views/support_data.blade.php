@include("/connect")
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
  <h2>Support</h2>
  <table class="table">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Name</th>
        <th class="text-center">Email</th>
        <th class="text-center">Contact Number</th>
        <th class="text-center">Query</th>
        <th class="text-center">Reply</th>
        <th class="text-center">Action</th>
      </tr>
    </thead>
    @php
        $count=1;
      @endphp
      @if(isset($support))
      @foreach($support->all() as $data)
    <tr>
      <td>@php echo $count;@endphp</td>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->phone}}</td>
      <td>{{$data->query}}</td>
      <td>@if($data->reply=='null')
        @else
          {{$data->reply}}
        @endif
      </td>

      <td>@if($data->user_id==0)
        <div class="alert alert-danger">No Account</div>
        @else <a href="{{url('/reply')}}{{$data->id}}"><button class="btn btn-primary" style="height:40px">Reply</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="{{url('/delete')}}{{$data->id}}"><button class="btn btn-danger" style="height:40px">Delete</button></a>
      @endif
    </td>
      
    </tr>
    @php
         $count=$count+1;  
    @endphp
    @endforeach
    @endif
   
  </table>
  <script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</div>
</body>
</html>