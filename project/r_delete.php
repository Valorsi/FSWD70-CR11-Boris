<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM restaurant WHERE restaurant_id = '$id' " ;
   $result = $connect->query($sql);
   $data = $result->fetch_assoc();

   $connect->close();


?>

<!DOCTYPE html>
<html>
<head>
   <title >Delete Restaurant</title>
</head>
<body>

<h3>Do you really want to delete this Restaurant?</h3>
<form action ="actions/b_delete.php" method="post">

   <input type="hidden"  name= "id" value="<?php echo $data['restaurant_id'] ?>" />
   <button type="submit">Yes, delete it!</button >
   <a href="ad_index.php"><button type="button">No, go back!</button ></a>
</form>

</body>
</html>

<?php
}
?>