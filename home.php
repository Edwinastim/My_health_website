<?php
// Initialize the session
session_start();

if(!isset($_SESSION['username'])) {
       ob_start();
       header("Location:login.html");
       exit();
}
?>
<?php
    echo '<div style="margin-top:100px;"></div>';
    // ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1);
    // error_reporting(E_ALL);
    $db = new mysqli('localhost', 'mwhrskay_customer', 'FJb$**]ac_?N', 'mwhrskay_Health415');
    if(!$db){
        die("failed" . $db->connect_error);
    }else{
        function executing($sql){
            $db = new mysqli('localhost', 'mwhrskay_customer', 'FJb$**]ac_?N', 'mwhrskay_Health415');
            $result = $db->query($sql);
            while($row = $result->fetch_assoc()){
                $results[] = $row;
            }
            if(!empty($results)){
                return $results;
            }
        }
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(isset($_POST['addCart_btn'])){
                $cartPro_id = $_POST['prod_id'];
                if(!empty($_POST['qty'])){
                    
                    $sql = "SELECT * FROM products WHERE product_id='".$cartPro_id."'";
                    $itemData = executing($sql);
                    $itemDataArray = array($itemData[0]['product_id'] => array('cart_id'   =>$itemData[0]['product_id'],
                                                                               'cart_image'=>$itemData[0]['product_image'],
                                                                               'cart_title'=>$itemData[0]['product_name'],
                                                                               'cart_color'=>'pink',
                                                                               'cart_size' =>50,
                                                                               'cart_desc' =>$itemData[0]['product_desc'],
                                                                               'cart_price'=>$itemData[0]['product_price'],
                                                                               'cart_qty'  =>$_POST['qty'],
                                                                               'in_cart'   =>$_POST['in_cart']));
                    $cartArray = $_SESSION['carted_item'];
                    if(!empty($_SESSION['carted_item'])){
                        if(in_array($itemData[0]['product_id'], array_keys($_SESSION['carted_item']))){
                            foreach($_SESSION['carted_item'] as $keys => $values){
                                if($itemData[0]["product_id"] == $keys){
                                    if(empty($_SESSION['carted_item'][$keys]["cart_qty"])){
                                        $_SESSION['carted_item'][$keys]["cart_qty"] = 0;
                                    }
                                    $_SESSION['carted_item'][$keys]["cart_qty"] += $_POST["qty"];
                                }
                            }
                        }else{
                            $_SESSION['carted_item'] = array_merge($_SESSION['carted_item'], $itemDataArray);
                        }
                    }else{
                        $_SESSION['carted_item'] = $itemDataArray;
                    }
                }
            }
        }
    }



    function products($id, $img, $product_name, $price, $descr, $cart = false){
        $cart_text = "Add to Cart";
        if($cart == true){
            $cart_text = "Added";
        }else{
            $cart_text = "Add to Cart";
        }
        
        $action = '';
        if(isset($_POST['pro_name'])){
            $action = './prdt.php';
        }else{
            $action = './home.php';
        }
        $element = '
                <form action="'.$action.'" method="post" class="container--wrap--form">
                    <div class="container--wrap--form--contents fullWidth fullHeight">
                        <div class="container--wrap--form--sections fullWidth">
                            <img src="'.$img.'" alt="" class="container--wrap--form--img  fullHeight ">
                        </div>
                        <div class="container--wrap--form--sections2">
                            <h4 class="container--wrap--form--sections2--name"><button class="prdt-title" name="pro_name">'.$product_name.'</button></h4>
                            <div class="container--price--cart">
                                <h4 class="container--wrap--form--sections2--price">$'.$price.'</h4>
                                <button type="submit" class="container--wrap--form--addcart--btn" name="addCart_btn" value="'.$cart.'">'.$cart_text.'</button>
                            </div>
                        </div>
                    </div>
                    <input class="hidden" type="hidden" value="'.$id.'" name="prod_id">
                    <input class="hidden" type="hidden" value="1" size="2" name="qty">
                    <input class="hidden" type="hidden" value="'.$cart.'" size="2" name="in_cart">
                </form>';
        echo $element;
    }
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<head>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="Searchbar.css">
        <link rel="stylesheet2" href="catalog.css">
		<script src="https://kit.fontawesome.com/e7d7974425.js" crossorigin="anonymous"></script>                          
		<style>
			body {
				margin: 10px;
				background-image: url('https://c4.wallpaperflare.com/wallpaper/790/52/1014/minimalistic-waves-white-gradient-wallpaper-preview.jpg');
				background-repeat: no-repeat;
				background-attachment: fixed;
				background-size: cover;
			}

			h1 {
				font-family: Copperplate, Papyrus, fantasy;
				font-size: 80px;
				offset: 20;
				color: #872d0f;
			}

			p {
				color: #cc481d;
			}

			.divider {
				width: 5px;
				height: auto;
				display: inline-block;
			}

			ul {
				list-style-type: none;
				margin: 0;
				padding: 0;
				overflow: hidden;
				background-color: #cc481d;

				position: fixed;
				top: 0;
				width: 100%;
			}

			li {
				float: left;
			}

			li a {
				display: block;
				color: white;
				text-align: left;
				padding: 20px 16px;
				text-decoration: none;
			}

			li a:hover:not(.active) {
				background-color: #872d0f
			}

			.active {
				background-color: #ffff;
				color: #cc481d;
			}
			
			
			.wrapper{
                max-width: 350px;
                margin: 10px auto;
                }
    
                .wrapper .search-input{
                background: #fff;
                width: 120%;
                border-radius: 5px;
                position: relative;
                box-shadow: 0px 1px 5px 3px rgba(0,0,0,0.12);
                }
    
                .search-input input{
                height: 35px;
                width: 100%;
                outline: none;
                border: none;
                border-radius: 5px;
                padding: 0 60px 0 20px;
                font-size: 18px;
                box-shadow: 0px 1px 5px rgba(0,0,0,0.1);
                }
                .search-input.active input{
                border-radius: 5px 5px 0 0;
                }
    
                .search-input .autocom-box{
                padding: 0;
                opacity: 50;
                pointer-events: none;
                max-height: 280px;
                overflow-y: auto;
                }
                .search-input.active .autocom-box{
                padding: 10px 8px;
                opacity: 1;
                pointer-events: auto;
                }
                
                .autocom-box li{
                list-style: none;
                padding: 8px 12px;
                display: none;
                width: 75%;
                cursor: default;
                border-radius: 3px;
                }
    
                .search-input.active .autocom-box li{
                display: block;
                }
                .autocom-box li:hover{
                background: #efefef;
                }
                .search-input .icon{
                position: absolute;
                right: 0px;
                top: 7px;
                height: 35px;
                width: 37px;
                text-align: center;
                line-height: 39px;
                font-size: 18px;
                color: #cc481d;
                cursor: pointer;
                }
                a.hidden{
                    width: 50%;
                }
                
                .prdt-title{
                    background:none;
                    border:0;
                    cursor:pointer;
                }
                .p-3 {
                    padding: 0;
                }
                .form-control-lg{height: calc(1.5em + 1rem + -9px);}
                .btn-lg{line-height: 0.5;}
		</style>
		<!--</head>-->
		<body>

			<ul>
				<li><a class="active" href="./home.php">Home</a></li>
				<li style="text-align: left"><a href="cart.php">View Cart</a></li>
				<!-- <li style="text-alight: right"><a href="Profile.html">Profile</a></li> -->
				<li style = "text-align: right"> <a href = "request_cancelation.php">Order History</a></li>
				<li style = "text-align: right"> <a href = "contactus.php">Contact</a></li>
		        <li><a href="logout.php">Logout</a></li>
		        <li>
		        <div class = "just-maybe" >
    		        <form action="prdt.php" method="post" class="p-3">
                        <div class="input-group">
                            <input type="text" name="search" id="search" class="form-control form-control-lg rounded-0 border-info" placeholder="Search..." autocomplete="off" required>
                        <div class="input-group-append">
                            <input type="submit" name="submit1" value="Search" class="btn btn-info btn-lg rounded-0">
                        </div>
                        </div>
                    </form>
                    
                    <div class="col-md-5" style="position: relative;margin-top: -31px;margin-left: 0px;">
                        <div class="list-group" id="show-list">
                            <!-- Here autocomplete list will be display -->
                        </div>
                    </div>
                </div>


			</ul>
                
				</li>

			</ul>

			<div style=p adding: "20px;margin-top:30px;"background-color:linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%)>


				<html>
				<style>
					* {
						box-sizing: border-box;
					}
                body {
                  margin:10px;
                  background-image: url('https://c4.wallpaperflare.com/wallpaper/790/52/1014/minimalistic-waves-white-gradient-wallpaper-preview.jpg');
                   background-repeat: no-repeat;
                  background-attachment: fixed;
                  background-size: cover;
                  }
                  h1{
                    font-family: Copperplate, Papyrus, fantasy;
                    font-size: 80px;
                    offset: 20;
                  }
                 .divider{
                    width:5px;
                    height:auto;
                    display:inline-block;
                }
                
                .header {
						text-align: center;
						padding: 32px;
                }
                
                ul {
                  list-style-type: none;
                  margin: 0;
                  padding: 0;
                  overflow: hidden;
                  background-color: #cc481d;
                
                  position: fixed;
                  top: 0;
                  width: 100%;
                }
                
                li {
                  float: left;
                }
                
                li a {
                  display: block;
                  color: white;
                  text-align: left;
                  padding: 20px 16px;
                  text-decoration: none;
                }
                
                li a:hover:not(.active) {
                  background-color: #872d0f
                }
                
                .active {
                  background-color: #ffff;
                  color: #cc481d;
                }
					.container{
                      width:100vw;
                      padding-left:4%;
                      padding-right:4%;
                      margin-top:100px;
                  }
                  .fullWidth{
                      width:100%;
                  }
                  .fullHeight{
                      height:100%;
                  }
                  .container--wrap--form{
                      width:calc(25% - 24px);
                      height:calc(24vw * 1.4);
                      border:1px solid rgb(0,0,0,.09);
                      overflow:hidden;
                      float:left;
                      margin-right:24px;
                  }
                  .container--wrap--form--sections{
                      height:70%;
                      background:white;
                      overflow:hidden;
                      display:flex;
                      justify-content: center;
                  }
                  .hidden{
                      display:none;
                  }
                  .container--wrap--form--sections2 *{
                      padding:0;
                      margin:0;
                  }
                  .container--wrap--form--sections2{
                      padding-left:5px;
                      padding-right:5px;
                      width:100%;
                      height:30%;
                      background:white;
                      padding:10px;
                  }
                  .container--wrap--form--sections2--name{
                      width:100%;
                      overflow:hidden;
                      text-overflow:ellipsis;
                      white-space: nowrap;
                      margin-bottom:6px;
                      font-family:Copperplate, Papyrus, fantasy;
                  }
                  .container--wrap--form--sections2--price{
                      width:100%;
                      overflow:hidden;
                      text-overflow:ellipsis;
                      white-space: nowrap;
                      margin-bottom:6px;
                      font-family:Copperplate, Papyrus, fantasy;
                  }
                  .container--wrap--form--addcart--btn{
                      padding:7px;
                      margin-top:5px;
                      border:0;
                      background:black;
                      color:white;
                      border-radius:15px;
                      font-size:11.5px;
                  }
                  .container--price--cart{
                      display:flex;
                      justify-content:space-between;
                      align-items:center;
                  }
                  .container--wrap--form--addcart--btn{
                      white-space:nowrap;
                  }
                  
                  
                  @media only screen and (max-width:1024px){
                      .container--wrap--form{
                          width:calc(100% - 12px);
                          height:calc(100vw * 1.4);
                          border:1px solid rgb(0,0,0,.09);
                          overflow:hidden;
                          float:left;
                          margin-right:24px;
                      }
                  }

					
				</style>

				<div>
					<!-- Header -->
					<div class="header">
						<h1>Health 415</h1>
						<p>Welcome to the one-stop shop for the world's best health products!</p>
					</div>

					<!-- Photo Grid -->

		
        <div class="container--wrap fullWidth">
            <?php   
                $sql = "SELECT product_id, product_image, product_name, product_price FROM products";
                $executing = $db->query($sql);
                if($executing->num_rows > 0){
                    while($prdt = $executing->fetch_assoc()){
                        if(!empty($_POST['pro_id'])){
                            if(in_array($_POST['prod_id'], array_keys($_SESSION['carted_item']))){
                                $inCart = true;
                            }else{
                                $inCart = false;
                            }
                        }
                        products($prdt['product_id'], $prdt['product_image'], $prdt['product_name'], $prdt['product_price'], NULL, false);
                    }
                }else{
                    echo "No product found";
                }
                //session_destroy();
            ?>
        </div>
   
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--<script src="suggestions.js"></script> -->
<script src="search.js"></script>
</html>