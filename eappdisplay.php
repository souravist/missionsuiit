<?php

require("db_connection.php");
$sql = "SELECT * FROM `eapp`";
?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(odd) {
  background-color: f0f0f0;
}
</style>
</head>
<body>

<center><h2>E-Application Dashboard | DEAN AA</h2></center>


<table>
  
    <th>Application_ID</th>
    <th>Timestamp</th>
     <th>Topic</th>
      <th>Subject</th>
       <th>Content</th>
  

  <tr>
    <td><?php
$results = mysqli_query($con,$sql);
echo "<table>"; 
 while($rowitem = mysqli_fetch_array($results)) {
    echo "<tr>";
    echo "<td>" . $rowitem['id'] . "</td>";
    
    echo "</tr>";
}
echo "</table>";

?></td>
   
       <td><?php
$results = mysqli_query($con,$sql);
echo "<table>"; 
 while($rowitem = mysqli_fetch_array($results)) {
    echo "<tr>";
    echo "<td>" . $rowitem['timestamp'] . "</td>";
    
    echo "</tr>";
}
echo "</table>";


?></td>


       <td><?php
$results = mysqli_query($con,$sql);
echo "<table>"; 
 while($rowitem = mysqli_fetch_array($results)) {
    echo "<tr>";
    echo "<td>" . $rowitem['topic'] . "</td>";
    
    echo "</tr>";
}
echo "</table>";


?></td>
       <td><?php
$results = mysqli_query($con,$sql);
echo "<table>"; 
 while($rowitem = mysqli_fetch_array($results)) {
    echo "<tr>";
    echo "<td>" . $rowitem['subject'] . "</td>";
    
    echo "</tr>";
}
echo "</table>";


?></td>
       <td><?php
$results = mysqli_query($con,$sql);
echo "<table>"; 
 while($rowitem = mysqli_fetch_array($results)) {
    echo "<tr>";
    echo "<td>" . $rowitem['content'] . "</td>";
    
    echo "</tr>";
}
echo "</table>";


?></td>
</table>

<br>
<br>
<center><h4>What action do you want to take on it? </h4>
  <p>(<b>0</b>=REJECTED | <b>1</b>= APPROVED)</p>



<form action="eappfinal.php" method="post">
  
  <input type="number" name="status" min="0" max="1" required></td>


<button type="submit">GO</button>


    </center>

</form>




</body>

</html>








