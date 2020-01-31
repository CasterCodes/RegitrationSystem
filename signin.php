<?php
   include_once 'session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/style.css">
	<title>Registration System</title>
</head>
<body>
	   <div class="login">
	           <div class="container">
			        <div class="reg-header">
					       <h2>Sign In
						   </h2>
						   <?php 
						       //if the session isset echo the session else
						        if(isset($_SESSION['success'])){
								   echo $_SESSION['success'];
								   ?>
								     <p style='color:green;'><?php echo $_SESSION['success'];?></p>
								   <?php
								}else{
									echo '<p>Enter your Credentials to login</p>';
								}
						   ?>
						   
					</div>
					<div class="reg-body">
					 <form action="" method='POST' id='form'>
						 <p class='error' style ='color:brown'></p>
							<div class="input-group">
							    <label for="email">Username</label><br>
								<input type="text" id='username' placeholder='Please enter your useranme or email' class='form-input'>
								<span id="usernameErr"></span>
							</div>
							<div class="input-group">
							    <label for="password">Password</label><br>
								<input type="password" id='password' placeholder='Please enter your password' class='form-input'>
								<span id="passwordErr"></span>
							</div>
							
							<div class="input-group">
								<input type="submit" value = 'LOG IN' id='submit'>
                            </div>
                            <br>
                            <div class="input-group">
							   <p>No account yet  <a href="index.php"> Register now !</a></p>
                            </div>
                            <hr>							
					 </form>
					       
					</div>
			   </div>
	   </div>
	   <script src="js/app.js"></script>
<script src="js/login.js"></script>
</body>
</html>