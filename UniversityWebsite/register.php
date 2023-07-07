<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="register.css">
     <title>Enroll Now!</title>
</head>
<body>
     <div class="container">
          <div class="side-bar">
               <ul>
                    <li><a href=""><ion-icon class="icon" name="logo-facebook"></ion-icon></a></li>
                    <li><a href=""><ion-icon class="icon" name="logo-twitter"></ion-icon></a></li>
                    <li><a href=""><ion-icon class="icon" name="logo-instagram"></ion-icon></a></li>
                    <li><a href=""><ion-icon class="icon" name="mail-outline"></ion-icon></a></li>
               </ul>
          </div>
          <div class="content">
               <nav>
                    <div class="logo">
                         <img src="images/logoWhite.png">
                    </div>
                    <div class="links">
                         <ul>
                              <li><a href="main.html">HOME</a></li>
                              <li><a href="#contact">CONTACT</a></li>
                              <li><a href="courses.html">COURSES</a></li>
                              <li><a href="">ABOUT US</a></li>
                              <li><a href="">HELP</a></li>
                         </ul>
                    </div>
               </nav>
               <!-- Enroll -->
               <div class="enroll">
                    <div class="enroll-left">
                         <div class="enroll-nav">
                              <div class="icon-nav">
                                   <ion-icon class="icon1" name="person-circle-outline"></ion-icon>
                              </div>
                              <div class="loginlink">
                                   <p>Have account already?<a href="#login">Login</a></p>
                              </div>
                         </div>
                         <hr style="border-top: 10px solid #415967; margin: 10px 0 20px 0;
                         width: 100%;">
                         <form action="register.php" method="post" autocomplete="off">
                              <h2>Name</h2>
                              <div class="merge">
                                   <input type="text" placeholder="Last Name" id="lastName" name="lastName" autocomplete="off">
                                   <input type="text" placeholder="First Name" id="firstName" name="firstName" autocomplete="off">
                                   <input type="text" placeholder="Middle Name" id="middleName" name="middleName" autocomplete="off">
                              </div>
                              <div class="column">
                                   <div class="left">
                                        <h2>Birthday</h2>
                                        <input type="date" name="birthday" id="birthday" name="birthday" autocomplete="off">
                                   </div>
                                   <div class="right">
                                        <h2>Age</h2>
                                        <input type="text" placeholder="Age" id="age" name="age" autocomplete="off">
                                   </div>
                              </div>
                              <br>
                              <hr class="line">
                              <br>
                              <h2>Address</h2>
                              <div class="merge">
                                   <input type="text" placeholder="House No." id="houseNo" name="houseNo" autocomplete="off">
                                   <input type="text" placeholder="Baranggay" id="baranggay" name="baranggay" autocomplete="off">
                                   <input type="text" placeholder="City/Town" id="town" name="town" autocomplete="off">
                                   <hr>
                                   <input type="text" placeholder="Provice" id="province" name="province" autocomplete="off">
                                   <input type="text" placeholder="Zip Code" id="zipCode" name="zipCode" autocomplete="off">
                              </div>
                              <div class="column">
                                   <div class="left">
                                        <h2>Contact Number</h2>
                                        <input type="text" placeholder="Contact No." id="contactNo" name="contactNo" autocomplete="off">
                                   </div>
                                   <div class="right">
                                        <h2>E-mail</h2>
                                        <input type="email" placeholder="E-mail" id="email" name="email" autocomplete="off">
                                   </div>
                              </div>
                              <br>
                              <hr class="line">
                              <br>
                              <h2>Legal Guardian</h2>
                              <hr style="border-top: 10px solid #415967; margin: 10px 0 20px 0;
                              width: 100%;">
                              <h2>Name</h2>
                              <div class="merge">
                                   <input type="text" placeholder="Last Name" id="guarLastName" name="guarLastName" autocomplete="off">
                                   <input type="text" placeholder="First Name" id="guarFirstName" name="guarFirstName" autocomplete="off">
                                   <input type="text" placeholder="Middle Name" id="guarMiddleName" name="guarMiddleName" autocomplete="off">
                              </div>
                              <h2>Address</h2>
                              <div class="merge">
                                   <input type="text" placeholder="House No." id="guarHouseNo" name="guarHouseNo" autocomplete="off">
                                   <input type="text" placeholder="Baranggay" id="guarBaranggay" name="guarBaranggay" autocomplete="off">
                                   <input type="text" placeholder="City/Town" id="guarTown" name="guarTown" autocomplete="off">
                                   <hr>
                                   <input type="text" placeholder="Provice" id="guarProvince" name="guarProvince" autocomplete="off">
                                   <input type="text" placeholder="Zip Code" id="guarZipcode" name="guarZipCode" autocomplete="off">
                              </div>
                              <div class="column">
                                   <div class="left">
                                        <h2>Contact Number</h2>
                                        <input type="text" placeholder="Contact No." id="guarContactno" name="guarContactNo" autocomplete="false">
                                   </div>
                              </div>
                              <input class="btn" type="submit" placeholder="Submit" id="submit" name="submit">
                              <br>
                              <br>
                         </form>
                    </div>
                    <div class="enroll-right" style="height: 100%;">
                         <div class="box" style="height: 100%;">
                              <h4>Divisions and Department</h4>
                              <hr style="margin-bottom: 5px; margin-left: 3%; margin-right: 3%;border-top: 1px solid #fff; width: 93%;">
                              <hr style="margin-bottom: 5px; margin-left: 15%; margin-right: 15%; border-top: 1px solid #fff; width: 70%;">
                              <hr style="margin-bottom: 5px; margin-left: 30%; margin-right: 30%; border-top: 1px solid #fff; width: 40%;">
                              <ul>
                                   <li><a href="#">Humanities Division</a></li>
                                   <li><a href="#">Mathematical, Physical & Life Sciences Division</a></li>
                                   <li><a href="#">Medical Sciences Division</a></li>
                                   <li><a href="#">Social Sciences Division</a></li>
                                   <li><a href="#">Department for Continuing Education</a></li>
                                   <li><a href="#">Gardens, Libraries and Museums</a></li>
                              </ul>
                         </div>
                         <div class="box" style="height: 100%;">
                              <h4>Scholarships</h4>
                              <hr style="margin-bottom: 5px; margin-left: 3%; margin-right: 3%;border-top: 1px solid #fff; width: 93%;">
                              <hr style="margin-bottom: 5px; margin-left: 15%; margin-right: 15%; border-top: 1px solid #fff; width: 70%;">
                              <hr style="margin-bottom: 5px; margin-left: 30%; margin-right: 30%; border-top: 1px solid #fff; width: 40%;">
                              <ul>
                                   <li><a href="#">Hill Foundation Scholarship</a></li>
                                   <li><a href="#">Ahmet Ertegun Memorial Scholarship</a></li>
                                   <li><a href="#">Palgrave Browm Scholarship</a></li>
                                   <li><a href="#">Reach Oxford Scholarship</a></li>
                                   <li><a href="#">Simon and June Li Undergraduate Scholarship</a></li>
                                   <li><a href="#">Oxford-Arlan Hamilton & Earline Butler Sims Scholarship</a></li>
                                   <li><a href="#">Dr Ateh Jewel Foundation Awards</a></li>
                                   <li><a href="#">Oxford Centre for Islamic Studies (OCIS) Undergraduate Scholarship</a></li>
                              </ul>
                         </div>
                         <div class="box" style="height: 100%;">
                              <h4>Oxford University Cclubs and Societies</h4>
                              <hr style="margin-bottom: 5px; margin-left: 3%; margin-right: 3%;border-top: 1px solid #fff; width: 93%;">
                              <hr style="margin-bottom: 5px; margin-left: 15%; margin-right: 15%; border-top: 1px solid #fff; width: 70%;">
                              <hr style="margin-bottom: 5px; margin-left: 30%; margin-right: 30%; border-top: 1px solid #fff; width: 40%;">
                              <ul>
                                   <li><a href="#">Oxford University Sport</a></li>
                                   <li><a href="#">University Club</a></li>
                                   <li><a href="#">Oxford Newcomers' Club</a></li>
                                   <li><a href="#">Junior Common Room</a></li>
                                   <li><a href="#">Middle/Graduate Common Room</a></li>
                                   <li><a href="#">Oxford SU(Student Union)</a></li>
                                   <li><a href="#"> Student Media
                                        <ul>
                                             <li><a href="#">Cherwell</a></li>
                                             <li><a href="#">Oxford Student</a></li>
                                             <li><a href="#">Isis Magazine</a></li>
                                        </ul>
                                   </a></li>
                              </ul>
                         </div>
                    </div>
               </div>
               <!-- Login -->
               <div class="login">
                    <form action="login.php" method="post">
                         <div class="login-form">
                              <div class="enroll-nav">
                                   <div class="icon-nav">
                                        <ion-icon class="icon1" name="person-circle-outline"></ion-icon>
                                   </div>
                              </div>
                              <hr style="border-top: 10px solid #415967; margin: 10px 0 20px 0;
                              width: 100%;">
                              <h2 id="login">Username</h2>
                              <input type="text" placeholder="Username" id="userName" name="username" autocomplete="off">
                              <h2>Password</h2>
                              <input type="password" placeholder="Password" id="passWord" name="password"><br>
                              <button>Login<ion-icon name="log-in-outline"></ion-icon></button>
                         </div>
                    </form>
               </div>
               <!-- Footer -->
               <div class="contact-details">
                    <div class="card-left">
                         <div class="cards1">
                              <div class="icons">
                                   <ion-icon class="ion" name="home-outline"></ion-icon>
                              </div>
                              <div class="details">
                                   <h2 id="contact">Address</h2>
                                   <small>Wellington Square
                                        Oxford
                                        OX1 2JD
                                        United Kingdom
                                   </small>
                              </div>
                         </div>
                         <div class="cards2">
                              <div class="icons">
                                   <ion-icon class="ion" name="call-outline"></ion-icon>
                              </div>
                              <div class="details">
                                   <h2>Telephone No.</h2>
                                   <small>+44 1865 270000</small>
                              </div>
                         </div>
                    </div>
                    <div class="card-right">
                         <div class="cards1">
                              <div class="icons">
                                   <ion-icon class="ion" name="navigate-circle-outline"></ion-icon>
                              </div>
                              <div class="details">
                                   <h2>Fax</h2>
                                   <small>+44 1865 27708</small>
                              </div>
                         </div>
                         <div class="cards2">
                              <div class="icons">
                                   <ion-icon class="ion" name="mail-outline"></ion-icon>
                              </div>
                              <div class="details">
                                   <h2>E-mail</h2>
                                   <small>graduate.admissions@admin.ox.ac.uk</small>
                              </div>
                         </div>
                    </div>               
               </div>
          </div>
     </div>
     <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
<?php
if(isset($_POST['submit'])){
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
          echo '<script type="text/javascript"> alert("Registration Successful!!") </script>';
          $stmt->close();
          //Insert Applicant's Data
     }
}
?>
