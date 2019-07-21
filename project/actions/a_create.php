
<?php 

require_once 'db_connect.php';

if ($_POST) {
   $ename = $_POST['event_name'];
   $etime = $_POST['event_time'];
   $edate = $_POST[ 'event_date'];
   $address = $_POST['address'];
   $waddress = $_POST['web_address'];

   $sql = "INSERT INTO events (event_date, event_time, address, web_address, event_name) VALUES ('$edate', '$etime', '$address' , '$waddress', '$ename' )";
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