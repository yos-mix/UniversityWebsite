<?php
     $lastName = $_POST['lastName'];
     $middleName = $_POST['middleName'];
     $firstName = $_POST['firstName'];
     $birthday = $_POST['birthday'];
     $houseNo = $_POST['houseNo'];
     $baranggay = $_POST['baranggay'];
     $town = $_POST['town'];
     $province = $_POST['province'];
     $zipCode = $_POST['zipCode'];
     $contactNo = $_POST['contactNo'];
     $email = $_POST['email'];
     $address = $_POST['houseNo'] . " " . $_POST['baranggay'] . " " . $_POST['town'] . " " . $_POST['province'];

     //$concatadd= mysqli_query("SELECT Concat($houseNo, ', ', $baranggay, ', ', $town, ', ', $province) AS fulladdress FROM appinfo");
     //$address= $row['fulladdress']; 
     // Guardian
     $guarLastName = $_POST['guarLastName'];
     $guarMiddleName = $_POST['guarMiddleName'];
     $guarFirstName = $_POST['guarFirstName'];
     $guarHouseNo = $_POST['guarHouseNo'];
     $guarBaranggay = $_POST['guarBaranggay'];
     $guarTown = $_POST['guarTown'];
     $guarProvince = $_POST['guarProvince'];
     $guarZipCode = $_POST['guarZipCode'];
     $guarContactNo = $_POST['guarContactNo'];
     $guarName = $_POST['guarFirstName'] . " " . $_POST['guarMiddleName'] . " " . $_POST['guarLastName'];
     $guarAddress = $_POST['guarHouseNo'] . " " . $_POST['guarBaranggay'] . " " . $_POST['guarTown'] . " " . $_POST['guarProvince']. " " . $_POST['guarZipCode'];


     $connection = new mysqli('localhost', 'root', 'password', 'oxford'); //Connection
     if($connection->connect_error){
          die('Connection Failed : ' .$connection->connect_error);
     }else{
          $stmt = $connection->prepare("INSERT INTO `appinfo`(`lastName`, `middleName`, `firstName`, `birthday`, `address`, `zipCode`, `contactNo`, `email`, `guarName`, `guarAddress`, `guarContactNo`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
          $stmt->bind_param("sssssiisssi", $lastName, $middleName, $firstName, $birthday, $address, $zipCode, $contactNo, $email, $guarName, $guarAddress, $guarContactNo);
          $stmt->execute();
          echo "Registration Successful!";
          $stmt->close();
          //Insert Applicant's Data
     }
?>