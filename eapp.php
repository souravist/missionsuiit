<?php

require("db_connection.php");

if (isset($_POST["topic"])) {
   
$topic = $_POST['topic'];
}


if (isset($_POST["subject"])) {
   
$subject = $_POST['subject'];
}

if (isset($_POST["content"])) {

$content = $_POST['content'];
}


if (!empty($topic) || !empty($subject) || !empty($content)) {


 $INSERT = "INSERT INTO `eapp` (`topic`, `subject`, `content`) VALUES (?,?,?)";


//  //     //Prepare statement

    
      $stmt = $con->prepare($INSERT);
      $stmt->bind_param("sss", $topic, $subject, $content);
      $stmt->execute();
      echo "The APPLICATION is submitted SUCCESSFULLY!";
  
?>

<a href="eappstudentstatus.php" target="_blank"> <br><br> CHECK STATUS</a>
<?php


      } else {
   // echo "Someone already register using this email";
     // }
     // $stmt->close();
     $con->close();
    }


 die();

?>

</body>
</html>