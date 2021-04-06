<?php

require('connection.inc.php');
require('function.inc.php');
require('add_to_cart.inc.php');
$obj = new add_to_cart();
$totalProduct=$obj->totalProduct();
$msg ='';
if(isset($_POST['submit'])){
    $email=get_safe_value($con,$_POST['email']);
    $password=get_safe_value($con,$_POST['password']);
    $sql ="select * from users where email = '$email' and password ='$password'";
    
    $res = mysqli_query($con,$sql); 
    $row=mysqli_fetch_assoc($res);
    $count = mysqli_num_rows($res);

    if($count>0){
        $_SESSION['USER_LOGIN'] = 'yes';   
        $_SESSION['USER_EMAIL'] = $email;
        $_SESSION['USER_ID'] =$row['id'] ;
       header('location:index.php');
       die();

     }else{
         $msg ="Please Enter Correct Login Details";
     }
}

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
    </head>
    <style>@import url("https://fonts.googleapis.com/css?family=Montserrat:400,400i,700");
        @import url("https://fonts.googleapis.com/css?family=Raleway:400,400i,700");
        
        body {
            padding-top: 50px;
            font-family: 'Montserrat';
            background: linear-gradient(
                to right,
                rgba(76, 76, 76, 1) 0%,
                rgba(102, 102, 102, 1) 0%,
                rgba(43, 43, 43, 1) 0%,
                rgba(33, 33, 33, 1) 46%,
                rgba(33, 33, 33, 1) 59%,
                rgba(17, 17, 17, 1) 98%,
                rgba(17, 17, 17, 1) 100%
            );
        }
        
        .sub-header {
            font-family: "Montserrat";
            color: #eee;
            padding-bottom: 10px;
            border-bottom: 1px solid #999;
            margin-bottom: 20px;
        }
        
        .page-header {
            border-bottom: 1px solid #999;
            margin-top: -15px;
        }
        
        .link {
            background: #333;
            box-shadow: 1px 1px 1px 1px #121212;
        }
        
        .link a:hover {
            border-left: 3px solid #2e7d32 !important;
            background-color: #222 !important;
        }
        
        .link a:focus {
            background: #222 !important;
        }
        
        a {
            font-weight: 600;
            margin-top: 4px;
        }
        
        .navbar-fixed-top {
            background: rgb(0, 0, 0);
            border: 0 !important;
            box-shadow: 1px 1px 1px 1px #111;
        }
        
        .navbar-toggle {
            border: 0;
            margin: 12px;
        }
        
        .navbar-toggle:hover {
            background: transparent !important;
        }
        
        .navbar-toggle:focus {
            background: transparent !important;
        }
        
        .navbar-brand {
            font-size: 40px;
            padding: 5px;
            color: #388e3c !important;
        }
        
        ::-webkit-input-placeholder {
            font-family: FontAwesome;
            padding: 3px;
            font-size: 16px;
            text-align: left;
            color: #121212 !important;
        }
        
        ::-webkit-scrollbar-track {
            background-color: #333;
            border-radius: 10px;
            padding-bottom: 50px !important;
        }
        
        ::-webkit-scrollbar {
            width: 5px;
            background: #111;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #2e7d32;
            border-radius: 10px;
        }
        
        .sidebar {
            display: none;
            z-index: 99;
        }
        
        .form-control {
            opacity: 0.7;
            height: 40px;
      
            border-radius: 25px;
        }
        
        .albums {
            color: #eee !important;
            margin-top: 30px !important;
            font-family: "Montserrat";
            opacity: 0.9;
        }
        
        .table-inverse {
            cursor: pointer;
        }
        
        .main {
            text-align: center;
            color: #999;
            font-size: 1.4em;
            margin-bottom: 10px;
            margin-top: -15px;
        }
        
        .thumbnail {
            border-radius: 0;
            border: 0px !important;
            width: 250px;
            height: 350px;
            box-shadow: none !important;
            background-color: transparent;
        }
           
        .thumbnail img{
            border-radius: 20px;
            border: 0px !important;
            width: 250px;
            height: 250px;
            box-shadow: none !important;
            background-color: transparent;
        }
        
          
        .thumbnail1 {
            border-radius: 0;
            border: 0px !important;
            width: 150px;
            height: 250px;
            box-shadow: none !important;
            background-color: transparent;
        }
           
        .thumbnail1 img{
            border-radius: 20px;
            border: 0px !important;
            width: 150px;
            height: 150px;
            box-shadow: none !important;
            background-color: transparent;
        }
        
        .your-music {
            font-size: 1.2em !important;
            margin-top: -5px;
            text-align: center;
            color: #999;
        }
        
        .playlists {
            font-size: 1.2em;
            margin-top: -5px;
            text-align: center;
            color: #999;
        }
        
        @media (min-width: 768px) {
            .sidebar {
                position: fixed;
                top: 54px;
                bottom: 0;
                left: 0;
                display: block;
                padding: 30px;
                overflow-x: hidden;
                overflow-y: scroll;
                background: #202020;
            }
        }
        
        .nav-sidebar {
            margin-right: -21px;
            margin-bottom: 20px;
            margin-left: -20px;
        }
        
        .nav-sidebar > li > a {
            padding-right: 20px;
            padding-left: 20px;
            color: #999 !important;
        }
        
        .nav-sidebar > .active > a,
        .nav-sidebar > .active > a:hover,
        .nav-sidebar > .active > a:focus {
            color: #333;
        }
        
        .nav-button{
            width: 150px;
            color: black;
            margin-left: 12px;
            font-weight: 800;
            height: 40px;
            border-radius: 25px;
        }
        table {
            color: #d1d1d1;
        }
        
        .img-responsive:hover {
            -webkit-transform: scale(1.05, 1.07);
            transition: 0.5s ease-out;
            cursor: pointer !important;
            box-shadow: 7px 7px 7px 1px #111;
        }
        
        .jumbotron {
            background: url("https://scontent.fplu3-1.fna.fbcdn.net/v/t1.0-9/17952605_10154570367027496_4340775452750517092_n.jpg?oh=6bc1a1f70aef5ae2a8e3f9fddabb7848&oe=5A728E9F")
                no-repeat center center;
            background-size: cover;
            height: 250px;
            margin-top: 10px;
            border-radius: 0 !important;
            opacity: 0.7;
        }
        
        @media (min-width: 768px) {
            .main {
                padding-right: 40px;
                padding-left: 20px;
            }
            .navbar li {
                display: none !important;
            }
        }
        
        @media (max-width: 767px) {
            .navbar-form,
            .form-control {
                display: none !important;
            }
        
            .albums {
                margin-top: 60px !important;
            }
        
            #navbar {
                background: rgba(10, 10, 10, 0.5);
                padding: 20px;
            }
        }




