<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Capply1</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
		.container{
			width: 40%;
			height: 20%;
			background-color: pink;
		}
        .gfg {
            margin: 3%;
            position: relative;
        }
        .text-container {
            position: absolute;
            color: palevioletred;
            left: 9rem;
            top: 15rem;
            padding: 0 1rem;
        }
    </style>
</head>
<body>
<div class="gfg">
    <img src="images/CareerImage/pic.PNG" height="400px" width="100%">
        <div class="text-container">
		     <h2>Careers</h2>
            <h3>Home\Careers<span style="color:gray;">\Job Form</span></h3>
        </div>
	<div class="container">
		<header class="modal-header"><h2 align="center" >Join Our <span style="color: #45a4c4;">e-cab Family</span></h2></header>
		<form>
			<div class="form-group">
				<label>Name:</label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<label>Address</label>
				<textarea name="adreess" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<lable>Phone</lable>
				<input type="number" name="phone" class="form-control">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control">
            </div>
            
            
			<div class="form-group">
				<label><b>Attach CV*</b></label> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: green; font-size:small;"> **Attached Only Document Type (Pdf,Doc and Excel).</span>
			    	 <input type="file" name="image" required class="form-control">
					
			    </div> 
            <div class="form-group">
            	<label>Date</label>
				<input type="date" name="date">
            	
            </div>
			<div style="padding-bottom: 20px;">
				<button class="btn btn-lg btn-outline-success">Submit</button>
				<button class="btn btn-lg btn-outline-danger">Reset</button>
			</div>
		</form>
		
	</div>

	<?php
		session_start();


	?>

</body>
</html>