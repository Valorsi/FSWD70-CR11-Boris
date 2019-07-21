<?php 
ob_start();
session_start();
require_once 'dbconnect.php';
require_once 'actions/db_connect.php';




?> 

<!DOCTYPE html>
<html>
<head>
   <title>PHP CRUD</title>

   <style type="text/css">
       .manageUser {
           width : 50%;
           margin: auto;
       }

        table {
           width: 100%;
            margin-top: 20px;
       }

   </style>
<meta charset='utf-8'>
</head>
<body>

<div class ="manageUser">
   <a href= "create.php"><button type="button" >Add Event</button></a>
   <table  border="1" cellspacing= "0" cellpadding="0">
       <thead>
           <tr>
               <th>Date & Time</th>
               <th >Event Name</th>
               <th >Address</th>
               <th>Web Address</th>
               <th></th>
           </tr>
       </thead>
       <tbody>

            <?php
           $sql = "SELECT * FROM events";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                       <td>" .$row['event_date']." ".$row['event_time' ]."</td>
                       <td>" .$row['event_name']."</td>
                       <td>" .$row['address']. "</td>
                       <td>" .$row['web_address']."</td>
                       <td>
                           <a href='update.php?id=" .$row['event_id']."'><button type='button'>Edit</button></a>
                           <a href='delete.php?id=" .$row['event_id']."'><button type='button'>Delete</button></a>
                       </td>
                   </tr>" ;
               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
            ?>



            
       </tbody>
   </table>
</div>


<div class ="manageUser">
   <a href= "create.php"><button type="button" >Add restaurant</button></a>
   <table  border="1" cellspacing= "0" cellpadding="0">
       <thead>
           <tr>
               <th>Name</th>
               <th>Type</th>
               <th>Telephone Number</th>
               <th>Description</th>
               <th>Web Address</th>
               <th>address</th>
               <th></th>
           </tr>
       </thead>
       <tbody>

            <?php
           $sql = "SELECT * FROM restaurant";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                       <td>" .$row['restaurant_name']."</td>
                       <td>" .$row['type']."</td>
                       <td>" .$row['tel_nr']. "</td>
                       <td>" .$row['description']. "</td>
                       <td>" .$row['web_address']."</td>
                       <td>" .$row['address']."</td>
                       <td>
                           <a href='r_update.php?id=" .$row['restaurant_id']."'><button type='button'>Edit</button></a>
                           <a href='r_delete.php?id=" .$row['restaurant_id']."'><button type='button'>Delete</button></a>
                       </td>
                   </tr>" ;
               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
            ?>

        

            
       </tbody>
   </table>
</div>

<div class ="manageUser">
   <a href= "create.php"><button type="button" >Add Tourist Attraction</button></a>
   <table  border="1" cellspacing= "0" cellpadding="0">
       <thead>
           <tr>
               <th>Name</th>
               <th>Description</th>
               <th>Web Address</th>
               <th></th>
           </tr>
       </thead>
       <tbody>

            <?php
           $sql = "SELECT * FROM tourist";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                       <td>" .$row['type']."</td>
                       <td>" .$row['description']. "</td>
                       <td>" .$row['web_address']."</td>
                       <td>
                           <a href='t_update.php?id=" .$row['tourist_id']."'><button type='button'>Edit</button></a>
                           <a href='t_delete.php?id=" .$row['tourist_id']."'><button type='button'>Delete</button></a>
                       </td>
                   </tr>" ;
               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
            ?>

        

            
       </tbody>
   </table>
</div>

</body>
</html>