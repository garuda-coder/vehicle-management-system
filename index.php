<?php 
    $connection=mysqli_connect("localhost","root","","vehicle management");

    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome UniRide Vehicle Booking</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
     <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> 
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
    

 
</head> 
<style>
    
.parallax {
    background-image: url("pexels-hamza-nouasria-8141163.jpg");
    height: 100%;

    /* Set a specific height */
    min-height: 700px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    }
    
.parallax1 {
    /* The image used */
    background-image: url("pexels-photo-280310 .jpeg");
    height: 100%;

    /* Set a specific height */
    min-height: 600px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    } 
    
    .navbar-fixed-top.scrolled {
       background-color: ghostwhite;
      transition: background-color 200ms linear;
    }

</style>
<body data-spy="scroll" data-target=".navbar" data-offset="50" onload="myFunction()"> 

    <div class="parallax foo">
       <?php include 'navbar.php';?>
    
        <div class="hero-text" style="font-size:50px text-align: center; position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);color: white;">
           
            <h1 class="animated rubberBand" >UniRide Vehicle Booking</h1>
            <p>A Management System Where You Can Easily Book the Buses/Cars</p>
            
            <?php if(isset($_SESSION['username'])==true) { ?>
            <a class="btn btn-success" style="text-align: center" href="booking.php">Book a Bus/Car</a>
            
            <?php } else{  ?>
            <a class="btn btn-success" style="text-align: center" href="login.php">Login To Book A Bus/Car</a> 
            <?php } ?>
            
            
          </div>

    </div>                 
    
    <div>
       <br><br>
        <div id="bus_route" class="container">
          <div class="page-header">
            <h1 style="text-align: center">Bus Route</h1>      
          </div> 
          <div class="row">
              <div class="col-md-6 foo">
                <p><b>The UniRide Bus goes around the Kolkata City in different intervals. This is the route of the UniRide Bus.</b></p>
                <img src="pexels-photo-136739.jpeg" class="img-responsive" >  
              </div>
              <div class="col-md-6">
                  <br>
                   <iframe src="https://www.google.com/maps/embed?pb=!1m24!1m8!1m3!1d141247.25359503066!2d88.305888435495!3d22.541889969029707!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3a02722b05a38e87%3A0x276c0d30e6be12ea!2sNetaji%20Subhash%20Engineering%20College%2C%20Mauza%20Ranabhutia%2C%20Techno%20City%2C%20Garia%2C%20West%20Bengal%20700152!3m2!1d22.4762788!2d88.41494519999999!4m5!1s0x3a027793e322b5b1%3A0x252e90291f4157f5!2sHowrah%20Railway%20Station%2C%20Howrah%2C%20West%20Bengal!3m2!1d22.5830002!2d88.3372909!5e0!3m2!1sen!2sin!4v1684253525593!5m2!1sen!2sin" width="500" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                   <p>The Bus Route</p>
              </div>
          </div>       
        </div>
        
        <br>
        <div class="page-header">
            <h1 style="text-align: center">Driver</h1>      
        </div>
        <div class="parallax1"></div>
        <div id="driver" class="container">
          
          <div class="row">
              <div class="col-md-12">
                  <p style="font-size: 20px;">The Drivers of UniRide are very punctual and they provides great service. Every one of them is professional and great at their jobs</p>
                  
              </div>
          </div>
               
        </div>
        
        
        <div id="bus" class="container">
          <div class="page-header">
            <h1 style="text-align: center">Bus </h1>      
          </div> 
          <div class="row">
              <div class="col-md-6">
                
                <img src="pexels-photo-385998.jpeg" class="img-responsive" >  
              </div>
              <div class="col-md-6 foo1">
                  <p style="font-size:20px;"><b>In UniRide we have around ten buses and each one of it is well maintained. These buses goes in different direction of the city and can also be hired.</b></p>
              </div>
              
          </div>       
        </div>
        
        
          
          <p></p>      
                
        </div>  
        
        <footer style="background-color: #2f2f2f;
          color: #fff; padding-top: 70px;
          padding-bottom: 70px;" class="container-fluid text-center">
                <p>All rights reserved ® by UniRide ™ (2023) behalf Of Group-19 CSE</p> 
        </footer>
        
        
        
        
    
    
    
<script>
    $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $a= $(".parallax");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $a.height());
  });
}); 
    
    </script>    
  
  
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  
  
  <script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        sr.reveal('.foo1', { duration: 800,origin: 'top'});
    </script>
    
</body>
</html>