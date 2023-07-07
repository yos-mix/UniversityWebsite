<?php
     if(isset($_POST['submit1'])){
          $yearLevel = $_POST['yearLevel'];
          $course = $_POST['course'];
          $campus = $_POST['campus'];

          $connection = new mysqli('localhost', 'root', 'password', 'oxford'); //Connection
          if($connection->connect_error){
               die('Connection Failed : ' .$connection->connect_error);
          }else{
               $stmt = $connection->prepare("INSERT INTO `enrollment`(`userid`, `yearLevel`, `Course`, `Campus`) VALUES (?, ?, ?, ?)");
               $stmt->bind_param("iiss", $userid, $yearLevel, $course, $campus);
               $stmt->execute();
               if($stmt->execute()){
                    echo '<script type="text/javascript"> alert("Transaction Successful!!") </script>';
                    $stmt->close();
               }else{
                    echo 'Error' . $connection->error;
               }
               //Insert Applicant's Data
          }
     }
?>