.login_form {
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-box-flex: center;
  -moz-box-flex: center;
  -webkit-flex: center;
  -ms-flex: center;
  flex: center;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  justify-content: center;
  -webkit-box-pack: center;
  -moz-box-pack: center;
  -ms-flex-pack: center;
  -webkit-align-items: center;
  align-items: center;
}

.login_form .login-wrapper {
  max-width: 500px;
  width: 100%;
}

.login_form .logo {
  text-align: center;
}
.login_form .logo img {
  max-width: 200px;
  width: 100%;
  margin: 1em auto 2em;
}

.login_form form {
  background: #000;
  padding: 2em 1em;
  font-family: helvetica, sans-serif;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}
.login_form form label {
  color: #fff;
  margin: 0 3% 0.25em;
  display: block;
  font-family: helvetica, sans-serif;
}
.login_form form input {
  width: 94%;
  padding: 0.5em 0.25em;
  margin: 0 3% 1em;
  font-size: 1.2em;
  border: 2px solid #000;
  outline: none;
  -webkit-transition: all 0.25s;
  -moz-transition: all 0.25s;
  -ms-transition: all 0.25s;
  -o-transition: all 0.25s;
  transition: all 0.25s;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}
.login_form form input.password {
  padding-right: 4rem;
}
.login_form form input:focus {
  border: 2px solid #1fd100;
}
.login_form form button {
  width: 94%;
  margin: 2em 3% 0;
  border: none;
  background: #1fd100;
  padding: 1em 0;
  font-size: 1.25em;
  clear: both;
  color: #000;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  outline: none;
  -webkit-transition: all 0.25s;
  -moz-transition: all 0.25s;
  -ms-transition: all 0.25s;
  -o-transition: all 0.25s;
  transition: all 0.25s;
  cursor: pointer;
}
.login_form form button:focus, form button:hover {
  background: #262626;
}

.login_form .hide-show {
  width: 94%;
  margin: -3.62em 3% 0 1.5%;
  position: relative;
  z-index: 5;
  display: none;
}
.login_form .hide-show span {
  background: #1fd100;
  font-size: 1em;
  padding: 0.5em;
  float: right;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  cursor: pointer;
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

                    echo '<button class="nav-button"><a href="logout.php">Logout</a></button> <button class="nav-button"><a href="my_order.php">My Order</a></button>';
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
           
            <div class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-9 col-md-offset-3 col-md-9">
      
             <br>
     

             <div class="login_form">
              <setion class="login-wrapper">
                
                <div class="logo">
                 <a target="_blank" rel="noopener" href="https://unrealnavigation.com">
                 <img src="k.jpg" alt=""></a>
                </div>
                
                <form method="post">
                 
                  <label for="username">Email</label>
                
                  <input type="email" name="email" class="form-control" placeholder="Email" required>
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Password" required>
                  <div class="hide-show">
                    <span>Show</span>
                  </div>
                  <button type="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                  <br><br><br>
                  
                 <center> <p class="message">Not registered? <a href="signup.php">Create an account</a></p></center>
                </form>
                 <div class="field_error" style="color: white;">  <?php echo $msg;?></div>
              </section>
            </div>
            
            </div>





        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      
    </body>
    </html>
