<?php
    if(!isset($_SESSION)) 
    {   
        
        session_start(); 
    } 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UniRide Administration</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,500&display=swap" rel="stylesheet">
<link rel="icon" href="icon/uni.png" type="image/png" sizes="16x16" /> 
</head>
<body><style>
body {
  background-image: url('admin.jpg');
  background-position: top;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 120%;
}
</style>
   <?php include 'navbar_admin.php'?>
   <br><br>
   <div class="container">
       <div class="row">
           <div class="page-header">
               <h1 style="text-align: center; color: white ; font-family: 'Poppins', sans-serif;">UniRide Administration</h1>
           </div>
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <p><h1 style="text-align: right;  color: white; font-family: 'Poppins', sans-serif; ;"><strong><marquee direction="left" behavior="scroll">Welcome Admin 😉 We're so excited to have you as part of our team </marquee></strong><!DOCTYPE html>
           </div>
           <div class="col-md-2"></div>
       </div>
   </div>
</body>
</html>