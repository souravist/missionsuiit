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

<center><h1>WEDNESDAY TIME TABLE </h1></center>
<center><h4>B.Tech (CSE) | Semeseter-7 </h4></center>





<table>
  <tr>
    <th>Time</th>
    <th>Subject</th>
    <th>Faculty</th>
    <th>Classroom</th>
  </tr>

</table>


<?php


$sql = "SELECT * FROM `wed`";

$results = mysqli_query($con,$sql);
echo "<table>"; 
 while($rowitem = mysqli_fetch_array($results)) {
    echo "<tr>";
    echo "<td>" . $rowitem['Time'] . "</td>";
    echo "<td align= center>" . $rowitem['Subject'] . "</td>";
    echo "<td>" . $rowitem['Faculty'] . "</td>";
    echo "<td>" . $rowitem['Classroom'] . "</td>";
    echo "</tr>";
}
echo "</table>";





?>







</body>
</html>
