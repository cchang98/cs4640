<? php
	include_once('list.php');

	if(isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$res = mysql_query("SELECT" * FROM review);
		$row = mysql_fetch_array($res);
	}

	if(isset($_GET['newReview'])) {
		$newReview = $_GET['newReview'];
		$id = $_GET['Name'];

		$sql = "UPDATE review SET Review=$newReview WHERE Hike_Name=$id";
		$res = mysql_query($sql) or die("Error: could not update");
	}
	header("Location: index.html");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<link rel='stylesheet' href='loginstyles.css' type='text/css' />
	
</head>
<body background = "review_image.jpg">
	<div class="menu">
		<ul>
			<li><a href="./index.html">home</a></li>
		<li><a href="./list.php">my list</a></li>
		<li><a href="./tophikes.html">top rated</a></li>
		<li><a href="./review.php">write a review</a></li>
		<li><a href="./login.html">login</a></li>
		</ul>
	</div>

	<div class="image-review">
			<div class="logincenter">
			 	<div class="login">
				 <form name = "login" action="edit-item.php" method="GET">

				 	<label>Name of Hike: </label> 
				    <input type="text" name = "Name" id="Name" autofocus required />
				    <div id="name-msg" class="feedback"></div>  <br/>


				    <label>Review: </label> <br/>
				    <textarea rows="8" cols="50" name="newReview" id='newReview'>Edit your review here...</textarea>
				    <div id="rev-msg" class="feedback"></div>  <br/>

				    <input type="submit" value="Edit Review" />  

				  </form>
				
				</div>
			</div>
		</div>
<?php

?>

	<footer class="primary-footer container">
      <small class="copyright">&copy; Catherine Chang and Daniel Perkins | 2019 | All Rights Reserved</small>
      <nav class="nav">
      </nav>
    </footer>
</body>