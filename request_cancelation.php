<?php
  session_start();
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  if(isset($_SESSION['username'])) {
}
  $user_check = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
    
    <style>
    .form-style-5{
	max-width: 80%;
	padding: 10px 20px;
	background: #f8f4f4;
	margin: 10px auto;
	padding: 20px;
	background: #f8f4f4;
	border-radius: 8px;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-5 fieldset{
	border: none;
}
.form-style-5 legend {
	font-size: 1.4em;
	margin-bottom: 10px;
}
.form-style-5 label {
	display: block;
	margin-bottom: 8px;
}
.form-style-5 input[type="text"],
.form-style-5 input[type = "number"],
.form-style-5 textarea,
.form-style-5 select {
	font-family: Georgia, "Times New Roman", Times, serif;
	background: rgba(255,255,255,.1);
	border: none;
	border-radius: 4px;
	font-size: 15px;
	margin: 0;
	outline: 0;
	padding: 5px;
	width: 100%;
	box-sizing: border-box; 
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box; 
	background-color: #efe8e8;
	color:#a08a8a;
	-webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
	box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
	margin-bottom: 10px;
}

.form-style-5 select:focus{
	background: #ddd2d2;
}
.form-style-5 select{
	-webkit-appearance: menulist-button;
	height:35px;
}
.form-style-5 .number {
	background: #bc1a1a;
	color: #fff;
	height: 30px;
	width: 30px;
	display: inline-block;
	font-size: 0.8em;
	margin-right: 4px;
	line-height: 30px;
	text-align: center;
	text-shadow: 0 1px 0 rgba(255,255,255,0.2);
	border-radius: 15px 15px 15px 0px;
}

.form-style-5 input[type="submit"],
.form-style-5 input[type="button"]
{
	position: relative;
	display: block;
	padding: 19px 39px 18px 39px;
	color: #FFF;
	margin: 0 auto;
	background: #bc1a1a;
	font-size: 18px;
	text-align: center;
	font-style: normal;
	width: 100%;
	border: 1px solid #800f0f;
	border-width: 1px 1px 3px;
	margin-bottom: 10px;
}
.form-style-5 input[type="submit"]:hover,
.form-style-5 input[type="button"]:hover
{
	background: #911010;
}


#users {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

#users td, #customers th {
  border: 1px solid #efe8e8;
  padding: 8px;
}

#users tr:nth-child(even){background-color: #f8f4f4;}

#users tr:hover {background-color: #ddd2d2;}

#users th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #bc1a1a;
  color: white;
}
    </style>
    
    <title>Manage Orders</title>
</head>
<body >
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-danger">
        <a class="navbar-brand" href="index.html">Health 415</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.html" tabindex="-1" aria-disabled="false">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.html" tabindex="-1" aria-disabled="false">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
            </li>
          </ul>
      </nav>
    <form action="log_in_check_practice4.php" method = "post">   
   <div class = "form-style-5"><legend>Your Order History</legend>
      </form>
      <!-- <button class="btn" onclick="document.location='register.html'">Register</button> -->
</body>
</html>
<?php
  
  $con=mysqli_connect('localhost', 'mwhrskay_customer', 'FJb$**]ac_?N', 'mwhrskay_Health415');
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM receipt WHERE username = '".$user_check."'");

echo "<table border='1' id = 'users'>
<tr>
<th>Username</th>
<th>Order Number</th>
<th>Total</th>
<th>Shipment Status</th>
<th>Cancel Request</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['order_number'] . "</td>";
echo "<td>" . $row['total'] . "</td>";
echo "<td>" . $row['shipment_status'] . "</td>";
echo "<td>" . $row['cancel_request'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
</div>

<head>

</head>
<body>
    <div class="form-style-5">
         <legend>Manage Orders</legend>
            <form action=" " method = "POST">
                <input type = "number" name = "order_number" placeholder = "Enter order number"  required/> <br/>
        <!--        <input type = "text" name = "username" placeholder = "Enter username" /> <br/>
                <input type = "text" name = "total" placeholder = "Enter total" /> <br/> -->
        <!--        <input type = "text" name = "shipment_status" placeholder = "Enter Shipment Status" /> <br/> -->
                <label for="cancel_request"> Request Cancel Order? </label>
                <select name="cancel_request" id = "cancel_request" required>
                    <option value = "yes"> yes</option>
                </select>
                
                <input type = "submit" name = "update" value = "UPDATE SHIPMENT"/>
            </form>
            </div>
    </body>
<?php
  @ $db = new mysqli('localhost', 'mwhrskay_customer', 'FJb$**]ac_?N', 'mwhrskay_Health415');
  if(isset($_POST['update']))
  {
      $order_number = $_POST['order_number'];
      #$username = $_POST['username'];
      #$total = $_POST['total'];
      $cancel_request = $_POST['cancel_request'];
      
      #$query = "UPDATE receipt SET username = '$username', total = '$total', shipment_status = '$shipment_status' where order_number = '$order_number' ";
      $query = "UPDATE receipt SET cancel_request = '$cancel_request' where order_number = '$order_number'";
      $query_run = mysqli_query($db, $query);
      if($query_run)
      {
          echo "<script>window.location.href='request_cancelation.php';</script>";
          echo 'Your order is being processed';
      }
      else
      {
          echo "error: no connection";
      }
      
  }
?>