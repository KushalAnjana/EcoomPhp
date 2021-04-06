<?php
require('top.php')

?>
    <style>

.register_form {
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

.register_form .register-wrapper {
  max-width: 500px;
  width: 100%;
}

.register_form .logo {
  text-align: center;
}
.register_form .logo img {
  max-width: 200px;
  width: 100%;
  margin: 1em auto 2em;
}

.register_form form {
  background: #000;
  padding: 2em 1em;
  font-family: helvetica, sans-serif;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}
.register_form form label {
  color: #fff;
  margin: 0 3% 0.25em;
  display: block;
  font-family: helvetica, sans-serif;
}
.register_form form input {
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
.register_form form input.password {
  padding-right: 4rem;
}
.register_form form input:focus {
  border: 2px solid #1fd100;
}
.register_form form button {
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
.register_form form button:focus, form button:hover {
  background: #262626;
}

.register_form .hide-show {
  width: 94%;
  margin: -3.62em 3% 0 1.5%;
  position: relative;
  z-index: 5;
  display: none;
}
.register_form .hide-show span {
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
        

                <br>
           
            <div class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-9 col-md-offset-3 col-md-9">
      
             <br>
     

             <div class="register_form">
              <setion class="register-wrapper">
                
                <div class="logo">
                 <a target="_blank" rel="noopener" href="https://unrealnavigation.com">
                 <img src="k.jpg" alt=""></a>
                </div>
                
                <form id="register" method="post" >
                 
                  <label for="username"> Name</label>
                  <input  required name="name" id="name" type="text" autocapitalize="off" autocorrect="off"/>
                  
                  <label for="email">Email</label>
                  <input class="email"  name="email" id="email" type="text" />

                   
                  <label for="mobile">Mobile</label>
                  <input class="mobile" required name="mobile" id="mobile" type="number" />

                  <label for="password">Password</label>
                  <input class="password" required name="password" id="password" type="password" />
                  <div class="hide-show">
                    <span>Show</span>
                  </div>
                  
            <button type="submit" onclick="user_register()">  Sign In</button>
                  <br><br><br>
                  
                 <center> <p class="message"> <a href="login.php  ">Already have an account</a></p></center>
                </form>
                
              </section>
            </div>
            
            </div>




            <script>

                function user_register(){
                    var name = jQuery("#name").val();
                   var email = jQuery("#email").val();
                   var mobile = jQuery("#mobile").val();
                   var password = jQuery("#password").val();
                   var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
               
                      
                  
                  
                   if (name==""){
                       alert("Enter name");
                       
                   } else if(reg.test(email) == false){
                    alert('Invalid Email Address');
                                  return false;
                         }
                    else if(mobile==""){
                   alert("Enter mobile")
                    }else if(password==""){
                   alert("Enter password")
                  }else{
                       jQuery.ajax({
                       url:'register_submit.php',
                       type:'post',
                       data:'name='+name + '&email='+email + '&mobile='+mobile + '&password='+password,
                       success:function(result){
                           alert(result);
                       }
                   });
               }
                }
            </script>