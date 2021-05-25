<html>
    <script>
    </script>
    <style>
    @import url("https://fonts.googleapis.com/css?family=Lato:400,700&display=swap");

:root {
  --page-header-bgColor: #87251a;
  --page-header-bgColor-hover: #42170d;
  --page-header-txtColor: #baafad;
  --page-header-headingColor: #a47878;
  --page-header-width: 220px;
  --page-content-bgColor: #f6f0f0;
  --page-content-txtColor: #171616;
  --page-content-blockColor: #fff;
  --white: #fff;
  --black: #333;
  --blue: #eb0800;
  --red: #a14e37;
  --border-radius: 4px;
  --box-shadow: 0 0 10px -2px rgba(0, 0, 0, 0.075);
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

ul {
  list-style: none;
}

a,
button {
  color: inherit;
}

a {
  text-decoration: none;
}

button {
  background: none;
  cursor: pointer;
}

input {
  -webkit-appearance: none;
}

button,
input {
  border: none;
}

svg {
  display: block;
}

body {
  font: 16px/1.5 "Lato", sans-serif;
}


/* HEADER STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.page-header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  overflow: auto;
  padding-top: 20px;
  width: var(--page-header-width);
  color: var(--page-header-txtColor);
  background: var(--page-header-bgColor);
}
    </style>
    <body>

<?php
  // create short variable names
      $product_name = $_POST['product_name'];
      $product_price = $_POST['product_price'];
      $product_quantity = $_POST['product_quantity'];
      $product_id = $_POST['product_id'];
      $product_image = $_POST['product_image'];
      $product_desc = $_POST['product_desc'];
      $product_category = $_POST['product_category'];

  if (!$product_name || !$product_price || !$product_quantity || !$product_id || !$product_image || !$product_desc || !$product_category) {
     echo "You have not entered all the required details.<br />"
          ."Please go back and try again.";
     exit;
  }

  if (!get_magic_quotes_gpc()) {
    $product_name = doubleval($product_name);
    $product_price = doubleval($product_price);
    $product_quantity = addslashes($product_quantity);
    $product_id = addslashes($product_id);
    $product_image = doubleval($product_image);
    $product_desc = addslashes($product_desc);
    $product_category = addslashes($product_category);
  }

  @ $db = new mysqli('localhost', 'mwhrskay_customer', 'FJb$**]ac_?N', 'mwhrskay_Health415');

  if (mysqli_connect_errno()) {
     echo "Error: Could not connect to database.  Please try again later.";
     exit;
  }

  $sql = "DELETE FROM products WHERE product_id = '$product_id'";
  # = "DELETE FROM products_test WHERE product_id IN(SELECT * FROM products_test WHERE product_name = '$product_name' AND product_price = '$product_price' AND product_quantity = '$product_quantity' AND product_id = '$product_id' 
  #AND product_image = '$product_image' AND product_desc = '$product_desc' AND product_category = '$product_category'";
  


        if (mysqli_query($db, $sql)) {
            echo "<script>window.location.href='AdminDashboard.php';</script>";
        } 
        else {
  	        echo "An error has occurred.  The item was not deleted.";
        }
    

  $db->close();
?>
</body>
</html>