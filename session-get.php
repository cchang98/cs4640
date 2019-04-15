<!--Cathy Chang, Danny Perkins
cc5ar, dgp3sy-->
<?php 
 

if (isset($_SESSION['email']))
{
   $user = $_SESSION['email'];
   echo "session-get.php";
   echo "<h1>Welcome $user ! </h1> <hr />";
}
else  
   echo 'Please <a href="login.html">Log in</a>';

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<link rel='stylesheet' href='styles.css' type='text/css' />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
</head>
<body>
	<div class="menu">
	<ul>
		<li><a href="index.html">home</a></li>
		<li><a href="list.php">my list</a></li>
		<li><a href="tophikes.html">top rated</a></li>
		<li><a href="review.php">write a review</a></li>
		<li><a href="login.html">login</a></li>
	</ul>
	</div>


	<div class="image">
	<div class="text">
			<div class='text'> <h1> Welcome <?php session_start(); $user = $_SESSION['email']; echo("$user")?>! <h1>
			<div class="text one"><h1>summit up</h1></div>
		</div>
	<div class="form">	
    <form action="" onsubmit="return (validateInfo())">
		    <label>Find a city:   <br></label> 
		    <input type="text" id="cityname" autofocus required />
		    <div id="error-msg" class="feedback"></div> 
		    <input type="submit" value="Search" />  
		  </form>
		  </div>

	<script>
   var user = document.getElementById("cityname");    
   function valid() {
      var message = document.getElementById("error-msg");      
      if (user.value.length < 2)
         message.textContent = "Please enter a valid location";
      else
         message.textContent = "";
   }
   user.addEventListener('blur', function() { 
         valid(8); 
      }, false);
  </script>
	</body>
	</html>

