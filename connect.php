<?php
    $username="shristhy";
    $password="toodle101292";
    $hostname="localhost";
    $dbname="shristhy_grcc";
    
    //connecting
  $dbh=new PDO("mysql:host=$hostname;
               dbname=shristhy_grcc", $username, $password);
  echo "Connected";
  
  //define the query
  $sql="INSERT INTO Applicants VALUES (:First, :Last, :SID, :Email)";
  
  //prepare the statement
  $statement=$dbh->prepare($sql);
  
  //set session variables
  //$_SESSION["First"]=$fname;
 // echo "First name is " . $_SESSION["First"];
  
  //bind the parameters
  $fn= $_POST['fname']; 
  $ln=$_POST['lname'];
  $sid="123456789";
  $email="email@email.com";
  
  $statement->bindParam(':First', $fn, PDO::PARAM_STR);
  $statement->bindParam(':Last', $ln, PDO::PARAM_STR);
  $statement->bindParam(':SID', $sid, PDO::PARAM_INT);
  $statement->bindParam(':Email', $email, PDO::PARAM_STR);
  
  
  //execute the query
  $statement->execute();

 //Displaying Applicants information  
 echo $_POST["fname"];
 echo $_POST["lname"];
 echo $_POST["sid"];
 echo $_POST["email"];
  
  
  $sql= "SELECT First, Last, SID, Email FROM Applicants";
  $statement = $dbh->prepare($sql);
  
  //bind the parameters
  
  
  $statement->execute();
  
  //Process the result
  $row = $statement->fetch(PDO::FETCH_ASSOC);
  echo $row['First']. ", ". $row['Last']. ", ". $row['SID']. $row['Email']; 
  
    
?>