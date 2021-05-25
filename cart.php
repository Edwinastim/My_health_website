<?php session_start();?>
<?php
    $user_check = $_SESSION['username'];
    function cartCard($id, $img, $title, $color, $size, $desc, $price, $qty){
        $sub = intval($qty) * floatval($price);
        $subt = number_format(floatval($sub), 2);
        $element = '
                <form action="" method="post" class="cart--item--card flexbetween-h">
                    <div class="cart--item--product--cols cibc1 flexbetween-h">
                        <div class="cart--item--product--img--hold cipi  flexcenter-vh">
                            <img src="'.$img.'" alt="" class="cart--item--product--img ">
                        </div>
                        <div class="cart--item--product--info cipi half">
                            <p class="cart--item--product--info--name condense">'.$title.'</p>
                            <div class="cart--item--product--desc">
                                <span class="cart--item--product--desc--span condense">Color:</span>
                                <span class="cart--item--product--desc--span lcondense">'.$color.'</span>
                            </div>
                            <div class="cart--item--product--desc">
                                <span class="cart--item--product--desc--span condense">Size:</span>
                                <span class="cart--item--product--desc--span lcondense">'.$size.' unit</span>
                            </div>
                            <div class="cart--item--product--desc">
                                <span class="cart--item--product--desc--span condense">Description:</span>
                                <p class="cart--item--product--desc--span lcondense">'.$desc.'</p>
                            </div>
                        </div>
                    </div>
                    <div class="cart--item--product--cols cibc2 lcondense">
                        $'.number_format(floatval($price), 2).'
                    </div>
                    <div class="cart--item--product--cols cibc3">
                        <input type="number" name="" id="" class="cart--item--product--qty lcondense" readonly value="'.$qty.'">
                    </div>
                    <div class="cart--item--product--cols cibc4 cipc4 lcondense">
                        <p class="">$'.$subt.'</p>
                        <button type="submit" class="cart--item--product--btn" name="remove_cart">Remove</button>
                    </div>
                    <input class="hidden" type="hidden" value="'.$id.'" name="cart_id">
                </form>
        ';
        echo $element;
    }
?>


<?= 
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $db = new mysqli('localhost', 'mwhrskay_customer', 'FJb$**]ac_?N', 'mwhrskay_Health415');
    if(!$db){
        die("failed" . $db->connect_error);
    }else{
        if(isset($_POST['empty--cancel--sub'])){
            unset($_SESSION['carted_item']);
        }
        
        if(isset($_POST['remove_cart'])){
            if(!empty($_SESSION['carted_item'])){
                foreach($_SESSION['carted_item'] as $keys => $values){
                    if($_POST['cart_id'] == $values['cart_id']){
                        unset($_SESSION['carted_item'][$keys]);
                    }
                    if(empty($_SESSION['carted_item'])){
                        unset($_SESSION['carted_item']);
                    }
                }
            }
        }
    }

?>




