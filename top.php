<?php
require('connection.inc.php');
require('function.inc.php');
require('add_to_cart.inc.php');
$obj = new add_to_cart();
$totalProduct=$obj->totalProduct()
?>




<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Hamara Karigar</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
		<!-- google fonts -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="main.css">
    </head>
    <style>
        .fa-stack[data-count]:after {
  position: absolute;
  right: 0%;
  top: 0%;
  content: attr(data-count);
  font-size: 40%;
  padding: 0.6em;
  border-radius: 999px;
  line-height: 0.75em;
  color: white;
  color: #DF0000;
  text-align: center;
  min-width: 2em;
  font-weight: bold;
  background: white;
  border-style: solid;
}

.fa-circle {
  color: #DF0000;
}

.red-cart {
  color: #DF0000;
  background: white;
}
    </style>
    <body>
        

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
             <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                       <span class="sr-only"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                     </button>
              <a class="navbar-brand" href="index.php"><img src="k.jpg" alt="" width="150" height="40"></a>
             </div>
         
             <div id="navbar" class="navbar-collapse collapse">
              <form class="navbar-form navbar-right">
               <div class="form-group">
                <input type="text" class="form-control" placeholder="&#xF002;">
               </div>

              
               <?php if(isset($_SESSION['USER_LOGIN']))
               {

                    echo '<button class="nav-button"><a href="logout.php">Logout</a></button> ';
               }
               else{
                 echo '<button class="nav-button"><a href="login.php">Login</a></button>';  
               } ?>
              
              
              </form>
              <ul class="nav navbar-nav navbar text-center">
               <li class="link"><a href="category.php"><i class="fa fa-list-alt fa-fw" aria-hidden="true"></i>&nbsp; Catageories</a></li>
               <li class="link"><a href=""><i class="fa fa-search fa-fw" aria-hidden="true"></i>&nbsp; Search</a></li>
               <li class="link"><a href="login.php"><i class="fa fa-sign-in fa-fw" aria-hidden="true"></i>&nbsp; Login</a></li>
               <li class="link"><a href="login.php"><i class="fa fa-user fa-fw" aria-hidden="true"></i>&nbsp; My Account</a></li>
               <li class="link"><a href="cart.php"><i class="fa fa-shopping-cart fa-fw" aria-hidden="true"></i>&nbsp; My Cart </a></li>
             
               <li class="link"><a href="checkout.php"><i class="fa fa-check fa-fw" aria-hidden="true"></i>&nbsp; Checkout</a></li>
               <li class="link"><a href="about.php"><i class="fa fa-info fa-fw" aria-hidden="true"></i>&nbsp; About Us</a></li>
               <li class="link"><a href="faq.php"><i class="fa fa-question-circle" aria-hidden="true"></i>&nbsp;  &nbsp;FAQs</a></li>
               <li class="link"><a href="terms.php"><i class="fa fa-gavel fa-fw" aria-hidden="true"></i>&nbsp; Terms & Conditions</a></li>
               <li class="link"><a href=""><i class="fa fa-lock fa-fw" aria-hidden="true"></i>&nbsp; Privacy Policy</a></li>
               <li class="link"><a href="contact.php"><i class="fa fa-address-book fa-fw" aria-hidden="true"></i>&nbsp; Contact Us</a></li>
               
              </ul>
             </div>
            </div>
           </nav>
           
           <div class="container-fluid">
            <div class="row">
             <div class="col-sm-3 col-md-3 sidebar">
              <ul class="nav nav-sidebar">
               <h1 class="main">MAIN</h1>
               <li class="link"><a href="index.php"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Home<span class="sr-only"></span></a></li>
               <li class="link"><a href="category.php"><i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp; Catageories</a></li>
               <li class="link"><a href="#"><i class="fa fa-search fa-fw" aria-hidden="true"></i>&nbsp; Search</a></li>
              
              </ul>
              <ul class="nav nav-sidebar">
               <h1 class="your-music">Your Details</h1>
               <?php if(isset($_SESSION['USER_LOGIN']))
               {

                    echo '<li class="link"><a href="my_order.php"><i class="fa fa-user fa-fw" aria-hidden="true"></i>&nbsp;My Order</a></li>';
               }
               else{
                 echo '  <li class="link"><a href="login.php"><i class="fa fa-user fa-fw" aria-hidden="true"></i>&nbsp; My Account</a></li>';  
               } ?>
               <li class="link"><a href="cart.php"><i class="fa fa-shopping-cart fa-fw" aria-hidden="true"></i>&nbsp; My Cart  <span class="cartt" >
                        <?php echo  $totalProduct ?>  
                 
                
                 </span> </a> </li>
            
               <li class="link"><a href="checkout.php"><i class="fa fa-check fa-fw" aria-hidden="true"></i>&nbsp; Checkout</a></li>
              
              </ul>
              <ul class="nav nav-sidebar">
               <h1 class="playlists">Karigar</h1>
               <li class="link"><a href="about.php"><i class="fa fa-info fa-fw" aria-hidden="true"></i>&nbsp; About Us</a></li>
               <li class="link"><a href="faq.php"><i class="fa fa-question-circle" aria-hidden="true"></i>&nbsp;  &nbsp;FAQs</a></li>
               <li class="link"><a href="terms.php"><i class="fa fa-gavel fa-fw" aria-hidden="true"></i>&nbsp; Terms & Conditions</a></li>
               <li class="link"><a href=""><i class="fa fa-lock fa-fw" aria-hidden="true"></i>&nbsp; Privacy Policy</a></li>
               <li class="link"><a href="contact.php"><i class="fa fa-address-book fa-fw" aria-hidden="true"></i>&nbsp; Contact Us</a></li>
               
              </ul>
             </div>
                <br>

                
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
    </html>