<?php
require('top.php');
?>
<style>

h2 {
  color: #fff;
  font-weight: 300;
  text-align: center;
  margin: 50px 0 30px;
}

.dropdown {
  display: block;
  width: 100%;
  max-width: 500px;
  margin: auto;
}
.dropdown + .dropdown {
  margin-top: 15px;
}

.dropdown__top {
  display: flex;
  justify-content: space-between;
  align-items: center;
  color: white;
  padding: 15px;
  box-sizing: border-box;
  font: 600 14px/22px sans-serif;
  background-color: #109638;
  cursor: pointer;
  transition: background 0.3s ease;
  will-change: background;
}
.dropdown__top:hover {
  background: #0b0d0e;
}
.dropdown__top::after {
  content: "";
  font: 20px "FontAwesome";
  transition: transform 0.5s ease;
  will-change: transform;
}

.open .dropdown__top::after {
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}

.dropdown__btm {
  
  color: rgb(231, 212, 212);
  font-size: 15px;
  line-height: 1.4;
  box-sizing: border-box;
  padding: 15px;
  display: none;
}
        </style>
   
            <div class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-9 col-md-offset-3 col-md-9">
      
             <br>
             <h2>Simple FAQ/Dropdown Tabs</h2>

             <div class="dropdown">
               <div class="dropdown__top">Dropdown Title</div>
               <div class="dropdown__btm">
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur facilisis vulputate nunc. Morbi in scelerisque quam.
               </div>
             </div>
             
             <div class="dropdown">
               <div class="dropdown__top">Dropdown Title</div>
               <div class="dropdown__btm">
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur facilisis vulputate nunc. Morbi in scelerisque quam.
               </div>
             </div>
             
             <div class="dropdown">
                <div class="dropdown__top">Dropdown Title</div>
                <div class="dropdown__btm">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur facilisis vulputate nunc. Morbi in scelerisque quam.
                </div>
              </div>   <div class="dropdown">
                <div class="dropdown__top">Dropdown Title</div>
                <div class="dropdown__btm">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur facilisis vulputate nunc. Morbi in scelerisque quam.
                </div>
              </div>   <div class="dropdown">
                <div class="dropdown__top">Dropdown Title</div>
                <div class="dropdown__btm">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur facilisis vulputate nunc. Morbi in scelerisque quam.
                </div>
              </div>
             <div class="dropdown">
               <div class="dropdown__top">Dropdown Title</div>
               <div class="dropdown__btm">
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur facilisis vulputate nunc. Morbi in scelerisque quam.
               </div>
             </div>
              </div>
            
            </div>





        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script >
            jQuery('document').ready(function($){
          $('.dropdown__top').click(function(){
            if ($(this).parent(".dropdown").hasClass("open")) {
              $(this).parent(".dropdown").removeClass("open");
              $(this).siblings(".dropdown__btm").slideUp(500);
            } else {
              $(".dropdown").removeClass("open");
              $(".dropdown .dropdown__btm").slideUp(500);
              $(this).parent(".dropdown").addClass("open");
              $(this).siblings(".dropdown__btm").slideDown(500);
            }
          })
        });
        </script>
    </body>
    </html>