<?php
require('top.php')
?>
<style>
    @import url("https://fonts.googleapis.com/css?family=Montserrat:400,400i,700");
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



        .container {
	max-width:400px;
	width:100%;
	margin:0 auto;
	position:relative;
}

#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea, #contact button[type="submit"] { font:400 12px/16px "Open Sans", Helvetica, Arial, sans-serif; }

#contact {
	background:black;
	padding:25px;
	margin:50px 0;
}

#contact h3 {
	color: #F96;
	display: block;
	font-size: 30px;
	font-weight: 400;
}

#contact h4 {
	margin:5px 0 15px;
	display:block;
	font-size:13px;
}

fieldset {
	border: medium none !important;
	margin: 0 0 10px;
	min-width: 100%;
	padding: 0;
	width: 100%;
}

#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea {
	width:100%;
	border:1px solid #CCC;
	background:#DCDCDC;
	margin:0 0 5px;
	padding:10px;
}

#contact input[type="text"]:hover, #contact input[type="email"]:hover, #contact input[type="tel"]:hover, #contact input[type="url"]:hover, #contact textarea:hover {
	-webkit-transition:border-color 0.3s ease-in-out;
	-moz-transition:border-color 0.3s ease-in-out;
	transition:border-color 0.3s ease-in-out;
	border:1px solid #AAA;
}

#contact textarea {
	height:100px;
	max-width:100%;
  resize:none;
}

#contact button[type="submit"] {
	cursor:pointer;
	width:100%;
	border:none;
	background:gold;
	color:black;
	margin:0 0 5px;
	padding:10px;
	font-size:15px;
}

#contact button[type="submit"]:hover {
	background:#09C;
	-webkit-transition:background 0.3s ease-in-out;
	-moz-transition:background 0.3s ease-in-out;
	transition:background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active { box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.5); }

#contact input:focus, #contact textarea:focus {
	outline:0;
	border:1px solid #999;
}
::-webkit-input-placeholder {
 color:#888;
}
:-moz-placeholder {
 color:#888;
}
::-moz-placeholder {
 color:#888;
}
:-ms-input-placeholder {
 color:#888;
}

</style>
<br>
           
           <div class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-9 col-md-offset-3 col-md-9">
     
            <br>
            <div class="container">  
               <form id="contact">
                 <h3>Quick Contact</h3>
                 <h4>Contact us today, and get reply with in 24 hours!</h4>
                 <fieldset>
                   <input placeholder="Your name" id="name" type="text">
                 </fieldset>
                 <fieldset>
                   <input placeholder="Your Email Address" id="email" type="email">
                 </fieldset>
                 <fieldset>
                   <input placeholder="Your Phone Number" id="mobile" type="tel" >
                 </fieldset>
                 <fieldset>
                   <textarea placeholder="Type your Message Here...." id="message"></textarea>
                 </fieldset>
                 <fieldset>
                   <button  type="submit" onclick="send_message()" >Submit</button>
                 </fieldset>
               </form>
              
               
             </div>
             </div>
           
           </div>

           <script>
               function send_message(){
                   var name = jQuery("#name").val();
                   var email = jQuery("#email").val();
                   var mobile = jQuery("#mobile").val();
                   var message = jQuery("#message").val();
                  
                   if (name==""){
                       alert("Enter name");
                       
                   } else if(email==""){
                   alert("Enter email");
                         }
                    else if(mobile==""){
                   alert("Enter mobile")
                    }else if(message==""){
                   alert("Enter message")
                  }else{
                       jQuery.ajax({
                       url:'send_message.php',
                       type:'post',
                       data:'name='+name + '&email='+email + '&mobile='+mobile + '&message='+message,
                       success:function(result){
                           alert(result);
                       }
                   });
               }
            }
            </script>