<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap');
</style>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing: border-box;
        outline:none;
    }
    .hidden{
        display:none;
        visibility:hidden;
        width:0;
        height:0;
        opacity:0;
    }
    .shopping--cart{
    }
    .shopping--cart{
        margin-top:30px;
        margin-bottom:50px;
        width:100vw;
        padding-right:2%;
        padding-bottom:2%;
    }
    .flexbetween-h{
        display:flex;
        justify-content: space-between;
    }
    .flexbetween-vh{
        display:flex;
        justify-content: space-between;
        -ms-align-items: center;
        align-items: center;
    }
    .flexcenter-vh{
        display:flex;
        justify-content: center;
        -ms-align-items: center;
        align-items: center;
    }
    .flexspace{
        flex:0 0 auto;
    }
    .fullWidth{
        width:100%;
        overflow-x:hidden;
    }
    .fullHeight{
        height:100%;
        overflow-y:hidden;
    }
    .lcondense{
        font-family:roboto condensed;
        font-weight:300;
    }
    .condense{
        font-family:roboto condensed;
        font-weight:500;
    }
    .nowrap{
        white-space:nowrap;
    }
    
    
    
    .sss{
        min-height:500px;
        padding:15px;
    }
    .section-1--shopping{
        width:70%;
    }
    .section-2--shopping{
        width:30%;
        background:rgb(0,0,0,.05);
    }
    .sumarry{
        border-bottom: 1px solid rgb(0,0,0,.08);
        
    }
    .items--box{
        border:1px solid rgb(0,0,0,.08);
        margin-top:10px;
        margin-bottom:10px;
        padding:10px;
    }
    .items--amount{
        margin-bottom:10px;
    }
    .hr{
        border-bottom:1px solid rgb(0,0,0,.09);
    }
    .checkout--items{
        background:black;
        width:100%;
        color:white;
        border:0;
        padding:15px;
    }
    .checkout--items--red{
        background:red;
        width:100%;
        color:white;
        border:0;
        padding:15px;
        margin-top:20px;
    }
    .cart--item--bar{
        border-bottom:1px solid rgb(0,0,0,.09);
        padding:10px;
    }
    .cibc1{
        width:40%;
    }
    .cibc2,.cibc3,.cibc4{
        width:20%;
    }
    .cibc2,.cibc3{
        text-align:center;
    }
    .cibc4{
        text-align:right;
    }
    
    .half{
        width:70%;
    }
    .cart--item--product--img--hold{
        width:30%;
    }
    
    
    
    .cart--item--card{
        width:100%;
        height:230px;
        border-bottom:1px solid rgb(0,0,0,.09);
        padding:14px;
    }
    .cart--item--product--qty{
        border:0;
        text-align:center;
    }
    .cart--item--product--img{
        border:1px solid rgb(0,0,0,.2);
        border-radius: 50%;
        overflow:hidden;
        width:85%;
    }
    .cipi{
        padding:5px;
        white-space: wrap;
        flex-wrap: wrap;
    }
    .cart--item--product--info{
        overflow:auto;
        flex-wrap:wrap !important;
    }
    .cart--item--product--info--name{
        white-space: nowrap;
        overflow:hidden;
        text-overflow: ellipsis;
        margin-bottom:14px;
        
    }
    .cart--item--product--desc{
        margin-bottom:14px;
    }
    .cart--item--product--desc--span{
        white-space:normal;
    }
    .cipc4{
        
    }
    .cart--item--product--btn{
        margin-top:120px;
        padding:5px;
        border:0;
        background:red;
        color:white;
    }
    .shopping--cart--text{
        margin-left:2vh;
    }
    
    
    
    .cart--item--empty--frame{
        width:100%;
        height:500px;
        background:rgb(0,0,0,.09);
        font-family:roboto condensed;
        font-weight:400px;
        font-size:18px;
        
        
        display:flex;
        justify-content: center;
        -ms-align-items: center;
        align-items: center;
    }
    
    .cart--item--empty--comps{
        text-align:center;
    }
    .cart--item--empty--frame--btn{
        margin-top:15px;
        color:white;
        background:linear-gradient(to right bottom, dodgerblue, royalblue);
        height:40px;
        padding-right:20px;
        padding-left:20px;
        border:0;
    }
