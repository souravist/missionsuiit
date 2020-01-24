<?php

require("db_connection.php");
?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;

  width: 100%;
}

td, th {
  border: 5px solid #dddddd;
  text-align: middle;
  padding: 25px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<center><h1>Student Result View </h1></center>
<center><h4> Ajit Singh | 20BTCSE40 </h4></center>


<br>


<table>
  <tr>
    <th >Subject</th>
    <th>Internal 1</th>
    <th>Internal 1</th>
    <th>EndSem</th>
    <th>Assignment</th>
  </tr>

</table>


<?php


$sql = "SELECT * FROM `exam` WHERE roll_no = '20BTCSE40' ";



$results = mysqli_query($con,$sql);
echo "<table>"; 
 while($rowitem = mysqli_fetch_array($results)) {
    echo "<tr>";
    echo "<td>" . $rowitem['subject'] . "</td>";
    echo "<td>" . $rowitem['internal_1'] . "</td>";
    echo "<td>" . $rowitem['internal_2'] . "</td>";
    echo "<td>" . $rowitem['end_sem'] . "</td>";
    echo "<td>" . $rowitem['assignment'] . "</td>";
    echo "</tr>";
}
echo "</table>";



?>







</body>
</html>
