<?php


if (isset($_POST['submit'])){
    
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $phnumber=$_POST['phnumber'];
    $emailid=$_POST['emailid'];
    $city=$_POST['city'];
    $States=$_POST['States'];
    $pincode=$_POST['pincode'];
   
    $servername = "db";
    $username = "root";
    $password = "example";
    $dbname = "register";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

    $sql = "INSERT INTO SRFlats VALUES('$firstname','$lastname','$phnumber','$emailid','$city','$States','$pincode')";

    $result = $conn->query($sql);
    
    if ($result == TRUE) {
    
      echo "New record created successfully.";
    
    }else{
    
      echo "Error:". $sql . "<br>". $conn->error;
    
    } 
  
    
    
    $conn->close(); 
  
  
    }
  
  