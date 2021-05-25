<?php
  // create short variable names
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  

  //$encrypt = $username.crypt($password, '$crypt');
  #$hash = substr($username.crypt($password, '$crypt'), 0, 7);
  $hash = password_hash($password, PASSWORD_DEFAULT);


  if (!$first_name || !$last_name || !$username || !$password) {
     echo 'You have not entered search details.  Please go back and try again.';
     exit;
  }

  if (!get_magic_quotes_gpc()){
    $first_name = addslashes($first_name);
    $last_name = addslashes($last_name);
    $username = addslashes($username);
    $password = addslashes($hash);
  }

  @ $db = new mysqli('localhost', 'mwhrskay_customer', 'FJb$**]ac_?N', 'mwhrskay_Health415');

  if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }

    $query = "insert into users values('".$first_name."', '".$last_name."', '".$username."', '".$hash."')";
    $result = mysqli_query($db,$query);
#('".$ID."', '".$username."', '".$hash."')";

  if ($result) {
   header("Location:login.html");
   } 
   else {
  	echo "<script>alert('username already in use! Please Try another one!');</script>";
    echo "<script>window.location.href='register.html';</script>";
  }


  $db->close();
?>