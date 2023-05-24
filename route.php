<?php 
 session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>UniRide Services</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

 
</head> 
<style>
  Center the loader 
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>


<body onload="myFunction()">

    <div id="loader"></div>

    
    <div id="myDiv">
      <?php include 'navbar.php';?>
      <br>

       <div class="page-header foo">
            <h1 style="text-align: center; font-family: 'Poppins', sans-serif;">Our Services</h1> 
            <p><strong>Disclaimer:</strong> <br>The Below Fare is Just for Reference Not the Exact Fare to be Charged and Subjected to be Changed </p>
            <table id="myTable" class="table table-bordered animated force">
                    <thead>
                    	<th>Vehicle Type</th>
                        <th>Car Taxi</th>
                        <th>Bus</th>
                        <tbody>
                        
                        <tr>
                            <td>Minimum Fare</td>
                            <td>Rs-25/- Meter down upto 4km </td>
                            <td>Rs-6000/- upto 100km upto 12hrs</td> 
                        </tr>
                        <tr>
                            <td>Fare Per KM</td>
                            <td>Rs-12/km </td>
                            <td>Rs-60/km</td> 
                        </tr>
                        <tr>
                            <td>Waiting/Riding Time Charges</td>
                            <td>Rs-3.5/- per min </td>
                            <td>Rs-300/Hr after the package timings </td> 
                        </tr>
                        <tr>
                            <td>Night Time Charges</td>
                            <td>1.5x of Total Fare </td>
                            <td>Nil</td> 
                        </tr>
                        <tr>
                            <td>Applicable Night Timings</td>
                            <td>10.00 PM - 05.00 AM</td>
                            <td>Nil</td> 
                        </tr>
                        
                    </tbody>
                </table>     
      </div> 
       <div class="col-md-3"></div>
       <h1 style="text-align: center; font-size: 26px;">The UniRide offers mobility solutions by connecting customers to drivers  and a wide range of vehicles across metered cabs and Buses, enabling convenience and transparency for hundreds of millions of consumers and over hundreds of driver-partners.</h1>
   </div>
       <br>
       <div class="col-md-3"></div>
       <h2 style="text-align: center;font-family: 'Poppins', sans-serif;">With Schedule option on your UniRide Account, you can book a cab/bus from your UniRide up to 30 days in advance to 1hr 15 mins ahead of the desired pickup time. Note - You can book to ride later from your UniRide Account only. We don't accept any booking requests on Call.</h2>
        
    </div> 
    <br>

    
    
<script>
var myVar;

    //for fakeloader
function myFunction() {
    //myVar = setTimeout(showPage, 1500);
}

function showPage() {
  //document.getElementById("loader").style.display = "none";
  //document.getElementById("myDiv").style.display = "block";
}
</script>

<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  
  
  <script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        sr.reveal('.foo1', { duration: 800,origin: 'top'});
    </script>

</body>
</html>
