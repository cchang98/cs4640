<!--Cathy Chang, Danny Perkins
cc5ar, dgp3sy-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<link rel='stylesheet' href='loginstyles.css' type='text/css' />
	
</head>
<body background = "login_image.jpg">
	<div class="menu">
		<ul>
			<li><a href="./index.html">home</a></li>
		<li><a href="list.php">my list</a></li>
		<li><a href="./tophikes.html">top rated</a></li>
		<li><a href="review.php">write a review</a></li>
		<li><a href="./login.html">login</a></li>
		</ul>
	</div>

	<div class="image">
			<div class="logincenter">
			 	<div class="login">
				 <form name = "login" action="login-database.php" method="POST">
				 	<label>Username: </label> 
				    <input type="text" name = "Name" id="name" autofocus required />
				    <div id="name-msg" class="feedback"></div>  <br/>

				    <label>Email: </label> 
				    <input type="text" name = "Email" id="email" autofocus required />
				    <div id="email-msg" class="feedback"></div>  <br/>

				    <label>Password: </label> 
				    <input type="password" name = "Password" id="pwd" required />
				    <div id="pwd-msg" class="feedback"></div>  <br/>
				    <input type="submit" value="Create Account" name="action" />  

				  </form>
				
				</div>
			</div>
		</div>


	<footer class="primary-footer container">
      <small class="copyright">&copy; Catherine Chang and Daniel Perkins | 2019 | All Rights Reserved</small>
      <nav class="nav">
      </nav>
    </footer>
<?php

require('login-database.php');


?>        



</body>