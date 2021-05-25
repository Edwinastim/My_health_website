<?php
    session_start();
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
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
        if(isset($_POST['addCart'])){
            $cartPro_id = $_SESSION['pid'];
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
?>


<?php
    echo '<div style="margin-top:100px;"></div>';
    
    if(isset($_POST['submit1'])){
            $product_name = $_POST['search'];
            $sql = "SELECT product_id FROM products WHERE product_name = '".$product_name."'";
            $id_search = $db->query($sql);
            $id_search2 = $id_search->fetch_assoc();
            $_POST['prod_id'] = $id_search2['product_id'];
    
    }
    if(!empty($_POST['prod_id'])){
        $_SESSION['pid'] = $_POST['prod_id'];
    }else{
        $_SESSION['pid'] = $_POST['prdt_id'];
    }
    $product_id_auth = $_SESSION['pid'];
    $sql = 'SELECT product_id, product_image, product_name, product_price, product_desc FROM products WHERE product_id = '.$product_id_auth.' LIMIT 1';
    $prdt_result = $db->query($sql);
    if($prdt_result){
        if($prdt_result->num_rows > 0){
            while($prdt_data = $prdt_result->fetch_assoc()){
                echo '

<style>
    *{
        box-sizing: border-box;
    }
body {
    
  margin:10px;
  background-image: url(\'https://c4.wallpaperflare.com/wallpaper/790/52/1014/minimalistic-waves-white-gradient-wallpaper-preview.jpg\');
   background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  }
  h1{
    font-family: Copperplate, Papyrus, fantasy;
    font-size: 80px;
    offset: 20;
    color: #872d0f;
  }
  p{
    color: #cc481d;
  }
 .divider{
    width:5px;
    height:auto;
    display:inline-block;
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
</style>
<!--</head>-->
<body>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>

<div style= padding:"20px;margin-top:30px;"background-color:linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%)>


  <style>
body {
  margin:10px;
  background-image: url(\'https://c4.wallpaperflare.com/wallpaper/790/52/1014/minimalistic-waves-white-gradient-wallpaper-preview.jpg\');
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
          background:red;
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
          padding:5px;
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
      
      
      
      
      
      
      
      .product--container{
          margin-top:70px;
      }
      .m_flexbetween_h{
          display:flex;
          justify-content: space-between;
    
      }
      .product--container--windows1{

          padding:20px;
          width:50%;
      }
      .product--container--windows2{
          padding:20px;
      }
      
      .product--container--windows2--title{
          font-family:Copperplate, Papyrus, fantasy;
      }
      .product--container--windows2--btns{
          width:100%;
          height:50px;
          background:black;
          color:white;
          border:none;
          border-radius:50px;
          margin-top:15px;
      }
      .product--container--windows2--paragraph{
          font-family:arial;
          color:black !important;
          line-height:1.4rem;
      }
      .pro p{
          font-family:arial;
          line-height:1em;
      }
      p{
          color:black;
      }
</style>
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tutorial</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- CSS -->
    <link href="style.css" rel="stylesheet">
    <meta name="robots" content="noindex,follow" />

  </head>

  <body>
    <form method="post" action="" class="product--container--form">
        <div class="product--container fullWidth m_flexbetween_h">
            <div class="product--container--windows1 fullWidth">
                <img src="'.$prdt_data['product_image'].'" alt="" class="product--container--windows1--img fullWidth">
            </div>
            <div class="product--container--windows2 fullWidth">
                <div class="product--container--windows2--title">
                    <h3>'.$prdt_data['product_name'].'</h3>
                </div>
                <div class="product--container--windows2--title">
                    <span class="">Reviews: </span><span class="">4310</span>
                </div>
                <br>
                <div class="product--container--windows2--title">
                    <span class="">Price: </span><span class="">$'.$prdt_data['product_price'].'</span>
                </div>
                <div class="product--container--windows2--paragraph">
                    <p class="pcwp">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="product--container--windows2--title">
                    <h4 class="">Product Details</h4>
                    <div class="pro">
                        <p class="">Fact Number One</p>
                        <p class="">Fact Number Two</p>
                        <p class="">Fact Number Three</p>
                        <p class="">Fact Number Four</p>
                        <p class="">Fact Number Five</p>
                        <p class="">Fact Number Six</p>
                        <p class="">Fact Number Seven</p>
                    </div>
                </div>
                <div class="product--container--windows2--title">
                    <button class="product--container--windows2--btns" type="submit" name="addCart">Add to Cart</button>
                    <button class="product--container--windows2--btns" type="button" onclick="window.location.href=\'./cart.php\'">View Cart</button>
                    <button class="product--container--windows2--btns" type="button" onclick="window.location.href=\'./home.php\'">Back to Catalog</button>
                </div>
                <input class="hidden" type="hidden" value="'.$_SESSION['pid'].'" name="prdt_id">
                <input class="hidden" type="hidden" value="1" size="2" name="qty">
                <input class="hidden" type="hidden" value="" size="2" name="in_cart">
            </div>
        </div>
    </form>
';
            }
        }
    }else{
        echo 'not here';
    }
?>
<!--<src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>-->
    <script src="script.js" charset="utf-8"></script>
  </body>
</html>
