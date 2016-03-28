<?php
    	if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $from = 'Its Around 420 Contact Form'; 
        $to = 'web@thegreengrowers.com'; 
        $subject = "Message from It's Around 420 contact page";
        
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
        
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], 			FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        
        /* If there are no errors, send the email*/
if (!$errName && !$errEmail && !$errMessage) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! We will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}
    }
     
    ?> 
    
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>It's Around 420</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!--Font Awesome --->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><span class="fa-stack">
  <i class="fa fa-circle-o fa-stack-2x"></i>
  <i class="fa fa-map-marker fa-stack-1x"></i>
</span> It's Around 420</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="oregon.html">Oregon</a></li>
            <li><a href="colorado.html">Colorado</a></li>
            <li><a href="washington.html">Washington</a></li>
            <li><a href="california.html">California</a></li>
            <li class="active"><a href="contact.php">Contact Us</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    <br>
    <br>
    <br> 
    <br>
    <div class="container">
    	<div class="jumbotron">
        	<h2><i class="fa fa-envelope-o"></i> Send us  an Email </h2>
            <br>
        <form class="form-horizontal" role="form" method="post" action="contact.php">
            <div class="form-group">
              <label for="name" class="control-label">Enter your name:</label>
              <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
              <?php echo "<p class='text-danger'>$errName</p>";?>
            </div>
        	<div class="form-group">
              <label for="email" class="control-label">Enter your email address:</label>
              <input type="text" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
              <?php echo "<p class='text-danger'>$errEmail</p>";?>
            </div>
        	<div class="form-group">
              <label for="message" class="control-label">Enter your message:</label>
              <textarea class="form-control" rows="5" id="message" name="message" value="<?php echo htmlspecialchars($_POST['message']);?>"></textarea>
              <?php echo "<p class='text-danger'>$errMessage</p>";?>
            </div>
            <br>
         	<div class="form-group">
            <button type="submit" class="btn btn-success" name="submit" id="submit"><i class="fa fa-send"></i> Send</button>
        	</div>
            <div class="form-group">
						<div>
							<?php echo $result; ?>	
						</div>
					</div>
            </form>
        </div>
     </div>
    
    <footer class="footer">
      <div class="container">
        <p class="text-muted">The Green Growers 2016 <i class="fa fa-copyright"></i></p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

