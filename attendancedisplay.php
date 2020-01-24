<?php

require("db_connection.php");
$sql = "SELECT * FROM `attendance`";
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

<center><h2>ATTENDANCE | MATH 1</h2></center>

<p>Roll No. cse_2 | <b> Akanksha Pandey</b></p>

<table>
  
    <th>Dates</th>
    <th>Attendance Value</th>
    
  

  <tr>
    <td><?php
$results = mysqli_query($con,$sql);
echo "<table>"; 
 while($rowitem = mysqli_fetch_array($results)) {
    echo "<tr>";
    echo "<td>" . $rowitem['date'] . "</td>";
    
    echo "</tr>";
}
echo "</table>";

?></td>
   
       <td><?php
$results = mysqli_query($con,$sql);
echo "<table>"; 
 while($rowitem = mysqli_fetch_array($results)) {
    echo "<tr>";
    echo "<td>" . $rowitem['cse_2'] . "</td>";
    
    echo "</tr>";
}
echo "</table>";


?></td>


  </tr>
  
</table>

<p><b>Percentage Calculation:</b> <br> (ΣAttendance Values / Total No. of Dates)*100</p>
  
<p>=
  
  <?php 


$qry = "SELECT SUM(cse_2) AS count FROM `attendance` ";

$res = $con->query($qry);

$total = 0;
$rec = $res->fetch_assoc();
$total = $rec['count'];

echo " " . $total . "\n";
   ?>
/

<?php 


$sql="SELECT cse_2 FROM `attendance` ORDER BY cse_2";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf("%d\n",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }
mysqli_close($con);

?>
<br>
=
<?php

echo ($total / $rowcount)*100;
?>

%
</p>





</body>

</html>








