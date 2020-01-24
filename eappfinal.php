<?php

require("db_connection.php");


if (isset($_POST["status"])) {
   
$status = $_POST['status'];
}



if (!empty($status)) {



$INSERT = "INSERT INTO `eapp_2`(`status`) VALUES (?)";


//  //     //Prepare 

    
    
      $stmt = $con->prepare($INSERT);
      $stmt->bind_param("i", $status);
      $stmt->execute();


      echo "It's APPROVED";
      } else {
  $INSERT = "INSERT INTO `eapp_2`(`status`) VALUES (?)";


//  //     //Prepare statement
    
    
      $stmt = $con->prepare($INSERT);
      $stmt->bind_param("i", $status);
      $stmt->execute();
   echo "It's REJECTED";

     // }
     // $stmt->close();
     $con->close();
    }


 die();

?>


