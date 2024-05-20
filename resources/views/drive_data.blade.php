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
  <h2>Driver Details</h2>
  @if(isset($driveData))
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Name</th>
        <th class="text-center">Email</th>
        <th class="text-center">Phone</th>
        <th class="text-center">Pick Location</th>
        <th class="text-center">Drop Location</th>
        <th class="text-center">Date</th>
        <th class="text-center">Action</th>
        <th class="text-center">Payment</th>
      </tr>
    </thead>
    @php
      $count=1;
    @endphp
    @foreach($driveData->all() as $data)
    <tr>
      <td style="text-align: center;">@php echo $count;@endphp</td>
      <td style="text-align: center;">{{$data->fname}} {{$data->lname}}</td>      
      <td style="text-align: center;"><a href="mailto:'{{url('$data->email')}}'">{{$data->email}}</a></td>      
      <td style="text-align: center;"><a href="tel:'{{url('$data->phone')}}'">{{$data->phone}}</a></td> 
      <td style="text-align: center;">{{$data->pick}}</td>     
      <td style="text-align: center;">{{$data->drop_loc}}</td>
      <td style="text-align: center;">{{$data->date}}</td>
      <td style="text-align: center;">@if($data->action=='Pending')
            <button type="button" name="action" class="btn btn-warning" disabled>{{$data->action}}</button>
          @endif
          @if($data->action=='Confirmed')
          <a href="{{url('/details')}}{{$data->id}}"><button type="button" class="btn btn-success" style="height:40px">
              {{$data->action}}
          </button></a>
          @endif
          @if($data->action=='Declined')
              <button type="button" name="action" class="btn btn-danger" disabled>{{$data->action}}</button>
          @endif
      </td>
      <td style="text-align: center;">
      @if($data->payment=='PENDING')
        <span style="color:black">Pending</span>
      @endif
      @if($data->payment=='Paid')
        <span style="color:green"><b>{{$data->payment}}</b></span>
      @endif
      </td>
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