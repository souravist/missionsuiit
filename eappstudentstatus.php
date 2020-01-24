<?php

require("db_connection.php");
?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;

  width: 60%;
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

<center><h1>STUDENT APPLICATION STATUS</h1></center>
<center><h4>[ Ajit Singh | <b> Roll No. 17BTECE01 </b>] </h4></center>



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
    <th>Application ID</th>
    <th>Timestamp</th>
        <th>Topic</th>
            <th>Subject</th>
                <th>Content</th>

  </tr>

</table>


<?php

$sql = "SELECT * FROM `eapp`";



$results = mysqli_query($con,$sql) or die( mysqli_error($con));
echo "<table>"; 
 while($rowitem = mysqli_fetch_array($results)) {
    echo "<tr>";
    echo "<td>" . $rowitem['id'] . "</td>";
    echo "<td>" . $rowitem['timestamp'] . "</td>";
    echo "<td>" . $rowitem['topic'] . "</td>";
    echo "<td>" . $rowitem['subject'] . "</td>";
    echo "<td>" . $rowitem['content'] . "</td>";
    echo "</tr>";
}
echo "</table>";




?>



</b>
<br>


<table>
  <tr>
    <th>Application ID</th>
<!--     <th>Action Time</th> -->

    <th>Status <br>(0)= REJECTED (1)=APPROVED</th>
  </tr>

</table>

<?php

$sql = "SELECT * FROM `eapp_2`";



$results = mysqli_query($con,$sql) or die( mysqli_error($con));
echo "<table>"; 
 while($rowitem = mysqli_fetch_array($results)) {
    echo "<tr>";
    echo "<td>" . $rowitem['id'] . "</td>";
    // echo "<td>" . $rowitem['action_time'] . "</td>";
    echo "<td>" . $rowitem['status'] . "</td>";

    echo "</tr>";
}
echo "</table>";




?>


</body>
</html>
