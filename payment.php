<?php
    session_start()
?>
<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
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
<html>
 
  <head>
    <link rel="stylesheet" href="style1.css">
    	<script src="validate.js">
        </script>
      <script>
         function toggleTheme() { 
            // Obtains an array of all <link> 
            // elements. 
            // Select your element using indexing. 
            var theme = document.getElementsByTagName('link')[0]; 

            // Change the value of href attribute  
            // to change the css sheet. 
            if (theme.getAttribute('href') == 'style1.css') { 
                theme.setAttribute('href', 'style2.css'); 
            } else if (theme.getAttribute('href', 'style2.css')){ 
                theme.setAttribute('href', 'style1.css'); 
            } 
        } 
    </script>
  </head>
  <style>
            .remove
          .removeArrow::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
              -webkit-appearance: none;
              margin: 0;
            }
            
            /* Firefox */
            .removeArrow[type=number] {
              -moz-appearance: textfield;
            }
  </style>
<body>


<div class="checkout-panel">
	<div class="panel-body">
		<h2 class="title">Please Enter Your Payment Method</h2>

		<div class="progress-bar">
			<div class="step active"></div>
			<div class="step active"></div>
			<div class="step"></div>
			<div class="step"></div>
		</div>

		<div class="payment-method">
			<label for="card" class="method card">
        <div class="card-logos">
          <img src="https://designmodo.com/demo/checkout-panel/img/visa_logo.png"/>
          <img src="https://designmodo.com/demo/checkout-panel/img/mastercard_logo.png"/>
        </div>
 
        <div class="radio-input">
          <input id="card" type="radio" name="payment" checked onclick="toggleTheme()">
             Pay $<?php echo $priceTotal;?> with credit card
        </div>
      </label>
      <label for="paypal" class="method paypal">
        <img src="https://designmodo.com/demo/checkout-panel/img/paypal_logo.png"/>
        <div class="radio-input" onclick = "toggleTheme()">
          <input id="paypal" type="radio" name="payment" value="">
            Pay $<?php echo $priceTotal;?> with PayPal
        </div>
      </label>
    </div>
    
    
        <div class="input-fields">
            <div class="column-1">
                <label for="cardholder">Name</label>
                <input type="text" id="cardholder" required>
    
                <div class="small-inputs">
                <div>
                    <label for="date">Expiration Date</label>
                 <input type="text" id="date" required>
                </div>
    
                <div>
                <label for="verification">CVV / CVC *</label>
                <input type="password" minlength="3" maxlength="4" id="verification" required>
                </div>
                </div>
            </div>
            <div class="column-2">
                <label for="cardnumber">Card Number</label>
                <input type="text" class='' minlength="14" maxlength="16" id="cardnumber" required>
    
                <span class="info">* CVV or CVC is the card security code, unique three digits number on the back of your card separate from its number.</span>
            </div>
        </div>
    </div>
        <div class="panel-footer">
            <button class="btn back-btn" onclick="document.location='cart.php'">Back</button>
            <button type="submit" name="purchase" class="btn next-btn" id="purchase" onclick="document.location= 'confirmation.php'">Next Step</button>
        </div>
    </form> 
    </div>
  </body>

</html>