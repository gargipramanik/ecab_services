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
    
        <?php
            include ("adminHeader.php");
            include ("sidebar.php");
           
            include("connect.php");
        ?>

    <div id="main-content" class="container allContent-section py-4">
        <div class="row">
            <div class="col-sm-3">
                <div class="card" style="background-color: #e0c31d;">
                    <i class="fa fa-users  mb-2" style="font-size: 70px; color:#fff;"></i>
                    <h4 style="color:white;">Total Users</h4>
                    <h5 style="color:white;">
                    <?php
                        $sql="SELECT * from user where user='CLIENT'";
                        $data=$conn-> query($sql);
                        $count=0;
                        if ($data-> num_rows > 0){
                            while ($result=$data-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count;
                    ?></h5>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="background-color: #bc7dd1;">
                    <i class="fa fa-id-card mb-2" style="font-size: 70px; color:#fff;"></i>
                    <h4 style="color:white;">Total Drivers</h4>
                    <h5 style="color:white;">
                    <?php
                       
                       $sql="SELECT * FROM driver";
                       $data=$conn-> query($sql);
                       $count=0;
                       if ($data-> num_rows > 0){
                           while ($result=$data-> fetch_assoc()) {
                   
                               $count=$count+1;
                           }
                       }
                       echo $count;
                   ?>
                   </h5>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="background-color: #607fa1;">
                    <i class="fa fa-car mb-2" style="font-size: 70px; color:#fff;"></i>
                    <h4 style="color:white;">Total Cabs</h4>
                    <h5 style="color:white;">
                    <?php
                       
                       $sql="SELECT * FROM driver";
                       $data=$conn-> query($sql);
                       $count=0;
                       if ($data-> num_rows > 0){
                           while ($result=$data-> fetch_assoc()) {
                   
                               $count=$count+1;
                           }
                       }
                       echo $count;
                   ?>
                   </h5>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="background-color: #588780;">
                    <i class="fa fa-user-secret mb-2" style="font-size: 70px; color:#fff;"></i>
                    <h4 style="color:white;">Total Admin</h4>
                    <h5 style="color:white;">
                    <?php
                       
                       $sql="SELECT * FROM user WHERE user='ADMIN'";
                       $data=$conn-> query($sql);
                       $count=0;
                       if ($data-> num_rows > 0){
                           while ($result=$data-> fetch_assoc()) {
                   
                               $count=$count+1;
                           }
                       }
                       echo $count;
                   ?>
                   </h5>
                </div>
            </div>
        </div>
    </div>  
    <div id="main-content" class="container allContent-section py-4">
        <div class="row">
            <div class="col-sm-3">
                <div class="card" style="background-color: #bc7dd1;">
                <i class="fa fa-info mb-2" style="font-size: 70px; color:#fff;"></i>
                    <h4 style="color:white;">Support</h4>
                    <h5 style="color:white;">
                    <?php
                        $sql="SELECT * from query";
                        $data=$conn-> query($sql);
                        $count=0;
                        if ($data-> num_rows > 0){
                            while ($result=$data-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count;
                    ?></h5>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="background-color: #607fa1;">
                <i class="fa fa-taxi mb-2" style="font-size: 70px; color:#fff;"></i>
                    <h4 style="color:white;">Total Drive</h4>
                    <h5 style="color:white;">
                    <?php
                        $sql="SELECT * from drive";
                        $data=$conn-> query($sql);
                        $count=0;
                        if ($data-> num_rows > 0){
                            while ($result=$data-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count;
                    ?></h5>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="background-color: #e0c31d;">
                <i class="fa fa-info mb-2" style="font-size: 70px; color:#fff;"></i>
                    <h4 style="color:white;">Support</h4>
                    <h5 style="color:white;">
                    <?php
                        $sql="SELECT * from query";
                        $data=$conn-> query($sql);
                        $count=0;
                        if ($data-> num_rows > 0){
                            while ($result=$data-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count;
                    ?></h5>
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