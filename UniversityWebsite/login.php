<?php
     $username = $_POST['username'];
     $password = $_POST['password'];

     //Database Connection
     $con = new mysqli("localhost", "root", "password", "oxford");
     if($con->connect_error){
          die("Failed to connect : ".$con->connect_error);
     }else{
          $stmt = $con->prepare("select * from appaccount where username = ?");
          $stmt->bind_param("s", $username);
          $stmt->execute();
          $stmt_result = $stmt->get_result();
          if($stmt_result->num_rows > 0){
               $data = $stmt_result->fetch_assoc();
               if($data['password'] === $password){
                    $userid = $data['userid'];
                    ?>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                         <meta charset="UTF-8">
                         <meta http-equiv="X-UA-Compatible" content="IE=edge">
                         <meta name="viewport" content="width=device-width, initial-scale=1.0">
                         <link rel="stylesheet" href="login.css">
                         <title>Login | Oxford</title>
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
                                             <img src="images/logo.png">
                                        </div>
                                        <div class="links">
                                             <ul>
                                                  <li><a href="#">HOME</a></li>
                                                  <li><a href="#contact">CONTACT</a></li>
                                                  <li><a href="courses.html">COURSES</a></li>
                                                  <li><a href="">ABOUT US</a></li>
                                                  <li><a href="">HELP</a></li>
                                             </ul>
                                        </div>
                                   </nav>
                                   <div class="user-box">
                                        <div class="user-icon">
                                             <ion-icon class="icon1" name="person-circle-outline"></ion-icon>
                                        </div>
                                        <div class="user-info">
                                             <h4 style="display: inline-block;">
                                                  <?php
                                                       $conn = mysqli_connect("localhost", "root", "password", "oxford");

                                                       if($conn->connect_error){
                                                            die("Connection Failed:". $conn->connect_error);
                                                       }
                                                       $name = $conn-> query("SELECT `lastName` FROM `appinfo` WHERE `userid` = '$userid'");//querry for name
                                                       if (!$name) {
                                                       echo 'Could not run query: ' .mysqli_error($conn);
                                                       exit;
                                                       }
                                                       $row1 = mysqli_fetch_row($name);
                                                       echo "<p>$row1[0]</p>"; //Print single keme/data

                                                       $conn->close();
                                                  ?>
                                             </h4> 
                                             <h4 style="display: inline-block;">
                                             <?php
                                                  $conn = mysqli_connect("localhost", "root", "password", "oxford");

                                                  if($conn->connect_error){
                                                       die("Connection Failed:". $conn->connect_error);
                                                  }
                                                  $name = $conn-> query("SELECT `firstName` FROM `appinfo` WHERE `userid` = '$userid'");//querry for name
                                                  if (!$name) {
                                                  echo 'Could not run query: ' .mysqli_error($conn);
                                                  exit;
                                                  }
                                                  $row1 = mysqli_fetch_row($name);
                                                  echo "<p>$row1[0]</p>"; //Print single keme/data

                                                  $conn->close();
                                                  ?>
                                             </h4>
                                             <h4 style="display: inline-block;">
                                             <?php
                                                  $conn = mysqli_connect("localhost", "root", "password", "oxford");

                                                  if($conn->connect_error){
                                                       die("Connection Failed:". $conn->connect_error);
                                                  }
                                                  $name = $conn-> query("SELECT `middleName` FROM `appinfo` WHERE `userid` = '$userid'");//querry for name
                                                  if (!$name) {
                                                  echo 'Could not run query: ' .mysqli_error($conn);
                                                  exit;
                                                  }
                                                  $row1 = mysqli_fetch_row($name);
                                                  echo "<p>$row1[0]</p>"; //Print single keme/data

                                                  $conn->close();
                                                  ?>
                                             </h4><br>
                                             <small>
                                             <?php
                                                       $conn = mysqli_connect("localhost", "root", "password", "oxford");

                                                       if($conn->connect_error){
                                                            die("Connection Failed:". $conn->connect_error);
                                                       }
                                                       echo "$userid"; //Print single keme/data

                                                       $conn->close();
                                                  ?>
                                             </small>
                                        </div>
                                   </div>
                                   <div class="column">
                                        <!-- Form -->
                                        <div class="row1">
                                             <form action="extra.php" method="post">                    
                                                  <p><label for="yearLevel">Year Level:</label</p>
                                                       <select name="yearLevel" id="yearLevel">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                       </select>
                                                  <p><label for="course">Choose a Course:</label</p><br>
                                                       <select style="width: 300px;" name="course" id="course">
                                                            <option value="aeronauticalEngineering">Aeronautical Engineering</option>
                                                            <option value="chemicalEngineering">Chemical Engineering</option>
                                                            <option value="civilEngineering">Civil Enngineering</option>
                                                            <option value="computerEngineering">Computer Engineering</option>
                                                            <option value="bioChemistry">Bio Chemistry</option>
                                                            <option value="biology">Biology</option>
                                                            <option value="earthScience">Earth Science</option>
                                                            <option value="humanScience">Human Science</option>
                                                       </select>
                                                  <p><label for="campus">Choose a Campus:</label</p><br>
                                                       <select style="width: 300px;" name="campus" id="campus">
                                                            <option value="rigatoni">All Souls College</option>
                                                            <option value="dave">Blackfriars</option>
                                                            <option value="pumpernickel">Corpus Christi College</option>
                                                            <option value="reeses">Exeter College</option>
                                                            <option value="reeses">Green Templeton College</option>
                                                            <option value="reeses">Harris Manchester College</option>
                                                            <option value="reeses">Hertford College</option>
                                                            <option value="reeses">Jesus College</option>
                                                            <option value="reeses">Keble College</option>
                                                            <option value="reeses">Linacre College</option>
                                                            <option value="reeses">Magdalene College</option>
                                                            <option value="reeses">Nuffield College</option>
                                                            <option value="reeses">Oriel College</option>
                                                       </select>
                                                       <hr style="border-top: 3px solid black; width: 100%;">
                                                       <div class="upload-card">
                                                            <div class="card1">
                                                                 <p>Parents' Consent</p>
                                                                 <hr style="border-top: 2px solid grey; margin: auto; width: 50%;">
                                                                 <ion-icon name="cloud-upload-outline"></ion-icon>
                                                                 <input type="file">
                                                                 <h5>File format: <br> UID-LastName-Consent.pdf</h5>
                                                            </div>
                                                            <div class="card1">
                                                                 <p>Medical Certificate</p>
                                                                 <hr style="border-top: 2px solid grey; margin: auto; width: 50%;">
                                                                 <ion-icon name="cloud-upload-outline"></ion-icon>
                                                                 <input type="file">
                                                                 <h5>File format: <br> UID-LastName-MedCert.pdf</h5>
                                                            </div>
                                                            <div class="card1">
                                                                 <p>Laboratory</p>
                                                                 <hr style="border-top: 2px solid grey; margin: auto; width: 50%;">
                                                                 <ion-icon name="cloud-upload-outline"></ion-icon>
                                                                 <input type="file">
                                                                 <h5>File format: <br> UID-LastName-Laboratory.pdf</h5>
                                                            </div>
                                                       </div>
                                                  <button class="btn" name="submit1">Submit</button>
                                             </form>
                                        </div>
                                        <!-- Extra -->
                                        <div class="row2">
                                             <p>Forms to Download</p>
                                             <hr style="border-top: 1px solid grey; margin: auto; width: 70%; margin-bottom: 10px;">
                                             <ul>
                                                  <li><a href="#">Medical Form</a></li>
                                                  <li><a href="#">Consent Form</a></li>
                                                  <li><a href="#">About Us</a></li>
                                                  <li><a href="#">Programme</a></li>
                                             </ul>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                         <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
                    </body>
                    </html>
<?php
               }else{
                    echo '<script type="text/javascript"> alert("Invalid Username or Password") </script>';
               }
          }else{
               echo '<script type="text/javascript"> alert("Invalid Username or Password") </script>';
          }
     }
?>
