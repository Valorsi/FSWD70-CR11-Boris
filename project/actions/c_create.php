
<?php 

require_once 'db_connect.php';

if ($_POST) {
   $ttype = $_POST['type'];
   $desc = $_POST['description'];
   $waddress = $_POST['web_address'];

   $sql = "INSERT INTO tourist (type, description, web_address) VALUES ('$ttype', '$desc' , '$waddress')";
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