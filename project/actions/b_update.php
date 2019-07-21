<?php 

require_once 'db_connect.php';

if ($_POST) {
   $rname = $_POST['restaurant_name'];
   $rtype = $_POST['type'];
   $rtel = $_POST[ 'tel_nr'];
   $desc = $_POST['description'];
   $waddress = $_POST['web_address'];
   $addr = $_POST['address'];
   $id = $_POST['id'];

   $sql = "UPDATE restaurant SET restaurant_name = '$rname', type = '$rtype', tel_nr = '$rtel', description = '$desc', web_address = '$waddress', address = '$addr' WHERE restaurant_id = '$id' " ;
   if($connect->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../r_update.php?id=" .$id."'><button type='button'>Back</button></a>";
       echo  "<a href='../ad_index.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}

?>