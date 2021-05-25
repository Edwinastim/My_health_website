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
                width: 85%;
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
                .hidden{
                    width:50%;
                }
                .search-input .icon{
                
                position: absolute;
                right: 0px;
                top: 0px;
                height: 55px;
                width: 55px;
                text-align: center;
                line-height: 39px;
                font-size: 20px;
                color: #cc481d;
                cursor: pointer;
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
				<li style="text-alight: right"><a href="Profile.html">Profile</a></li>
				<li style = "text-align: right"> <a href = "request_cancelation.php">Cancel Order</a></li>
				<li style = "text-align: right"> <a href = "contactus.php">Contact</a></li>
		        <li><a href="logout.php">Logout</a></li>
		        <li><div class = "just-maybe">
    		        <form action="prdt.php" method="post" class="p-3">
                        <div class="input-group">
                            <input type="text" name="search" id="search" class="form-control form-control-lg rounded-0 border-info" placeholder="Search..." autocomplete="off" required>
                        <div class="input-group-append">
                            <input type="submit" name="submit" value="Search" class="btn btn-info btn-lg rounded-0">
                        </div>
                        </div>
                    </form>
                    
                    <div class="col-md-5" style="position: relative;margin-top: -31px;margin-left: 0px;">
                        <div class="list-group" id="show-list">
                            <!-- Here autocomplete list will be display -->
                        </div>
                    </div>
                </div>
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
                    text-align: center;
                  }
                  h2 {
                    font-family: Copperplate, Papyrus, fantasy;
                    font-size: 25px;
                    offset: 10;
                    text-align:center;
                  }
                 .divider{
                    width:5px;
                    height:auto;
                    display:inline-block;
                }
                
                 #name1 {
                    width: 40%;
                    padding: 10px 15px;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    box-sizing: border-box;
                    display: block;
                    margin:auto;
                }
                #subject1 {
                    width: 40%;
                    padding: 10px 15px;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    box-sizing: border-box;
                    flex: center;
                    justify-content: center;
                    align-items: center;
                    display: block;
                    margin:auto;
                }
                #email1 {
                    width: 40%;
                    padding: 10px 15px;
                    margin: 8px 0;
                    display: inline-block;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    box-sizing: border-box;
                    display: block;
                    margin:auto;
                }
                #msg1 {
                    width: 40%;
                    padding: 10px 15px;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    box-sizing: border-box;
                    display: block;
                    margin:auto;
                }
                
                #submit1 {
                    width: 40%;
                    background-color: #cc481d;;
                    color: white;
                    padding: 14px 20px;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                    display: block;
                    margin:auto;
                }
                
                .form label{
		            display: inline-block;
	            	text-align: center;
	            }
                
                #submit1:hover {
                    background-color: #872d0f;
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
    <div><br><br>
	<form action="contactus.php" method = "post">
    <h1>Contact Us</h1>
    <h2>Please feel free to Contact Us by sending us an e-mail below! </h2><hr>
    
     <label for="name"></label><br>
     <input type="text" id="name1" name="name" placeholder="Enter name:" required>
     
     <br><br><label for="subject"></label><br>
     <input type="text" id="subject1" name="subject" placeholder="Subject:" required>
     
     <br><br><label for="email"></label><br>
     <input type="email" id="email1" name="email" placeholder="E-mail:" required>
     
     <br><br><label for="msg"></label>
     <br><textarea id="msg1" name ="msg" placeholder ="Insert your message here:" required></textarea>
       
     <br><br><button type ="submit" id="submit1" name= "submit">Send E-Mail</button>

<?php

  if (isset($_POST['submit'])) 
  {
        header("Location: contactus.php?mailsend");
        $name = $_POST['name'];
        $subject = $POST['subject'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];
        
       
        if (filter_var($email, FILTER_VALIDATE_EMAIL) == true) {
        } else {
            
        
        $to="alshalchym2@montclair.edu";
        $headers="From: $email";
        
        
        
        echo mail($to,$subject,$msg,$headers);
        
        mail($email,"Sent Mail","It is a pleasure to provide you with this service");
  }
 }
?>

		
    </form>    
   </div>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="search.js"></script>
</html>