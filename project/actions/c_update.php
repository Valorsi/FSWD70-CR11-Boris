<?php 

require_once 'db_connect.php';

if ($_POST) {
   $ttype = $_POST['type'];
   $desc = $_POST['description'];
   $waddress = $_POST['web_address'];
   $id = $_POST['id'];

   $sql = "UPDATE tourist SET  type = '$ttype', description = '$desc', web_address = '$waddress'  WHERE tourist_id = '$id' " ;
   if($connect->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../c_update.php?id=" .$id."'><button type='button'>Back</button></a>";
       echo  "<a href='../ad_index.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}

?>