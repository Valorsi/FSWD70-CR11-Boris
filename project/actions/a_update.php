<?php 

require_once 'db_connect.php';

if ($_POST) {
   $ename = $_POST['event_name'];
   $etime = $_POST['event_time'];
   $edate = $_POST[ 'event_date'];
   $address = $_POST['address'];
   $waddress = $_POST['web_address'];
   $id = $_POST['id'];

   $sql = "UPDATE events SET event_name = '$ename', event_time = '$etime', event_date = '$edate', address = '$address', web_address = '$waddress' WHERE event_id = '$id' " ;
   if($connect->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../update.php?id=" .$id."'><button type='button'>Back</button></a>";
       echo  "<a href='../ad_index.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}

?>