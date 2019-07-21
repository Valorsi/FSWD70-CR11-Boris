<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM events WHERE event_id = {$id}" ;
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
   <legend>Update Event</legend>

   <form action="actions/a_update.php"  method="post">
       <table  cellspacing="0" cellpadding= "0">
           <tr>
               <th>Event name</th>
               <td><input type="text"  name="event_name" placeholder ="Event Name" value="<?php echo $data['event_name'] ?>"  /></td>
           </tr >     
           <tr>
               <th>Event Date</th>
               <td><input type= "text" name="event_date"  placeholder="event date" value ="<?php echo $data['event_date'] ?>" /></td >
           </tr>
           <tr>
              <th >Event Time</th>
               <td><input type ="text" name= "event_time" placeholder= "event time" value= "<?php echo $data['event_time'] ?>" /></td>
           </tr> 
           <tr>
              <th >Address</th>
               <td><input type ="text" name= "address" placeholder= " Address" value= "<?php echo $data['address'] ?>" /></td>
           </tr> 

            <tr>
              <th >web address</th>
               <td><input type ="text" name= "web_address" placeholder= " web address" value= "<?php echo $data['web_address'] ?>" /></td>
           </tr> 
           <tr>
               <input type= "hidden" name= "id" value= "<?php echo $data['event_id']?>" />
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