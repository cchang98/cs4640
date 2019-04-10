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
		<li><a href="list">my list</a></li>
		<li><a href="./tophikes.html">top rated</a></li>
		<li><a href="#review">write a review</a></li>
		<li><a href="./login.html">login</a></li>
		</ul>
	</div>

	<div class="image">
			<div class="logincenter">
			 	<div class="login">
				 <form name = "login" action="component-to-handle-the-request" method="POST">
				 	<label>Username: </label> 
				    <input type="text" name = "Name" id="name" autofocus required />
				    <div id="name-msg" class="feedback"></div>  <br/>

				    <label>Email: </label> 
				    <input type="text" name = "Email" id="email" autofocus required />
				    <div id="email-msg" class="feedback"></div>  <br/>

				    <label>Password: </label> 
				    <input type="password" name = "Password" id="pwd" required />
				    <div id="pwd-msg" class="feedback"></div>  <br/>
				    <input type="submit" value="Create Account" />  

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

// When an HTML form is submitted to the server using the post method, 
// its field data is automatically assigned to the implicit $_POST global array variable. 
// PHP script can check for the presence of individual submission fields using 
// a built-in isset() function to seek an element of a specified HTML field name. 
// When this confirms the field is present, its name and value can usually be 
// stored in $_SESSION global array variable for later used.
// On successful completion, the script can reloate the browser to the next page
// using the header() function to specify the target URL.

// Define a function to handle failed validation attempts 
function reject($entry)
{
//    echo 'Please <a href="login.php">Log in </a>';
   exit();    // exit the current script, no value is returned
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && strlen($_POST['username']) > 0)
{
   $user = trim($_POST['username']);
   if (!ctype_alnum($user))   // ctype_alnum() check if the values contain only alphanumeric data
      reject('User Name');
		
   if (isset($_POST['pwd']))
   {
      $pwd = trim($_POST['pwd']);
      if (!ctype_alnum($pwd))
         reject('Password');
      else
      {
         // set session attributes
         $_SESSION['user'] = $user;
         $_SESSION['pwd'] = $pwd;
         
         // redirect the browser to another page using the header() function to specify the target URL
         header('Location: survey-instruction.php');
      }
   }
}




?>



</body>