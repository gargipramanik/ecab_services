
<?php
    include("connect.php");
    include("adminHeader.php");
    include("sidebar.php");
?>
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
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      $sql="SELECT * FROM driver";
      $data=$conn-> query($sql);
      $count=1;
      if ($data-> num_rows > 0){
        while ($result=$data-> fetch_assoc()) {
    ?>
    <tr>
      <td><?php echo $count?></td>
      <td><img height="100px" width="100px" src="<?php echo $result['profile']; ?>" alt=""></td>
      <td><?php echo $result["fname"];?> <?php echo $result["lname"];?></td>      
      <td><?php echo $result["email"];?></td>      
      <td><?php echo $result["phone"];?></td> 
      <td><?php echo $result["gender"];?></td>     
      <td><?php echo $result["car_number"];?></td>
      <td><button class="btn btn-success" style="height:40px" onclick="itemEditForm('<?php echo $result['id']?>')">Unblock</button>&nbsp;&nbsp;&nbsp;&nbsp;
      <button class="btn btn-danger" style="height:40px" onclick="itemDelete('<?php echo $result['id']?>')">Block</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

  
  
</div>
    <script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>