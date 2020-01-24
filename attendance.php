<?php

require("db_connection.php");

if (isset($_POST["date"])) {
   
$date = $_POST['date'];
}


if (isset($_POST["cse_1"])) {
   
$cse_1 = $_POST['cse_1'];
}

if (isset($_POST["cse_2"])) {

$cse_2 = $_POST['cse_2'];
}


if (isset($_POST["cse_3"])) {

$cse_3 = $_POST['cse_3'];
}


if (isset($_POST["cse_4"])) {

$cse_4 = $_POST['cse_4'];
}


if (isset($_POST["cse_5"])) {

$cse_5 = $_POST['cse_5'];
}


if (!empty($date) || !empty($cse_1) || !empty($cse_2) || !empty($cse_3) || !empty($cse_4) || !empty($cse_5)) {


 $INSERT = "INSERT INTO `attendance`(`date`, `cse_1`, `cse_2`, `cse_3`, `cse_4`, `cse_5`) VALUES (?,?,?,?,?,?)";


//  //     //Prepare statement
    
      $stmt = $con->prepare($INSERT);
      $stmt->bind_param("siiiii", $date, $cse_1, $cse_2, $cse_3, $cse_4, $cse_5);
      $stmt->execute();
      echo "Attendance submitted sucessfully";
      } else {
   // echo "Someone already register using this email";
     // }
     // $stmt->close();
     $con->close();
    }


 die();

?>
