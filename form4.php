<?php
session_start();

$_SESSION['degree'] = $_POST['degree'];


$_SESSION['core'] = $_POST['core'];
$_SESSION['201'] = $_POST['201'];
$_SESSION['190'] = $_POST['190'];
$_SESSION['121'] = $_POST['121'];
$_SESSION['CCENT'] = $_POST['CCENT'];
$_SESSION['MTA'] = $_POST['MTA'];
$_SESSION['Linux'] = $_POST['Linux'];
$_SESSION['102'] = $_POST['102'];
$_SESSION['240'] = $_POST['240'];
$_SESSION['comment'] = $_POST['comment'];

//Connecting to DATABASE 
$username="shristhy";
    $password="toodle101292";
    $hostname="localhost";
    $dbname="shristhy_grcc";
    
    //connecting
  $dbh=new PDO("mysql:host=$hostname;
               dbname=shristhy_grcc", $username, $password);
  echo "Connected";
  
  //define the query
  $sql="INSERT INTO BAS VALUES (:first, :last, :mail, :sid, :degree,)";  
  
   //prepare the statement
  $statement=$dbh->prepare($sql);
  
  
  //bind parameters
  $fn = $_SESSION['fname'];
  $ln = $_SESSION['lname'];
  $em = $_SESSION['email'];
  $sid = $_SESSION['sid'];
  $degree=$_SESSION['degree'];
 // $type = $_SESSION['veteran'];
 // $education = $_SESSION['BD'];
 // $credits = $_SESSION['note'];
 // $transcript = $_SESSION['fileToUpload'];
 // $classes = $_SESSION['core'];
 // $comment = $_SESSION['comment'];
  
  $statement->bindParam(':First', $fn, PDO::PARAM_STR);
  $statement->bindParam(':Last', $ln, PDO::PARAM_STR);
 $statement->bindParam(':Email', $em, PDO::PARAM_STR);
  $statement->bindParam(':sid', $sid, PDO::PARAM_INT);
  $statement->bindParam(':degree', $degree, PDO::PARAM_STR);

  
   /** 
    $statement->bindParam(':type', $type, PDO::PARAM_STR);
      $statement->bindParam(':education', $education, PDO::PARAM_STR);
        $statement->bindParam(':credits', $credits, PDO::PARAM_INT);
      $statement->bindParam(':transcripts', $transcript, PDO::PARAM_STR);
        $statement->bindParam(':classes', $classes, PDO::PARAM_STR);
      $statement->bindParam(':comments', $comment, PDO::PARAM_STR);
**/
    //execute the query
  $statement->execute();



  


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>Narrow Jumbotron Template for Bootstrap</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="bas.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron-narrow.css" rel="stylesheet">

 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    
    

    <div class="container">
      <div class="header">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Step 1</a></li>
            <li role="presentation"><a href="step2.html">Step 2</a></li>
            <li role="presentation"><a href="#">Step 3</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Summary</h3>
      </div>

      <div class="jumbotron">

<?php

echo "Thank you, " .$_SESSION['fname'] ." " .$_SESSION['lname']."!" ."<br><h5>An advisor will be contacting you shortly!</h5>";
echo '<div align="left"><br><b>Email:</b> ' .$_SESSION['email'] .'</div>';
echo '<div align="left"<br><b>Student ID:</b> ' .$_SESSION['sid'] .'</div>';
echo'<div align="left"<br><b>Student type:</b> ';
if($_SESSION['veteran']=='veteran') echo "<br> -Veteran";
if($_SESSION['is']=='is') echo "<br> -International Student ";
if($_SESSION['rs']=='rs') echo "<br> -Running start Student ";  
echo "<br><b>Education:</b> ";
if($_SESSION['GED'] == 'GED') echo "<br> -High school diploma or GED ";
if($_SESSION['AD'] == 'AD') echo "<br> -Associates degree (AA, AS, AAS, AAS-T) ";
if($_SESSION['BD'] == 'BD') echo "<br> -Bachelor's degree ";
if($_SESSION['MD'] == 'MD') echo "<br> -Master's degree ";
if($_SESSION['PHD'] == 'PHD') echo "<br> -Ph.D. </div>";

//echo "Education: " .$_SESSION['AD'];  
//echo "Education: " .$_SESSION['BD'];  
//echo "Education: " .$_SESSION['MD'];  
//echo "Education: " .$_SESSION['PHD']; 
echo '<div align="left"<br><b>Credits earned:</b> ' .$_SESSION['note'] .'</div>';  
echo '<div align="left"<br><b>unofficial transcript:</b> ' .$_SESSION['fileToUpload'] .'</div>';

echo'<div align="left"<br><b>Program interested in:</b> ' ;
if($_SESSION['degree']=='software') echo ' Software Developement';
if($_SESSION['degree']=='network') echo ' Network & Security';
if($_SESSION['degree']=='ud') echo ' Undecided' .'</div>';

echo '<div align="left"><b>Classes Taken:</b>';
if ($_SESSION['core'] == 'core') echo "Programming I and II (CSCI 141&145 or CSCI 131&132)";
if ($_SESSION['201'] =='201') echo " <br>IT 201:  Database Fundamentals, or equivalent";
if ($_SESSION['190'] =='190') echo "<br> IT 190:  Intro to Linux or LPI1 or Linux Essentials";
if ($_SESSION['CCENT'] =='CCENT') echo " vIT 210 or CCENT";
if ($_SESSION['MTA'] =='MTA') echo "<br> IT 160 or MTA";
if ($_SESSION['Linux'] =='Linux') echo "<br> IT 190 or LPI1 or Linux Essentials";
if ($_SESSION['102'] =='102') echo " <br>IT 102 or a programming course";
if ($_SESSION['240'] =='240') echo "<br>IT 240 or 70-411 Microsoft MCP ";
if ($_SESSION['121'] =='121') echo "<br> IT 121:  HTML/CSS, or equivalent" .'</div> ';

echo '<div align="left"><b>Additional comments:</b> ' .$_SESSION['comment'] .'</div>' ;

?>





<br>
<div align="center">
<a class='btn' href="step2.html" align="center">Continue</a>
</div>



    </div> <!-- /container -->
  
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>


  </body>
</html>