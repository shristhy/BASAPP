<?php
session_start();
$_SESSION['fname'] = $_POST['fname'];
$_SESSION['lname'] = $_POST['lname'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['sid'] = $_POST['sid'];
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
      
        <h3 class="text-muted">Application</h3>
      </div>

      <div class="jumbotron">
        <form method="post" name="mockupbas" action="form3.php" onsubmit="return(validateForm());">

         <h2>Education</h2>

       

      <div align="left">
     <h4>I am a (please check all that apply):</h4>
 
    <input type="checkbox" id="veteran" name="veteran" value="veteran" > Veteran </input>
    <br><input type="checkbox" id="is" name="is" value="is"> International Student </input>

    <br><input type="checkbox" id="rs" name="rs" value="rs"> Running Start Student </input>
        

          <h4>Please check all that you have achieved</h4>
        
            <input type="checkbox" id="GED" name="GED" value="GED">High school diploma or GED</input>
            <br><input type="checkbox" id="AD" name="AD" value="AD">Associates degree (AA, AS, AAS, AAS-T)</input>
            <br><input type="checkbox" id="BD" name="BD" value="BD">Bachelor's degree</input>
            <br><input type="checkbox" id="MD" name="MD" value="MD">Master's degree</input>
            <br><input type="checkbox" id="PHD" name="PHD" value="PHD">Ph.D.</input>                 
          

          <h4>Credits</h4>
          <h5>Please enter the number of credits you have earned thus far</h5>
          <textarea id="note" name="note" cols="3" rows="1"></textarea>
          
          <h4>Transcripts</h4>
          <h5>If you want, you can upload your unofficial transcript here</h5>
       
          <input type="file" name="fileToUpload" id="fileToUpload">
            
       </div>   
        
<br><button href='form3.php' name='Submit'>Continue</button>

        
        

    </form>
      </div>



    </div> <!-- /container -->
  
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>


  </body>
</html>