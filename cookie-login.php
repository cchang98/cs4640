<?php


function reject($entry)
{
   echo 'Please <a href="login.html">Log in </a>';
   exit();
}

if (isset($_POST['email']))
{
   $email = trim($_POST['email']);
   if (!ctype_alnum($email))
      reject('User Name');
   
   if (isset($_POST['pwd']))
   {
      $pwd = trim($_POST['pwd']);
      if (!ctype_alnum($pwd))
         reject('Password');
      else
      {
         setcookie('email', $user, time()+3600);         
         setcookie('pwd', md5($pwd), time()+3600);
         
         header('Location: cookie-login.php');    
      }
   }
}
else  
   header('Location: login.html');

?>