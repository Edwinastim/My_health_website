<?php
  ob_start();
  // create short variable names
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  
  
  $username=$_POST['username'];
  $password=$_POST['password'];
  
 // $encrypt = $username.crypt($password, '$crypt');
//$password = $hash;

  
  if (!$username || !$password) {
      echo "<script>alert('You have not entered the necessary credentials');</script>";
      echo"<script>window.history.back();</script>";
     exit;
  }

  if (!get_magic_quotes_gpc()){
    $username = addslashes($username);
    $password = addslashes($password);
  }

  @ $db = new mysqli('localhost', 'mwhrskay_customer', 'FJb$**]ac_?N', 'mwhrskay_Health415');

  if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     echo $password;
     exit;
  }

    $query = "select * from users where username = '$username'";
    $result = mysqli_query($db,$query);
    
    $query2 = "select * from admins";
    $result2 = mysqli_query($db, $query2);

    while ($row = mysqli_fetch_array($result)){
    #$_SESSION["username"] = $row['username'];
    if($row['password'] == password_verify($password, $row['password'])){
        session_start();
        $_SESSION["username"] = true;
        $_SESSION["username"] = $username;
        echo $_SESSION['username'];
        echo "<script>window.location.href='home.php';</script>";        
        exit;
    }
    else{
            echo "<script>alert('Wrong Useranme or Password Combination, Please Try Again!');</script>";
                  echo"<script>window.history.back();</script>";

         //"Username or password was not correct please try again.";

        break;
    }
}

   while ($row = mysqli_fetch_array($result2)){
    if($row['username'] == $username && $row['password'] == $password){
        session_start();
        $_SESSION["admin"] = true;
        echo "<script>window.location.href='AdminDashboard.php';</script>";  
        exit;
    }
    if($row['username'] != $username && $row['password'] != $password){
      //  echo "<script>window.location.href='window.location.href='log_in_check_practice4.php';</script>";
      echo "<script>alert('Wrong Useranme or Password Combination, Please Try Again!');</script>";
      echo"<script>window.history.back();</script>";
    break;


    } 
    else{
          echo "<script>alert('Wrong Useranme or Password Combination, Please Try Again!');</script>";
      echo"<script>window.history.back();</script>";
        break;
    }
  }
  
  $db->close();
?>
