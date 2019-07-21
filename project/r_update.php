<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM restaurant WHERE restaurant_id = {$id}" ;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();

?>

<!DOCTYPE html>
<html>
<head>
   <title >Edit User</title>

   <style type= "text/css">
       fieldset {
           margin : auto;
           margin-top: 100px;
            width: 50%;
       }

       table  tr th {
           padding-top: 20px;
       }
   </style>

</head>
<body>

<fieldset>
   <legend>Update restaurant</legend>

   <form action="actions/b_update.php"  method="post">
       <table  cellspacing="0" cellpadding= "0">
           <tr>
               <th>restaurant name</th>
               <td><input type="text"  name="restaurant_name" placeholder ="restaurant Name" value="<?php echo $data['restaurant_name'] ?>"  /></td>
           </tr >     
           <tr>
               <th>Type</th>
               <td><input type= "text" name="type"  placeholder="Type of Cuisine" value ="<?php echo $data['type'] ?>" /></td >
           </tr>
           <tr>
              <th >Telephone Number</th>
               <td><input type ="text" name= "tel_nr" placeholder= "Telephone Number" value= "<?php echo $data['tel_nr'] ?>" /></td>
           </tr> 
           <tr>
              <th >description</th>
               <td><input type ="text" name= "description" placeholder= " description" value= "<?php echo $data['description'] ?>" /></td>
           </tr> 

            <tr>
              <th >Web Address</th>
               <td><input type ="text" name= "web_address" placeholder= " web address" value= "<?php echo $data['web_address'] ?>" /></td>
           </tr> 
            <tr>
              <th >Address</th>
               <td><input type ="text" name= "address" placeholder= " address" value= "<?php echo $data['address'] ?>" /></td>
           </tr> 
           <tr>
               <input type= "hidden" name= "id" value= "<?php echo $data['restaurant_id']?>" />
               <td><button  type= "submit">Save Changes</button ></td>
               <td><a  href= "index.php"><button  type="button" >Back</button ></a></td >
           </tr>
       </table>
   </form >

</fieldset >

</body >
</html >

<?php 
}
?>