</style>
<div class="shopping--cart">
    <h1 class="shopping--cart--text lcondense">Shopping Cart</h1>
    <div class="shopping--cart--area flexbetween-h nowrap">
        <div class="section-1--shopping sss ">
            <div class="cart--item--bar fullWidth condense flexbetween-vh">
                <div class="cart--items--bar--cols  cibc1">Item</div>
                <div class="cart--items--bar--cols  cibc2">Price</div>
                <div class="cart--items--bar--cols  cibc3">Quantity</div>
                <div class="cart--items--bar--cols  cibc4">Subtotal</div>
            </div>
            <div class="cart--item--products">
                <?php
                    if(empty($_SESSION['carted_item'])){
                        ?>
                        <div class="cart--item--empty--frame">
                           <div class="cart--item--empty--comps">
                                <p class="">Your shopping cart is currently empty.</p>
                                <button class="cart--item--empty--frame--btn" onclick="window.location.href='./home.php'">Start Shopping</button>
                            </div>
                        </div>
                <?php
                    }else{
                        foreach($_SESSION['carted_item'] as $item){
                            $i_price = $item['cart_qty'] * $item['cart_price'];
                            cartCard($item['cart_id'], $item['cart_image'], $item['cart_title'], $item['cart_color'], $item['cart_size'], $item['cart_desc'], $item['cart_price'], $item['cart_qty']);
                        }
                    }
                    //session_destroy();
                ?>
            </div>
        </div>
        <?php
            if(empty($_SESSION['carted_item'])){
                $priceTotal = number_format(floatval(0), 2);
                $itemCount = 0;
            }else{
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
        <div class="section-2--shopping sss ">
           <form action="./payment.php" method="post" class="section-2--shopping--form fullWidth">
            <h3 class="sumarry lcondense">Summary</h3>
            <div class="items--box">
                <div class="items--amount lcondense fullWidth flexbetween-vh ">
                    <div class="">Items Counts</div>
                    <div class="">x<?=$itemCount;?></div>
                </div>
            </div>
            <div class="items--box">
                <div class="items--amount lcondense fullWidth flexbetween-vh ">
                    <div class="">Subtotal</div>
                    <div class="">$<?=$priceTotal;?></div>
                </div>
                <div class="items--amount lcondense fullWidth flexbetween-vh ">
                    <div class="">Discount</div>
                    <div class="">5% PROMO</div>
                </div>
                <div class="items--amount lcondense fullWidth flexbetween-vh ">
                    <div class="">Shipping</div>
                    <div class="">$45.80</div>
                </div>
                <div class="items--amount lcondense fullWidth flexbetween-vh ">
                    <div class="">Tax</div>
                    <div class="">$10.80</div>
                </div>
            </div>
            <div class="hr"></div>
            <div class="items--box">
                <div class="items--amount lcondense fullWidth flexbetween-vh ">
                    <div class="">Order Total</div>
                    <div class="">$<?=$priceTotal;?></div>
                </div>
            </div>
            <div class="items--box--btn">
                <button type="submit" class="checkout--items">Proceed to checkout</button>
            </div>
            <div class="items--box--btn">
                <button type="button" class="checkout--items--red">Empty Cart</button>
            </div>
            <input type="hidden" class="hidden" value="<?php echo $priceTotal; ?>" name="total_price">
            </form>
        </div>
    </div>
</div>
<style>
    .empty--space{
        width:100vw;
        height:100vh;
        background:rgba(0,0,0,.6);
        position:fixed;
        top:0;
        left:0;
        right:0;
        bottom:0;
        
    }
    
    .empty--space--frame{
        width:450px;
        height:300px;
        background:white;
        padding:20px;
    }
    .empty--space--cancel--btn{
        padding:8px 14px;
        border:0;
        background-color:red;
        color:white;
    }
    .sure--yes--btn{
        background-color:limegreen;
    }
    .text-center{
        text-align:center;
    }
    .empty--space--form{
        margin-top:200px;
    }
</style>
<div class="empty--space flexcenter-vh hidden">
    <div class="empty--space--frame">
        <div class="empty--space--dialog text-center">
            <p class="empty--space--dialog--text condense">Are you sure you want to clear your cart? All items will be deleted.</p>
        </div>
        <div class="empty--space--dialog">
            <form method="post" class="empty--space--form flexbetween-vh" action="">
                <button class="empty--space--cancel--btn hell--no--btn lcondense" name="empty--cancel" type="button">No, Take Me Back</button>
                <button class="empty--space--cancel--btn sure--yes--btn condense" name="empty--cancel--sub" type="submit">Yes, I'm Sure</button>
            </form>
        </div>
    </div>
</div>
<script>
    function disabledBtn(){
        var cartAmountProducts = document.querySelector('.cart--item--products');
        if(cartAmountProducts.querySelector('.cart--item--empty--frame') != null){
            document.querySelector('.checkout--items--red').disabled = true;
            document.querySelector('.checkout--items--red').style.setProperty('background', 'grey', 'important');
            console.log('done');
        }
    }
    disabledBtn();
    document.querySelector('.checkout--items--red').addEventListener('click', disabledBtn, false)
    document.querySelector('.checkout--items--red').addEventListener('click', function(){
        var cartAmountProducts = document.querySelector('.cart--item--products');
        if(cartAmountProducts.querySelector('.cart--item--empty--frame') == null){
            document.querySelector('.empty--space').classList.remove('hidden');
        }
    }, false);
    document.querySelector('.hell--no--btn').addEventListener('click', function(){
        document.querySelector('.empty--space').classList.add('hidden');
    }, false);
</script>