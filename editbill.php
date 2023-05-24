<?php
   $id= $_GET['id'];

   $conn=mysqli_connect('localhost','root','','vehicle management');
   $sql="SELECT * FROM tripcost WHERE id='$id'";
   $result=mysqli_query($conn,$sql);

   $std=mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Edit Bill</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <br><br><br>
	 <?php include 'navbar.php';?>
     
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <a class="btn btn-info" href="index.php">Bill List</a>
        </div> 
        <div class="col-md-8">
        <h2>Edit Bill</h2>
        <hr>

        
        <form action="updatebill.php?id=<?php echo '$id'.'$id'; ?>" method="POST">
        
        <div class="form-group">
          <label for="name">ID</label>
          <input required type="text" class="form-control" name="id" placeholder="vehicle id" value="<?php echo $std['id']?>">
        </div>

        <div class="form-group">
          <label for="Roll">Total Distance Travelled</label>
          <input required type="text" class="form-control" name="total_km" placeholder="Total Distance" value="<?php echo $std['total_km']?>">
        </div>
        
        <div class="form-group">
          <label for="Age">Oil Cost</label>
          <input type="text" class="form-control" name="oil_cost" placeholder="Oil Cost" value="<?php echo $std['oil_cost']?>">
        </div>

        <div class="form-group">
          <label for="Address">Extra Cost</label>
          <input type="text" class="form-control" name="extra_cost" placeholder="Extra Cost" value="<?php echo $std['extra_cost']?>">
        </div>

        <div class="form-group">
          <label for="Mobile">Total Cost </label>
          <input type="text" class="form-control" name="total_cost" placeholder="Total Cost" value="<?php echo $std['total_cost']?>">
        </div>

        <button type="submit" class="btn btn-info">Submit</button>
      </form>
        </div>
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 