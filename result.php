<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kad";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO `register`(`Name`, `DOB`, `Gender`, `Email`, `Phone`, `Address`, `Experience`, `Location`, `About`) VALUES ('".$_POST['name']."','".$_POST['dob']."','".$_POST['gender']."','".$_POST['email']."','".$_POST['number']."','".$_POST['address']."','".$_POST['experience']."','".$_POST['loc']."','".$_POST['about']."')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();

?>