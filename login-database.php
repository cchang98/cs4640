<?php
// To find a hostname, access phpMyAdmin
// - select tob "User accounts"
// - locate the username you created, by default, the Host name is localhost
 
// To find a port number, access phpMyAdmin
// - use Console (bottom)
// - type     SHOW VARIABLES WHERE Variable_name = 'port';
// - execute the query    press Ctrl+Enter
// (default port to mySQL database in XAMPP is 3306)

// database name = web4640
//   Note: Looking in the wrong database and/or wrong table may results in either
//         cannot connect to the database, not find table, or no result set.
//         Thus, specify the correct database name
// hostname
$hostname = 'localhost:3306';

// database name
$dbname = 'dgp3sy';

// database credentials
$username = 'dgp3sy';
$password = 'pwd4640';

// DSN (Data Source Name) specifies the host computer for the MySQL datbase 
// and the name of the database. If the MySQL datbase is running on the same server
// as PHP, use the localhost keyword to specify the host computer

$dsn = "mysql:host=$hostname;dbname=$dbname";

$conn = new mysqli($hostname, $username, $password, $dbname);
if ($conn->connect_error) {
  die("connection failed " . $conn->connect->error);
}



/** connect to the database **/
try 
{
//  $db = new PDO("mysql:host=$hostname;dbname=web4640", $username, $password);
   $db = new PDO($dsn, $username, $password);

   //include("newUser.php");


  if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST))) {
    if (isset($_POST['Name']))
	     $user = $_POST['Name'];
    if (isset($_POST['Email']))
	     $email = $_POST['Email'];
    if (isset($_POST['Password']))
	     $pwd = $_POST['Password'];
  }
	

	// Add item to database here
    $sql = "INSERT INTO login (Username, Email, Password)
    VALUES ('$user', '$email', '$pwd')";

    if ($conn->query($sql) == TRUE) {
      //header("Location: review.php?Username=$user&Email=$email&Password=$pwd");
    }
    else {
      echo "error: " . $sql  . $conn->error;
    }



    // use exec() because no results are returned
    //$conn->exec($sql);
    //echo($conn);
    echo "New record created successfully";
}
   //test: echo("This works !");

   // dispaly a message to let us know that we are connected to the database 
   // echo "<p>You are connected to the database</p>";

catch (PDOException $e)     // handle a PDO exception (errors thrown by the PDO library)
{
   // Call a method from any object, use the object's name followed by -> and then method's name
   // All exception objects provide a getMessage() method that returns the error message 
   $error_message = $e->getMessage();        
   echo "<p>An error occurred while connecting to the database: $error_message </p>";
}
catch (Exception $e)       // handle any type of exception
{
   $error_message = $e->getMessage();
   echo "<p>Error message: $error_message </p>";
}

// Package the Data for the Database: 



?>