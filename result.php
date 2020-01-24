<?php

require("db_connection.php");

if (isset($_POST["roll_no"])) {
   
$roll_no = $_POST['roll_no'];
}


if (isset($_POST["subject"])) {
   
$subject = $_POST['subject'];
}

if (isset($_POST["internal_1"])) {

$internal_1 = $_POST['internal_1'];
}


if (isset($_POST["internal_2"])) {

$internal_2 = $_POST['internal_2'];
}


if (isset($_POST["end_sem"])) {

$end_sem = $_POST['end_sem'];
}


if (isset($_POST["assignment"])) {

$assignment = $_POST['assignment'];
}


if (!empty($roll_no) || !empty($subject) || !empty($internal_1) || !empty($internal_2) || !empty($end_sem) || !empty($assignment)) {


 $INSERT = "INSERT INTO `exam`(`roll_no`, `subject`, `internal_1`, `internal_2`, `end_sem`, `assignment`) VALUES (?,?,?,?,?,?)";


//  //     //Prepare statement
    
      $stmt = $con->prepare($INSERT);
      $stmt->bind_param("ssiiii", $roll_no, $subject, $internal_1, $internal_2, $end_sem, $assignment);
      $stmt->execute();
      echo "New record inserted sucessfully";
      } else {
   // echo "Someone already register using this email";
     // }
     // $stmt->close();
     $con->close();
    }


 die();

?>
