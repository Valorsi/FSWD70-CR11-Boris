
<?php 

require_once 'db_connect.php';

if ($_POST) {
   $rname = $_POST['restaurant_name'];
   $rtype = $_POST['type'];
   $rtel = $_POST[ 'tel_nr'];
   $desc = $_POST['description'];
   $waddress = $_POST['web_address'];
   $addr = $_POST['address'];

   $sql = "INSERT INTO restaurant (tel_nr, type, description, web_address, restaurant_name, address) VALUES ('$rtel', '$rtype', '$desc' , '$waddress', '$rname' , '$addr' )";
    if($connect->query($sql) === TRUE) {
       echo "<p>New Record Successfully Created</p>" ;
       echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../ad_index.php'><button type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?>