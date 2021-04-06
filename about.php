<?php
require('top.php');
?>
 <style>
 .clear {
	 clear: both;
}
 .container1 {
	 background: #fff;
	 max-width: 920px;
	 height: 480px;
	 margin: auto;
	 transform: translateY(15%);
	 box-shadow: 0px 0px 6px 0px #222 73;
}
 .container1 .circles {
	 position: absolute;
	 width: 100%;
	 height: 100%;
	 overflow: hidden;
}
 .container1 .circles:before {
	 content: '';
	 position: absolute;
	 left: -6%;
	 top: -8%;
	 width: 200px;
	 height: 200px;
	 background: #fddb33;
	 border-radius: 50%;
}
 .container1 .circles:after {
	 content: '';
	 position: absolute;
	 right: -11%;
	 bottom: -15%;
	 width: 200px;
	 height: 200px;
	 background: #fddb33;
	 border-radius: 50%;
}
 .container1 .details-container1 {
	 position: relative;
	 display: flex;
}
 .container1 .details-container1 .avatar {
	 margin: 10px auto;
	 position: relative;
	 float: left;
	 padding: 20px;
	 animation: 1s ease-out 0s 1 slideInFromLeft;
}
 .container1 .details-container1 .avatar img {
	 max-width: 240px;
	 margin-top: -70px;
	 border: 10px solid #fff;
	 box-shadow: 0px 0px 6px 0px #222 73;
}
 .container1 .details-container1 .about {
	 float: right;
	 padding: 20px;
	 margin-top: 50px;
	 animation: 1s ease-out 0s 1 slideUpFromBottom;
}
 .container1 .details-container1 .about .name p {
	 margin: 0;
	 color: #222;
	 font-size: 1.1em;
	 font-weight: bold;
}
 .container1 .details-container1 .about .name h1 {
	 color: #fddb33;
	 font-weight: bold;
	 margin: 0;
	 font-size: 3em;
}
 .container1 .details-container1 .about .about-content p {
	 line-height: 1.6em;
}
 .container1 .details-container1 .about .about-content button {
	 border: none;
	 color: #222;
	 padding: 10px;
	 background: #fddb33;
	 cursor: pointer;
	 font-weight: bold;
	 width: 250px;
	 height: 40px;
	 font-family: 'Nunito', sans-serif;
	 box-shadow: 1px 1px 10px 0px #222 2b;
	 transition: 0.2s all;
}
 .container1 .details-container1 .about .about-content button:hover {
	 box-shadow: 1px 1px 1px 0px #222 2b;
}
 .container1 .details-container1 .about .about-content button:focus, .container .details-container .about .about-content button:active {
	 outline: 0;
	 box-shadow: 1px 1px 10px 0px #222 80;
}
 .container1 .skills-container1 {
	
	 justify-content: space-between;
	 padding: 20px;
	 position: relative;
	 z-index: 1;
	 animation: 1s ease-in 0s 1 fadeIn;
}
 .container1 .skills-container1 button {
	 flex: 1;
	 padding: 10px;
	 margin: 5px;
	 border: none;
	 color: #222;
	 padding: 10px;
	 background: #fddb33;
	 cursor: pointer;
	 font-weight: bold;
	 width: 250px;
	 height: 40px;
	 font-family: 'Nunito', sans-serif;
	 box-shadow: 1px 1px 10px 0px #222 2b;
	 transition: 0.2s all;
}
 .container1 .skills-container1 button:hover {
	 box-shadow: 1px 1px 1px 0px #222 2b;
}
 .container1 .skills-container1 button:focus, .container .skills-container1 button:active {
	 outline: 0;
	 box-shadow: 1px 1px 10px 0px #222 80;
}
 @media only screen and (max-width: 766px) {
	 .container1 {
		 height: auto;
	}
	 .container1 .details-container1 {
		 flex-direction: column;
	}
	 .container1 .details-container1 .avatar img {
		 width: 300px;
	}
	 .container1 .details-container1 .about {
		 margin-top: 10px;
	}
}
 @keyframes slideInFromLeft {
	 0% {
		 transform: translateX(-100%);
		 opacity: 0;
	}
	 100% {
		 transform: translateX(0);
		 opacity: 1;
	}
}
 @keyframes slideUpFromBottom {
	 0% {
		 transform: translateY(70%);
		 opacity: 0;
	}
	 100% {
		 transform: translateX(0);
		 opacity: 1;
	}
}
 @keyframes fadeIn {
	 0% {
		 opacity: 0;
	}
	 100% {
		 opacity: 1;
	}
}
.row {
     margin-right: 0px; 
     margin-left: 0px; 
}
 
        </style>
    
                <br>
           
            <div class=" col-xs-12 col-sm-offset-3 col-sm-9 col-md-offset-3 col-md-9">
             <H1 style="color: blanchedalmond;">Featured Products</H1>
             <br>
             
             <div class="pages about-us section-padding">
                <div class="container1">
                    <div class="circles"></div>
                    <div class="details-container1">
                        <div class="avatar">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3jplkJtcZdAY6W0Vf-fV4FuXPoUKkf8XH3g&usqp=CAU" class="img-fluid" alt="">
                        </div>
                        <div class="about">
                            <div class="name">
                                <p>
                                    Hello There!
                                </p>
                                <h4>
                                    AN MULTIPURPOSE & CREATIVE ASSEMBLY OF
                                    CUSTOME STORE
                                </h4>
                            </div>
                            <div class="about-content">
                                <p>
                                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat recusandae temporibus a accusantium? Eveniet, distinctio? Expedita maxime iure ducimus nihil, minima quibusdam debitis temporibus blanditiis quo modi assumenda perferendis atque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt architecto ut accusamus maxime laborum vel et consectetur, eveniet nobis, iure aperiam. Fuga illo impedit hic possimus tempora asperiores. Dicta, esse!
                                </p>
                            <!--    <button>Download Resume</button>-->
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="skills-container1">
                        <button>
                            Quality
                        </button>
                        <button>
                            Designer Community
                        </button>
                        <button>
                       Our own Market
                        </button>
                    </div>
                </div> 
            </div>
         
              </div>
            </div>
            </div>



           



        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
    </html>