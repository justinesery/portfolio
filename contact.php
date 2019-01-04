<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Justine Sery Contact Form'; 
		$to = 'js@justinesery.com'; 
		$subject = 'Message from JS Contact Form';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thanks!</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>// contact</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="float: left;clear: left;">
    <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myDefaultNavbar1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> -->
     <a class="navbar-brand" href="index.html">justine sery</a>
    </div>
     <!-- <div class="collapse navbar-collapse" id="myDefaultNavbar1"> --> 
     <ul class="nav navbar-nav" style="margin-top:10px; float:right; clear: right;">
<span style="font-size:20px;cursor:pointer;" onclick="openNav()">&#9776; menu</span>
	 </ul> 
	
   <div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="index.html">home</a>
    <a href="projects.html">projects</a>
    <a href="aboutme.html">about</a>
    <a href="images/justine_sery_resume.pdf" target="_blank">resume</a>
    <a href="contact.html">contact</a>
  </div>
   </div>
</div>
 </nav>  
 

<div class="container">
  <div class="row">
    <div class="col-lg-offset-3 col-xs-12 col-lg-6">
      <div class="jumbotron">
        <div class="row text-center">
          <div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h1 style="margin-bottom: 30px; color:#323339;">say hello</h1>
          </div>
          <div class="text-center col-lg-12"> 
            <!-- CONTACT FORM https://github.com/jonmbake/bootstrap3-contact-form -->
             
            <form role="form" id="feedbackForm" class="text-center" method="post" action="index.php">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                <span class="help-block" style="display: none;">Please enter your name.</span></div>
                
              <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                <span class="help-block" style="display: none;">Please enter a valid e-mail address.</span></div>
                
              <div class="form-group">
                <label for="message">Message</label>
                <textarea rows="10" cols="100" class="form-control" id="message" name="message" placeholder="Message"></textarea>
                <span class="help-block" style="display: none;">Please enter a message.</span></div>
                
              <div class="form-group">
		<label for="human">2 + 3 = ?</label>
		<span class="help-block"><input type="text" class="form-control" id="human" name="human" placeholder="Your Answer"></span>
		
	</div>
              <button id="submit" name="submit" type="submit" value="Send" class="btn btn-primary btn-lg" style=" margin-top: 10px; padding-left:60px; padding-right:60px; background-color:#D14D44;">Send</button>
            </form>
            <!-- END CONTACT FORM --> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section well" style="margin-top: 40px;">
    <div class="container">
   	  <div class="row">
		<div class="col-lg-12 col-md-12">
             <h5 class="text-center" style="font-weight: 200; font-size: 16px;">"Everything is design. Everything!" &#8212;Paul Rand</h5>
        </div>
		
</div>
    </div>
	</div>
<script src="js/custom.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
<script src="js/contact-form.js"></script>
</body>
</html>
