<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reply | Admin</title>
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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <!-- <link rel="stylesheet" href="css/admin/style.css"></link> -->

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .darker {
            border-color: #ccc;
            background-color: #ddd;
        }
        .container{
            border-radius: 5px;
            padding: 5px;
            margin: 10px 0;
        }
        
    </style>
</head>
<body>

@include("/navbar_profile");
    @include("/sidebar_profile");
<div class="col-md-6 offset-md-3">
    <span class="anchor" id="formChangePassword"></span>
    <hr class="mb-5">           
        <div class="card card-outline-secondary" style="margin-top: 50px;">
            <div class="card-header">
                <h3 class="mb-0"><a href="{{ url('/user_profile')}}"><button style="border: none;"><i class="fa-solid fa-arrow-left"></i></button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reply By Admin</h3>
            </div>
            <div class="card-body">
                    @if(isset($queryInfo))
                    @foreach($queryInfo->all() as $data)
                        <div class="form-control container darker">
                        <span class="form-text small text-muted">
                            {{$data->name}}
                        </span>
                            {{$data->query}}
                        </div>
                    @if($data->reply!='null')
                    <div class="form-control container">
                        <span class="form-text small text-muted">
                            {{$data->given}}
                        </span>
                        <span>{{$data->reply}}</span>
                    </div><br>                    
                    @endif
                    @endforeach
                    @endif
            </div>
        </div>
</div>
   
</body>
</html>