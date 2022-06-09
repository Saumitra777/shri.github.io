<?php
require 'connect.inc.php';

$query = "SELECT * FROM `contact_page`";

if($query_run = mysqli_query($conn,$query)){
 $rows = mysqli_num_rows($query_run);
 
 
 ?>
 
 <table class="result">
  <tr>
   <th style="border-bottom: 1px solid black">visitor id</th>
   <th style="border-bottom: 1px solid black">first_name</th>
   <th style="border-bottom: 1px solid black">last_name</th>
   <th style="border-bottom: 1px solid black">contact_no</th>
   <th style="border-bottom: 1px solid black">address</th>
   <th style="border-bottom: 1px solid black">problems</th>
  </tr>
 
 
 <?php
 for($i=0; $i<$rows; $i++){
  
  $id = mysql_result($query_run,$i,'visitor_id');
  $first_name = mysql_result($query_run,$i,'first_name');
  $last_name = mysql_result($query_run,$i,'last_name');
  $contact_no = mysql_result($query_run,$i,'contact_no');
  $address = mysql_result($query_run,$i,'address');
  $problems = mysql_result($query_run,$i,'problems');
  
  ?>
  <tr>
   <td .result td>
    <?php echo $id;?>
   </td>
   <td>
    <?php echo $first_name;?>
   </td>
   
   td>
    <?php echo $last_name;?>
   </td>
   
   <td>
    <?php echo $contact_no;?>
   </td>
   
   <td>
    <?php echo $address;?>
   </td>
   
   <td>
    <?php echo $problems;?>
   </td>
  </tr>
  
  
  
  
  <?php
 }
}


?>
</table>
<a href="contact.html">Go to contact page</a>
<html>
 <head>
  <link rel="stylesheet" href="style.css" type="text/css">
 </head>
</html>