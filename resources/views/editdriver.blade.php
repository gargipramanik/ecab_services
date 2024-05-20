<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile | e-cab</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	
	<link rel="stylesheet" type="text/css" href="css/person/edit.css">
    <link rel="stylesheet" type="text/css" href="css/about1.css">
    <link rel="stylesheet" type="text/css" href="css/about2.css">
    <link rel="stylesheet" type="text/css" href="css/about3.css">
    <link rel="stylesheet" type="text/css" href="css/btn.css">

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
@include("driverHeader");
@include("sidebar_driver");

 
  <div class="contanier-fluid auto_width_fluid">
      <div class="main">
        <div class="card" style="margin-top: 40px;">
              <div class="card-body">
                <h2>Edit your details</h2><br>
                @if(isset($editInfo))
                @foreach($editInfo->all() as $data)
                <form action="{{url('/update_driver')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="uid" value="{{$data->id}}">
                <div class="row">
                  <div class="col">
                    <label for="fname" class="form-group">First Name</label>
                    <input type="text" id="fname" name="fname" class="form-control" value="{{$data->fname}}" required>
                  </div>
                  <div class="col">
                    <label for="lname" class="form-group">Last Name</label><br>
                    <input type="text" id="lname" name="lname" class="form-control" value="{{$data->lname}}" required>
                  </div>
                </div><br>
                <div class="row">
                  <div class="col">
                   <label for="email" class="form-group">Email</label><br>
                    <input type="email" id="email" name="email" class="form-control" value="{{$data->email}}" required>
                  </div>
                  <div class="col">
                    <label for="phone" class="form-group">Phone</label><br>
                    <input type="number" id="phone" name="phone" class="form-control" value="{{$data->phone}}" required>
                  </div>
                </div><br>
                <div class="row">
                  <div class="col">
                  <div class="form-group">
                      <label for="gender"><b>Gender </b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input type="radio" name="gender" value="male" id="m" @if($data->gender=='male') checked @endif>Male&nbsp;&nbsp;&nbsp;
                      <input type="radio" name="gender" value="female" id="f" @if($data->gender=='female') checked @endif>Female&nbsp;&nbsp;&nbsp;
                      <input type="radio" name="gender" value="other" id="o" @if($data->gender=='other') checked @endif>Other&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </div>                
                  </div>
                  <div class="col">
                  <div class="form-group">
                      <label><b>Car Capacity </b></label><p>  
                      <select id="capacity" name="capacity" class="form-select" required>
                          <option value="">Select</option>
                          <option value="2" @if($data->capacity == 2) selected @endif>2</option>
                          <option value="3" @if($data->capacity == 3) selected @endif>3</option>
                          <option value="4" @if($data->capacity == 4) selected @endif>4</option>
                          <option value="5" @if($data->capacity == 5) selected @endif>5</option>
                          <option value="6" @if($data->capacity == 6) selected @endif>6</option>
                      </select> &nbsp;&nbsp;
                  </div> 
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                  <div class="form-group">
                      <label>Profile Picture</label>  <br>
                      <img src="{{$data->profile}}" height="80px" width="80px" >
                      <input type="file" name="image" id="image" class="form-control"> &nbsp;&nbsp;
                  </div>
                  </div><br>
                  <div class="col">
                  <div class="form-group">
                      <label>Licence</label>  <br>
                      <img src="{{$data->licence}}" height="80px" width="80px" >
                      <input type="file" name="licence" id="licence" class="form-control"> &nbsp;&nbsp;
                  </div>                    
                  </div><br>
                </div>
                <div class="row">
                  <div class="col">
                    <label for="carNumber" class="form-group">Car Number</label><br>
                    <input type="text" id="carNumber" name="carnumber" class="form-control" value="{{$data->car_number}}" required>
                  </div>
                  <div class="col">
                    <label for="phone" class="form-group">Car model</label><br>
                    <input type="text" id="model" name="model" class="form-control" value="{{$data->car_model}}" required>
                  </div>
                </div><br>
                <div class="text-right mt-3">
                  <button type="submit" class="btn btn-success">Save changes</button>&nbsp;&nbsp;&nbsp;
                  <button type="cancel" class="btn btn-default">Cancel</button>
                </div>                
               </form>
                @endforeach
                @endif
              </div>
        </div>
      </div>
  </div>

    

</body>
</html>