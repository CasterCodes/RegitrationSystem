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
	   <div class="register">
	           <div class="container">
			        <div class="reg-header">
					       <h2>Sign UP
						   </h2>
						   <p>Create an account to user our services</p>
					</div>
					<div class="reg-body">
					 <form action="" method='POST' id='form'>
					      <div class="input-group">
							    <label for="name">Name</label><br>
								<input type="text" id='name' placeholder='Please enter your name' class='form-input'>
								<span id="nameErr"></span>
							</div>
							<div class="input-group">
							    <label for="name">Username</label><br>
								<input type="text" id='username' placeholder='Please enter your username' class='form-input'>
								<span id="usernameErr"></span>
							</div>
							<div class="input-group">
							    <label for="email">Email</label><br>
								<input type="text" id='email' placeholder='Please enter your email' class='form-input'>
								<span id="emailErr"></span>
							</div>
							<div class="input-group">
							    <label for="password">Password</label><br>
								<input type="password" id='password' placeholder='Please enter your password' class='form-input'>
								<span id="passwordErr"></span>
							</div>
							<div class="input-group">
							    <label for="cpassword">Confirm Password</label><br>
								<input type="password" id='cpassword' placeholder='Please repeat password'  class='form-input'>
								<span id="cpasswordErr"></span>
							</div>
							<div class="input-group">
							    <input type="submit" value = 'SIGN UP' id='submit'>
							</div>
							<br>
                            <div class="input-group">
							   <p>Already a member <a href="signin.php"> Sign in!</a></p>
                            </div>
                            <hr>
							
					 </form>
					       
					</div>
			   </div>
	   </div>
	   <script src="js/app.js"></script>
<script src="js/register.js"></script>
</body>
</html>