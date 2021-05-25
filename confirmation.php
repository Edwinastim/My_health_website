<?php
    session_start()
?>
<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    #include ('cart.php');
    $_SESSION['carted_item'];
    $_SESSION['username'];
    if(empty($_SESSION['carted_item'])){
        $priceTotal = number_format(floatval(0), 2);
        $itemCount = 0;
    }
    else
    {
        $priceTotal = 0;
        $qty = 0;
        foreach($_SESSION['carted_item'] as $item){
                $priceTotal += $item['cart_price']*$item['cart_qty'];
                $qty += ($item['cart_qty'] -1);
                $priceTotal = number_format(floatval($priceTotal), 2);
            }
            $itemCount = count($_SESSION['carted_item']) * $qty;
        }
?>

<?php
    $username = $_SESSION['username'];;
    $order_number = rand(0, 32767);
    $total = $priceTotal;
    $shipment_status = 'ready';
    
?>
<html>
  <head>
    <script src="validate.js"></script>
  </head>
<body>
<style>
  * {
  box-sizing: border-box;
}
 
html,
body {
  font-family: 'Montserrat', sans-serif;
  font-size-adjust: u
  display: flex;
  width: 80%;
  height: 70%;
  background: #eeeeee;
  justify-content: center;
  align-items: center;  
}
.checkout-panel {
  display: center;
  flex-direction: column;
  width: 940px;
  height: 656px;
  background-color: rgb(255, 255, 255);
  box-shadow: 0 1px 1px 0 #86939E;
  align: center;

}
.panel-body {
  padding: 45px 80px 0;
  flex: 1;
  align: center;
}
 
.title {
  font-weight: 700;
  margin-top: 0;
  margin-bottom: 40px;
  color: #872d0f;
}
.progress-bar {
  display: flex;
  margin-bottom: 50px;
  justify-content: space-between;
}
 
.step {
  box-sizing: border-box;
  position: relative;
  z-index: 1;
  display: block;
  width: 25px;
  height: 25px;
  margin-bottom: 30px;
  border: 4px solid #fff;
  border-radius: 50%;
  background-color: #efefef;
}
 
.step:after {
  position: absolute;
  z-index: -1;
  top: 5px;
  left: 22px;
  width: 225px;
  height: 6px;
  content: '';
  background-color: #C91524;
}
 
.step:before {
  color: #C91524;
  position: absolute;
  top: 40px;
}
 
.step:last-child:after {
  content: none;
}
 
.step.active {
  background-color: #C91524;
}
.step.active:after {
  background-color: #C91524;
}
.step.active:before {
  color: #C91524;
}
.step.active + .step {
  background-color: #C91524;
}
.step.active + .step:before {
  color: #C91524;
}
 
.step:nth-child(1):before {
  content: 'Cart';
}
.step:nth-child(2):before {
  right: -40px;
  content: 'Confirmation';
}
.step:nth-child(3):before {
  right: -30px;
  content: 'Payment';
}
.step:nth-child(4):before {
  right:0;
  content: 'Finish';
}

.payment-method {
  display: flex;
  margin-bottom: 60px;
  justify-content: space-between;
}

.method {
  display: flex;
  flex-direction: column;
  width: 382px;
  height: 122px;
  padding-top: 20px;
  cursor: pointer;
  border: 1px solid transparent;
  border-radius: 2px;
  background-color: rgb(231, 231, 231);
  justify-content: center;
  align-items: center;
}

.card-logos {
  display: flex;
  width: 150px;
  justify-content: space-between;
  align-items: center;
}
 
.radio-input {
  margin-top: 20px;
}
 
input[type='radio'] {
  display: inline-block;
}
.input-fields {
  display: flex;
  justify-content: space-between;
}
 
.input-fields label {
  display: block;
  margin-bottom: 10px;
  color: #86939E;
}
 
.info {
  font-size: 12px;
  font-weight: 300;
  display: block;
  margin-top: 50px;
  opacity: .5;
  color: #2e2e2e;
}
 
div[class*='column'] {
  width: 382px;
}
 
input[type='text'],
input[type='password'] {
  font-size: 16px;
  width: 100%;
  height: 50px;
  padding-right: 40px;
  padding-left: 16px;
  color: #2e2e2e;
  border: 1px solid rgb(231, 231, 231);
  border-radius: 4px;
  outline: none;
}
 
input[type='text']:focus,
input[type='password']:focus {
  border-color: #C91524;
}
 
