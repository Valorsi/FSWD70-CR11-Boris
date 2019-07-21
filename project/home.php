<?php
header('Content-Type: text/html; charset=UTF-8');
ob_start();
session_start();
require_once 'dbconnect.php';
require_once 'actions/db_connect.php';

// if session is not set this will redirect to login page
if( !isset($_SESSION['user' ]) ) {
 header("Location: index.php") ;
exit;
}

// select logged-in users details 
$res=mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome - <?php echo $userRow['userEmail' ]; ?></title>
<meta charset='utf-8'>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



<style>
	
.jumbotron-fluid {
	background-image : url(img/mt.png);
	height: 500px;
	background-position: center;
}
.text-white {
	text-shadow: 1px 1px black;
}




</style>

</head>

<body >

<div class="container-fluid">

<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <a class="navbar-brand" href="#">Boris's Travel Compendium 2, Electric Boogaloo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="restaurant.php">Restaurants <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="event.php">Events</a>
      </li>
    </ul>
  </div>
</nav>

<div class="jumbotron-fluid">
	<h1 class="display-2 text-center text-white">Find the Perfect place for you and your Companions</h1>

</div>

<div class="container-fluid">
		

<h1 class="display-3 text-center"> Events </h1>

		  <?php
           $sql = "SELECT * FROM events";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<div class='shadow p-5 mb-4'>
                   <h1 class='display-4'>" .$row['event_name'].  " </h1>  
                   <p> " .$row['event_date']. " " .$row['event_time']. "</p>
                   <p>" .$row['address']. "</p> <a href= " .$row['web_address']. "> Website</a>
                   </div> " ;
                    };
               }

                   ?>

<h1 class="display-3 text-center mt-5"> Restaurants </h1>

		  <?php
           $sql = "SELECT * FROM restaurant";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<div class='shadow p-5 mb-4'>
                   <h1 class='display-4'>" .$row['restaurant_name'].  " </h1>  
                   <p> " .$row['type']. " <br> " .$row['tel_nr']. "</p>
                   <p>" .$row['description']. "</p>
                   <p>" .$row['address']. "</p> <a href= " .$row['web_address']. "> Website</a>
                   </div> " ;
                    };
               }

                   ?>

<h1 class="display-3 text-center mt-5"> Tourist Attractions </h1>
               		  <?php
           $sql = "SELECT * FROM tourist";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<div class='shadow p-5 mb-4'>
                   <h1 class='display-4'>" .$row['type'].  " </h1>  
                   
                   <p>" .$row['description']. "</p>
                   <p>  </p> <a href= " .$row['web_address']. "> Website</a>
                   </div> " ;
                    };
               }

                   ?>
               






                       


</div>
            
          
  
        
 </div> 
  <a  href="logout.php?logout">Sign Out</a>
</body>
</html>
<?php ob_end_flush(); ?>