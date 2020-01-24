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


<center><p><a href="mon.php" target="_blank"> MONDAY</a> | <a href="tue.php" target="_blank"> TUESDAY</a> | <a href="wed.php" target="_blank"> WEDNESDAY</a> | <a href="thu.php" target="_blank"> THURSDAY</a> | <a href="fri.php" target="_blank"> FRIDAY</a> | <a href="sat.php" target="_blank"> SATURDAY</a></p></center>

<br>

<b>
<?php

 echo "TODAY: " . date("d/m/Y") . " | ", "" . date("l") ;
 
 date_default_timezone_set('Asia/Calcutta');
 echo $timestamp = date('| g:i A') ;


?>

</b>
<br>

<center><h3>NOW / UPCOMING CLASSES</h3></center>
<table>
  <tr>
    <th>Time</th>
    <th>Subject</th>
    <th>Faculty</th>
    <th>Classroom</th>
  </tr>

</table>

<?php
if (date("l")== "TUESDAY" &&  $timestamp < "12:00 PM" ) {

$sql = "SELECT * FROM `tue` WHERE Time= '11-12 PM' OR Time= '12-1 PM' OR Time= '2-3 PM'";
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
} else if (date("l")== "TUESDAY" && $timestamp < "1:00 PM" ) {

$sql = "SELECT * FROM `tue` WHERE Time= '12-1 PM' OR Time= '2-3 PM'";
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
} else if (date("l")== "TUESDAY" && $timestamp < "3:00 PM" ) {

$sql = "SELECT * FROM `tue` WHERE Time= '3-4 PM'";
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

else if (date("l")== "TUESDAY" && $timestamp < "4:00 PM" ) {

$sql = "SELECT * FROM `tue` WHERE Time= '4-5 PM'";
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

else if (date("l")== "TUESDAY" &&  $timestamp > "5:00 PM") {
	
}

?>
<br>
<center>  <b>ALL CLASSES ARE OVER FOR TODAY!</b> </center>