#date { background: url(img/icons_calendar_black.png) no-repeat 95%; }
#cardholder { background: url(img/icons_person_black.png) no-repeat 95%; }
#cardnumber { background: url(img/icons_card_black.png) no-repeat 95%; }
#verification { background: url(img/icons_lock_black.png) no-repeat 95%; }
 
.small-inputs {
  display: flex;
  margin-top: 20px;
  justify-content: space-between;
}
 
.small-inputs div {
  width: 182px;
}
.panel-footer {
  display: flex;
  width: 100%;
  height: 96px;
  padding: 0 80px;
  background-color: #86939E;
  justify-content: space-between;
  align-items: center;
}
.btn {
  font-size: 16px;
  width: 163px;
  height: 48px;
  cursor: pointer;
  transition: all .2s ease-in-out;
  letter-spacing: 1px;
  border: none;
  border-radius: 23px;
}
 
.back-btn {
  color: #C91524;
  background: rgb(231, 231, 231);
}
 
.next-btn {
  color: rgb(231, 231, 231);
  background: #C91524;
}
 
.btn:focus {
  outline: none;
}
 
.btn:hover {
  transform: scale(1.1);
}
.blue-border {
  border: 1px solid rgba(59, 0, 0, 0.5);
}
.warning {
  border-color: #C91524;
}
.hide {
  display:none;
}
  </style>

<div class="checkout-panel">
	<div class="panel-body">
		<h2 class="title" style= "align :center">Complete Your Order!</h2>

		<div class="progress-bar">
			<div class="step active"></div>
			<div class="step active"></div>
			<div class="step"></div>
			<div class="step"></div>
		</div>


    <div class="label">

      Confirm Your Order? <!--PHP load randomized number , this number is also submitted to the database of the user's ordered products-->
      </div>
    
    </div>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <!--start of the confirm panel-->
    <footer>
      <!--  <head>
            <title> Confirm Order</title>
        </head>
        <body>
            <h1> Confirm Order</h1>
            <form action=" " method = "POST">
                <label for="order_number"> Confirm order </label>
                <select name="cancel_request" id = "cancel_request">
                    <option value = "no"> yes</option>
                </select>
                
                <input class = "btn back-btn" type = "submit" name = "update" value = "CONFIRM ORDER"/>
            </form>
        </body> -->
        <div class="panel-footer">
            <button class="btn back-btn" onclick="document.location='home.php'">Cancel Order</button>
          <!--  <button class="btn next-btn" onclick = "document.location = 'Profile.html'">View All Purchases</button> <!--there should be a query on the main page that  loads the users order numbers and  what their orders contained from an order table-->
          <!--  <button class="btn next-btn" onclick = "document.location = 'Return.html'">Start a Return</button> -->
            <body>
            <!-- <h1> Confirm Order</h1> -->
            <form action=" " method = "POST">
                <label for="order_number"></label>
                <!-- the code below asks the user to complete order. Once that's done, a query runs to insert all relevent user info into the receipt table -->
                <!--select name="cancel_request" id = "cancel_request"-->
                    <option class = 'hide' value = "no"></option>
                </select>
                
                <input class = "btn next-btn" type = "submit" name = "update" value = "CONFIRM ORDER"/>
            </form>
        </body>
            <!--Trigger php submit return request 
            should there be return request page?-->
        </div>
    </footer>
    
  </div>
 
  </body>
<?php
  if(isset($_POST['update']))
  {
      @ $db = new mysqli('localhost', 'mwhrskay_customer', 'FJb$**]ac_?N', 'mwhrskay_Health415');
      $username = $_SESSION['username'];;
      $order_number = rand(0, 32767);
      $total = $priceTotal;
      $shipment_status = 'ready';
      $cancel_request = 'no';
      
      #$query = "UPDATE receipt SET username = '$username', total = '$total', shipment_status = '$shipment_status' where order_number = '$order_number' ";
      #$query = "insert into receipt SET cancel_request = '$cancel_request' where order_number = '$order_number'";
      $query = "insert into receipt values('".$username."', '".$order_number."', '".$total."', '".$shipment_status."', '".$cancel_request."')";
      $query_run = mysqli_query($db, $query);
      if($query_run)
      {
         echo "<script>window.location.href='request_cancelation.php';</script>";
      }
      else
      {
          echo "error: no connection";
      }
      
  }
?>

</html>