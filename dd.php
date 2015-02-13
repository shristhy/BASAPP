

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
     
        <h3 class="text-muted" >Applicants</h3>
      </div>

      <div class="jumbotron">
        <form method="post" name="mockupbas" action="form3.php" onsubmit="return(validateForm());" >

        
<?php



   $username="shristhy";
    $password="toodle101292";
    $hostname="localhost";
    $dbname="shristhy_grcc";

//connecting
  $dbh=new PDO("mysql:host=$hostname;
               dbname=shristhy_grcc", $username, $password);
  echo "Connected";
  
  $sql = "SELECT * FROM BAS ";
  
$result = $dbh->query($sql);
foreach ($result as $row) {
     
      echo '<div align="left"><b>Name: </b>' . $row['first'] ." " .$row['last'] ."</div>";
      echo '<div align="left"><b>Email Address: </b>' . $row['email'] . " " ."</div>";
      echo '<div align="left"><b>Student ID: </b>' .$row['sid'] ."</div>";
      echo '<div align="left"><b>Interested Degree: </b>' .$row['degree'] ."</div>";
      echo '<div align="left">--------------------------------------------</div>';
}


?>
       

   
     
      </div>



    </div> <!-- /container -->
  
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>


  </body>
</html>