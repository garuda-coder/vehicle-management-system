<?php
  
    if(isset($_SESSION['username'])==false) {    
?>  
  
  <div class="container">
      
         <nav class="navbar navbar-inverse navbar-fixed-top gabanav">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>

            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav gabali">
                <li><a href="index.php">Home</a></li>
                <li><a href="buslist.php">Our Vehicles</a></li>
                <li><a href="driverlist.php">Our Drivers</a></li>
                <li><a href="route.php">Our Services</a></li>
                <li><a href="complaint.php">Complaints</a></li>

  <style>
    .search-box {
    width: 350px;
    position: relative;
    display: flex;
  }
  .search-box input {
    padding: 8px;
    font-size: 16px;
    border: 2px solid #ccc;
    border-radius: 20px;
    width: 100%;
    outline: none;
  }

  </style>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="login_admin.php"><span class="glyphicon glyphicon-user"></span> Admin Login</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> User Login</a></li>
              </ul>
            </div> 

            </div>   
        </nav>
             
      
       
  </div>
   
       
    <?php } else { ?> 
    <div class="container">
       <nav class="navbar navbar-inverse navbar-fixed-top gabanav">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>

            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav gabali">
                <li><a href="index.php">Home</a></li>
                <li><a href="buslist.php">Vehicle</a></li>
                <li><a href="driverlist.php">Driver</a></li>
                <li><a href="route.php">Bus Route</a></li>
                <li><a href="complaint.php">Complaints</a></li>
                <li><a href="mybill.php?id=<?php echo $_SESSION['username']; ?>">My Account</a></li>


              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Log Out</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Welcome <?php echo $_SESSION['username']; ?></a></li>
              </ul>
            </div> 

        </div> 
      
    </nav> 
    </div>
    
    
    <?php } ?> 
    
    
    
    
   
    
    