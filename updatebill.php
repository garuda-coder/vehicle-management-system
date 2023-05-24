<?php
   $id=$_POST['id'];
   $total_km=$_POST['total_km'];
   $oil_cost=$_POST['oil_cost'];
   $extra_cost=$_POST['extra_cost'];
   $total_cost=$_POST['total_cost'];

   $conn=mysqli_connect('localhost','root','','vehicle management');
   $sql="UPDATE tripcost SET id='$id',total_km='$total_km',oil_cost='$oil_cost',extra_cost='$extra_cost',total_cost='$total_cost' WHERE id='$id'";

   if(mysqli_query($conn,$sql)){
      header("Location: showbill.php?id=".$id); 
   }else{
        echo "Not Updated";
   }
?>