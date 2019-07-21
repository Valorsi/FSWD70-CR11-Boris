<html>
<head>
   <title>Create</title>

   <style type= "text/css">
       fieldset {
           margin: auto;
            margin-top: 100px;
           width: 50% ;
       }

       table tr th  {
           padding-top: 20px;
       }
   </style>

</head>
<body>

<fieldset>
   <legend>Add Event</legend>

   <form  action="actions/a_create.php" method= "post">
       <table cellspacing= "0" cellpadding="0">
           <tr>
               <th>Event Name</th >
               <td><input  type="text" name="event_name"  placeholder="Type of Event" /></td >
           </tr>     
           <tr>
               <th>Event Date</th>
               <td><input  type="date" name= "event_date" placeholder="Date of Event" /></td>
           </tr>
           <tr>
               <th>Event Time</th>
               <td><input type="time"  name="event_time" placeholder ="Time of Event" /></td>
           </tr>
            <tr>
               <th>Event Address</th>
               <td><input type="text"  name="address" placeholder ="Address of Event" /></td>
           </tr>
            <tr>
               <th>Event Web Address</th>
               <td><input type="text"  name="web_address" placeholder ="Website of Event" /></td>
           </tr>
           <tr>
               <td><button type ="submit">Insert Event</button></td>
               <td ><a href= "ad_index.php"><button  type="button">Back</button></a></td>
           </tr >
       </table>
   </form>

</fieldset >

<fieldset>
   <legend>Add restaurant</legend>

   <form  action="actions/b_create.php" method= "post">
       <table cellspacing= "0" cellpadding="0">
           <tr>
               <th>Restaurant Name</th >
               <td><input  type="text" name="restaurant_name"  placeholder="Name of Restaurant" /></td >
           </tr>     
           <tr>
               <th>Type</th>
               <td><input  type="text" name= "type" placeholder="Type of Cuisine" /></td>
           </tr>
           <tr>
               <th>Telephone Number</th>
               <td><input type="text"  name="tel_nr" placeholder ="Telephone Number" /></td>
           </tr>
            <tr>
               <th>Description</th>
               <td><input type="text"  name="description" placeholder ="Description of Restaurant" /></td>
           </tr>
            <tr>
               <th>Restaurant Web Address</th>
               <td><input type="text"  name="web_address" placeholder ="Website of Restaurant" /></td>
           </tr>
            <tr>
               <th>Restaurant  Address</th>
               <td><input type="text"  name="address" placeholder ="Address of Restaurant" /></td>
           </tr>
           <tr>
               <td><button type ="submit">Insert Restaurant</button></td>
               <td ><a href= "ad_index.php"><button  type="button">Back</button></a></td>
           </tr >
       </table>
   </form>

</fieldset >

<fieldset>
   <legend>Add Tourist Attraction</legend>

   <form  action="actions/c_create.php" method= "post">
       <table cellspacing= "0" cellpadding="0">
           <tr>
               <th>Attraction Name</th >
               <td><input  type="text" name="type"  placeholder="Name of Tourist attraction" /></td >
           </tr>     
            <tr>
               <th>Description</th>
               <td><input type="text"  name="description" placeholder ="Description of Attraction" /></td>
           </tr>
            <tr>
               <th>Attraction Web Address</th>
               <td><input type="text"  name="web_address" placeholder ="Website of Attraction" /></td>
           </tr>
           <tr>
               <td><button type ="submit">Insert Tourist Attraction</button></td>
               <td ><a href= "ad_index.php"><button  type="button">Back</button></a></td>
           </tr >
       </table>
   </form>

</fieldset>

</body>
</html>