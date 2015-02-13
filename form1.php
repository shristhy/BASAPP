<?php

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
        <form method="post" name="mockupbas" action="form2.php" onsubmit="return(validateForm());">

       
       <h3>Please select one:</h3>

    <input  type='radio' name='student' value='cs' id='cs' checked>I am a current student
   <input type='radio' name='student' value='ns' id='ns'> New student 
       
 <br>
   
  <br>First Name: <input align="left" type="text" id="fname" name="fname">
   Last Name: <input align="left" type="text" id="lname" name="lname">
  <br>
  <br>Email: <input align="left" type="text" id="email" name="email">
  <span id="sid">Student ID: <input type="text" name="sid"></span>
    
    
    <br><button href='form2.php' name='Submit'>Continue</button>

        
        

    </form>
      </div>



    </div> <!-- /container -->
  
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <script>

var newStudent = false;

$('input[type="text"]').focus(function() {
    $(this).addClass("focus");
});
 
$('input[type="text"]').blur(function() {
    $(this).removeClass("focus");
});

$("#ns").click(function(){
    $("#sid").hide();
    newStudent = true;
});

$("#cs").click(function(){
    $("#sid").show();
    newStudent = false;
});

$("#continue").onclick(function()
    {
      $("#new_div").append();
    });
</script>

  </body>
</html>