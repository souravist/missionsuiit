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

<center><h1>LIVE TIME TABLE </h1></center>
<center><h4>B.Tech (CSE) | Semeseter-7 </h4></center>


<center><p><a href="mon.php" target=""> MONDAY</a> | <a href="tue.php" target=""> TUESDAY</a> | <a href="wed.php" target=""> WEDNESDAY</a> | <a href="thu.php" target=""> THURSDAY</a> | <a href="fri.php" target=""> FRIDAY</a> | <a href="sat.php" target=""> SATURDAY</a></p></center>

<br>
<br>
<br>
<b>
<?php

 echo "TODAY: " . date("d/m/Y") . " | ", "" . date("l") ;
 
 date_default_timezone_set('Asia/Calcutta');
 echo $timestamp = date('| g:i A') ;


?>

</b>
<br>


<table>
  <tr>
    <th>Time</th>
    <th>Subject</th>
    <th>Faculty</th>
    <th>Classroom</th>
  </tr>

</table>


<?php
if (date("l")== "Monday") {

$sql = "SELECT * FROM `mon`";

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
}

else if (date("l")== "Tuesday") {
  $sql = "SELECT * FROM `tue`";

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
}

else if (date("l")== "Wednesday") {
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
}

else if (date("l")== "Thursday") {
  $sql = "SELECT * FROM `thu`";

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
}

else if (date("l")== "Friday") {
  $sql = "SELECT * FROM `fri`";

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
}

else if (date("l")== "Saturday") {
  $sql = "SELECT * FROM `sat`";

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
}




?>







</body>
</html>
