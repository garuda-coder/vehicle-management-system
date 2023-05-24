<?php
   
   $id= $_GET['id'];

   $conn=mysqli_connect('localhost','root','','vehicle management');
   $sql="DELETE FROM tripcost WHERE id='$id'";
   $result=mysqli_query($conn,$sql);
   if(mysqli_query($conn,$sql)){
       header("Location: indexbill.php");
   }else{
         echo "Oops ! There's a problem in deleting the Trip";
   }
   
?>
