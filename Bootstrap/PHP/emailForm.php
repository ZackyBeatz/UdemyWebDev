<?php
  
  if ($_POST["submit"]) {
        	$result='<div class="alert alert-success">Form submitted</div>';

        	if (!$_POST['name']) {

        		$error ="<br />Please enter your name";
        	}

        	if (!$_POST['email']) {

        		$error.="<br />Please enter your email";
        	}

        	if (!$_POST['comment']) {

        		$error.="<br />Please enter your comment";
        	}

        	if ($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
 	 	 	
 	 	 		$error.="<br />Please enter a valid email address";

	 		}


        	if ($error) {

 				$result='<div class="alert alert-danger"><strong>There were error(s) in your form:</strong>'.$error.'</div>';
				
				} else {

					if (mail("zackyahmed89@gmail.com", "Comment from my website!", "Name: ".$_POST['name']."

 						Email: ".$_POST['email']."

 						Comment: ".$_POST['comment'])) {

						 $result='<div class="alert alert-success"><strong>Thank you!</strong> I\'ll be in touch.</div>';
				}  else {

 					$result='<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later.</div>';

 				}

        	} 

        }      
        
?>

<!doctype html>
<html>
    <head>
        <title>My First Webpage</title>
        <meta charset="utf-8" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>

	<style>

		.emailForm {
			border: 1px solid grey;
			border-radius: 10px;
			margin-top: 20px;
			background-image: url(http://m-static.flikie.com/ImageData/WallPapers/8a75d2e9e6644745bf7a94d85fcbc214.jpg);
			text-align: center;
			font-family: "Trebuchet MS", Helvetica, sans-serif;
			box-shadow: 10px 10px 5px #888888;
			font-style: oblique;
			font-weight: bold;
			}

		form {
			padding-bottom: 20px;
		}



	</style>


<body>


<div class="container">
	
	<div class="row">
		
		<div class="col-md-6 col-md-offset-3 emailForm">
			<h1>My Email Form</h1>

			<?php
			echo $result; 
			?>
			
			<form method="post">
				
				<div class="form-group">

				<label for="name">Your Name:</label>
				<input type="text" name="name" class="form-control" placeholder="Your Name" value="<?php echo $_POST['name']; ?>" />
			
				</div>

				<div class="form-group">

				<label for="email">Your Email:</label>
				<input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $_POST['email']; ?>" />
			
				</div>

				<div class="form-group">

				<label for="comment">Your Comment:</label>
				<textarea class="form-control" name="comment" placeholder="Please get in touch here, I´ll get back to you as soon as possible" <?php echo $_POST['comment']; ?>></textarea>
			
				</div>

				<input type="submit" name="submit" class="btn btn-success btn-lg" value="Submit" />

			</form>
		</div>
	</div>
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></
script>
   
</body>
</html>