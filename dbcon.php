<?php
$con=new mysqli('localhost','root','','logistic');
if(!$con){
    die(mysqli_error($con));



}

session_start();

// If there is a username, they are logged in, and we'll show the logged-in view
if(!$_SESSION['auth']) {
 header('location:login.php');
}

// If there is no username, they are logged out, so show them the login link
if(!isset($_SESSION['username'])) {
  $authorize_url = 'TODO';
  echo '<p>Not logged in</p>';
  echo '<p><a href="'.$authorize_url.'">Log In</a></p>';
}
?>