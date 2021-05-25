<?php
  // create short variable names
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_quantity=$_POST['product_quantity'];
    $product_id=$_POST['product_id'];
    $product_image=$_POST['product_image'];
    $product_desc=$_POST['product_desc'];
    $product_category=$_POST['product_category'];
  
  if (!$product_name || !$product_price || !$product_quantity || !$product_id || !$product_image || !$product_desc || !$product_category) {
     echo 'You have not entered search details.  Please go back and try again.';
     exit;
  }
  
  if (!get_magic_quotes_gpc()){
    $product_name = addslashes($product_name);
    $product_price = addslashes($product_price);
    $product_quantity = addslashes($product_quantity);
    $product_id = addslashes($product_id);
    $product_image = addslashes($product_image);
    $product_desc = addslashes($product_desc);
    $product_category = addslashes($product_category);
  }

  @ $db = new mysqli('localhost', 'mwhrskay_customer', 'FJb$**]ac_?N', 'mwhrskay_Health415');

  if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }

    $query = "insert into products values('".$product_name."', '".$product_price."', '".$product_quantity."', '".$product_id."', '".$product_image."', '".$product_desc."','".$product_category."')";
    $result = mysqli_query($db,$query);
#('".$product_name."', '".$product_price."', '".$product_quantity."', '".$product_id."','".$product_image."','".$product_desc."', '".$product_category."')";

  if ($result) {
    header("Location:AdminDashboard.php");
  } else {
  	  echo "An error has occurred.  The item was not added.";
  }

  $db->close();
?>
