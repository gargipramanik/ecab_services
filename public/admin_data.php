    @include("/adminHeader");
    @include("/sidebar");

    if(isset($_REQUEST['submit'])){
        $fname=$_REQUEST['afname'];
        $lname=$_REQUEST['alname'];
        $email=$_REQUEST['aemail'];
        $phone=$_REQUEST['aphone'];
        $password=md5($_REQUEST['apass']);

        $sqli="SELECT `email` FROM `user` WHERE `email`='$email';";
		$datas=mysqli_query($conn, $sqli);
		if(mysqli_num_rows($datas)>0){
			echo "<script>alert('This email is linked to another account')</script>";
		}
        else{
            $sqlo="INSERT INTO `user`(`id`, `fname`, `lname`, `email`, `phone`, `password`, `user`, `auth`) VALUES('','$fname','$lname','$email','$phone','$password','ADMIN',0)";
            $datas=$conn->query($sqlo);
        }
    }
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
  <h2>Admin</h2>
  @if(isset($adminData))
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Name</th>
        <th class="text-center">Email</th>
        <th class="text-center">Phone</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    @php
      $count=1;
    @endphp
    @foreach($adminData->all() as $data)
    <tr>
      <td>@php echo $count; @endphp</td>
      <td>{{$data->fname}}</td>      
      <td><a href="mailto:'{{$data->email}}'">{{$data->email}}</a></td>      
      <td><a href="tel:'{{$data->phone}}'">{{$data->phone}}</a></td>
      <td><button class="btn btn-success" style="height:40px" >Edit</button>&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="{{url('/delete_query')}}{{$data->id}}"><button class="btn btn-danger" style="height:40px">Delete</button></a></td>
      </tr>
      @php
            $count=$count+1;
      @endphp
  </table>
  @endif

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Admin
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Admin</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' method="POST" action="/add_admin">
            <div class="form-group">
              <label>First Name:</label>
              <input type="text" class="form-control" name="fname" required>
            </div>
            <div class="form-group">
              <label>Last Name:</label>
              <input type="text" class="form-control" name="lname">
            </div>
            <div class="form-group">
              <label>Email:</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
              <label>Phone:</label>
              <input type="number" class="form-control" name="phone" required>
            </div>
            <div class="form-group">
              <label>Password:</label>
              <input type="password" class="form-control" name="password" required>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-secondary" name="submit" style="height:40px" value="Add Admin">
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
    <script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>