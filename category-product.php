<?php
require('top.php');
$cat_id=mysqli_real_escape_string($con,$_GET['id']);
if($cat_id>0){
       $get_product=get_product($con,'',$cat_id);
}
else{
   ?>
   <script> 
   window.location.href='index.php';
   </script>
   <?php
}
?>
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
            .container{
                width: 600px;
            }
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


/*         filterrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr
 

 .filter-group {
     border-bottom: 1px solid #e4e4e4
 }

 .card {
     position: relative;
     display: -webkit-box;
     display: -ms-flexbox;
     text-align: center;
     display: flex;
     -webkit-box-orient: vertical;
     -webkit-box-direction: normal;
     -ms-flex-direction: column;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word;
     background-color: #fff;
     background-clip: border-box;
     border: 1px solid rgba(0, 0, 0, 0.1);
     border-radius: 0.37rem
 }

 .card-header {
     padding: 0.75rem 1.25rem;
     margin-bottom: 0;
     background-color: #fff;
     border-bottom: 1px solid rgba(0, 0, 0, 0.1)
 }

 .filter-group .card-header {
     border-bottom: 0
 }

 .icon-control {
     margin-top: 6px;
     float: right;
     font-size: 80%
 }

 .list-menu {
     list-style: none;
     margin: 0;
     text-align: center;
     padding-left: 0
 }

 .list-menu a {
     color: #343a40
 }

 a {
     text-decoration: none !important;
     background-color: transparent
 }

 .checkbox-btn {
     position: relative
 }

 .checkbox-btn input {
     position: absolute;
     z-index: -1;
     opacity: 0
 }

 .checkbox-btn input:checked~.btn {
     border-color: #3167eb;
     background-color: #3167eb;
     color: #fff
 }

 .btn-light {
     display: inline-block;
     font-weight: 600;
     color: #343a40;
     text-align: center;
     vertical-align: middle;
     -webkit-user-select: none;
     -moz-user-select: none;
     -ms-user-select: none;
     user-select: none;
     background-color: #eee;
     border: 1px solid #eee;
     padding: 0.45rem 0.85rem;
     font-size: 10px;
     line-height: 1.5;
     border-radius: 0.37rem
 }

 .btn-light:hover {
     background-color: #fff;
     border-color: #989898
 }

 .btn-medium {
     font-size: 12px;
     padding: 10px 22px;
     display: inline-block;
     margin-right: 20px;
     letter-spacing: 2px;
     border: 1px solid #157af6;
     width: 100%
 }

 .highlight-button:hover {
     background-color: #157af6;
     border: 2px solid #157af6;
     color: #fff
 }

 .custom-control {
     position: relative;
     display: block;
     min-height: 1.5rem;
     padding-left: 1.5rem
 }
 h3.h3 {
  text-align: center;
  margin: 1em;
  text-transform: capitalize;
  font-size: 1.7em;
}
*/


/********************* Shopping Demo-3 **********************/
.product-grid3 {
  font-family: Roboto, sans-serif;
  text-align: center;
  position: relative;
  z-index: 1;
}
.product-grid3:before {
  content: "";
  height: 81%;
  width: 100%;
  background: #fff;
  border: 1px solid rgba(0, 0, 0, 0.1);
  opacity: 0;
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  transition: all 0.5s ease 0s;
}
.product-grid3:hover:before {
  opacity: 1;
  height: 100%;
}
.product-grid3 .product-image3 {
  position: relative;
}
.product-grid3 .product-image3 a {
  display: block;
}
.product-grid3 .product-image3 img {
  width: 100%;
  height: auto;
}
.product-grid3 .pic-1 {
  opacity: 1;
  transition: all 0.5s ease-out 0s;
}
.product-grid3:hover .pic-1 {
  opacity: 0;
}
.product-grid3 .pic-2 {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
  transition: all 0.5s ease-out 0s;
}
.product-grid3:hover .pic-2 {
  opacity: 1;
}
.product-grid3 .social {
  width: 120px;
  padding: 0;
  margin: 0 auto;
  list-style: none;
  opacity: 0;
  position: absolute;
  right: 0;
  left: 0;
  bottom: -23px;
  transform: scale(0);
  transition: all 0.3s ease 0s;
}
.product-grid3:hover .social {
  opacity: 1;
  transform: scale(1);
}
.product-grid3:hover .product-discount-label, .product-grid3:hover .product-new-label, .product-grid3:hover .title {
  opacity: 0;
}
.product-grid3 .social li {
  display: inline-block;
}
.product-grid3 .social li a {
  color: #e67e22;
  background: #fff;
  font-size: 18px;
  line-height: 50px;
  width: 50px;
  height: 50px;
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-radius: 50%;
  margin: 0 2px;
  display: block;
  transition: all 0.3s ease 0s;
}
.product-grid3 .social li a:hover {
  background: #e67e22;
  color: #fff;
}
.product-grid3 .product-discount-label, .product-grid3 .product-new-label {
  background-color: #e67e22;
  color: #fff;
  font-size: 17px;
  padding: 2px 10px;
  position: absolute;
  right: 10px;
  top: 10px;
  transition: all 0.3s;
}
.product-grid3 .product-content {
  z-index: -1;
  padding: 15px;
  text-align: left;
}
.product-grid3 .title {
  font-size: 14px;
  text-transform: capitalize;
  margin: 0 0 7px;
  transition: all 0.3s ease 0s;
}
.product-grid3 .title a {
  color: #fffbfb;
}
.product-grid3 .price {
  color: #000;
  font-size: 16px;
  letter-spacing: 1px;
  font-weight: 600;
  margin-right: 2px;
  display: inline-block;
}
.product-grid3 .price span {
  color: #909090;
  font-size: 14px;
  font-weight: 500;
  letter-spacing: 0;
  text-decoration: line-through;
  text-align: left;
  display: inline-block;
  margin-top: -2px;
}
.product-grid3 .rating {
  padding: 0;
  margin: -22px 0 0;
  list-style: none;
  text-align: right;
  display: block;
}
.product-grid3 .rating li {
  color: #ffd200;
  font-size: 13px;
  display: inline-block;
}
.product-grid3 .rating li.disable {
  color: #dcdcdc;
}

@media only screen and (max-width: 1200px) {
  .product-grid3 .rating {
    margin: 0;
  }
  
}
@media (min-width: 1200px){
.container {
    width: 970px;
}}
media (min-width: 768px){
.container {
    width: 550px;
}}
@media only screen and (max-width: 990px) {
  .product-grid3 {
    margin-bottom: 30px;
  }
  .product-grid3 .rating {
    margin: -22px 0 0;
  }
}
@media only screen and (max-width: 359px) {
  .product-grid3 .rating {
    margin: 0;
  }
}
.h3{
    color: white;
    
}
        </style>
   
            <div class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-9 col-md-offset-3 col-md-9">
          
             <br>
            <!--  Filterrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr      
             <div class="container-fluid mt-100">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4">
                        <div class="card">
                            <article class="filter-group">
                                <header class="card-header"> <a href="#" data-toggle="collapse" data-target="#collapse_aside1" data-abc="true" aria-expanded="false" class="collapsed"> <i class="icon-control fa fa-chevron-down"></i>
                                        <h6 class="title">Categories </h6>
                                    </a> </header>
                                <div class="filter-content collapse" id="collapse_aside1" style="">
                                    <div class="card-body">
                                        <ul class="list-menu">
                                            <li><a href="#" data-abc="true">Electronics </a></li>
                                            <li><a href="#" data-abc="true">Watches </a></li>
                                            <li><a href="#" data-abc="true">Laptops </a></li>
                                            <li><a href="#" data-abc="true">Clothes </a></li>
                                            <li><a href="#" data-abc="true">Accessories </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                            <article class="filter-group">
                                <header class="card-header"> <a href="#" data-toggle="collapse" data-target="#collapse_aside2" data-abc="true" aria-expanded="false" class="collapsed"> <i class="icon-control fa fa-chevron-down"></i>
                                        <h6 class="title">Price </h6>
                                    </a> </header>
                                <div class="filter-content collapse" id="collapse_aside2" style="">
                                    <div class="card-body"> <input type="range" class="custom-range" min="0" max="100" name="">
                                        <div class="form-row">
                                            <div class="form-group col-md-6"> <label>Min</label> <input class="form-control" placeholder="$0" type="number"> </div>
                                            <div class="form-group text-right col-md-6"> <label>Max</label> <input class="form-control" placeholder="$1,0000" type="number"> </div>
                                        </div> <a href="#" class="highlight-button btn btn-medium button xs-margin-bottom-five" data-abc="true">Apply Now</a>
                                    </div>
                                </div>
                            </article>
                            <article class="filter-group">
                                <header class="card-header"> <a href="#" data-toggle="collapse" data-target="#collapse_aside3" data-abc="true" aria-expanded="false" class="collapsed"> <i class="icon-control fa fa-chevron-down"></i>
                                        <h6 class="title">Size </h6>
                                    </a> </header>
                                <div class="filter-content collapse" id="collapse_aside3" style="">
                                    <div class="card-body"> <label class="checkbox-btn"> <input type="checkbox"> <span class="btn btn-light"> XS </span> </label> <label class="checkbox-btn"> <input type="checkbox"> <span class="btn btn-light"> SM </span> </label> <label class="checkbox-btn"> <input type="checkbox"> <span class="btn btn-light"> LG </span> </label> <label class="checkbox-btn"> <input type="checkbox"> <span class="btn btn-light"> XXL </span> </label> <label class="checkbox-btn"> <input type="checkbox"> <span class="btn btn-light"> XXXL </span> </label> </div>
                                </div>
                            </article>
                            <article class="filter-group">
                                <header class="card-header"> <a href="#" data-toggle="collapse" data-target="#collapse_aside4" data-abc="true" class="collapsed" aria-expanded="false"> <i class="icon-control fa fa-chevron-down"></i>
                                        <h6 class="title">Rating </h6>
                                    </a> </header>
                                <div class="filter-content collapse" id="collapse_aside4" style="">
                                    <div class="card-body"> <label class="custom-control"> <input type="checkbox" checked="" class="custom-control-input">
                                            <div class="custom-control-label">Better </div>
                                        </label> <label class="custom-control"> <input type="checkbox" checked="" class="custom-control-input">
                                            <div class="custom-control-label">Best </div>
                                        </label> <label class="custom-control"> <input type="checkbox" checked="" class="custom-control-input">
                                            <div class="custom-control-label">Good</div>
                                        </label> <label class="custom-control"> <input type="checkbox" checked="" class="custom-control-input">
                                            <div class="custom-control-label">Not good</div>
                                        </label> </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            -->  <div class="container">
            <h3 class="h3"> </h3>
               
               <div class="row">
            <?php if(count($get_product)>0){
                          ?>
          
                <?php
            
             
             foreach($get_product as $list) {
              ?> 
     
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="product-grid3">
                            <div class="product-image3">
                            <a href="product.php?id=<?php echo $list['id']?>">
                                    <img class="pic-1" src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>">
                                    <img class="pic-2" src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>">
                                </a>
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                <span class="product-new-label">New</span>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#"><?php echo $list['name']?></a></h3>
                                <div class="price">
                                <?php echo $list['mrp']?>
                                    <span><?php echo $list['price']?></span>
                                </div>
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star disable"></li>
                                    <li class="fa fa-star disable"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php }
             ?>
               
                  
         
            
            <?php }
            else{
                echo '<h1 class="h3">Data not found</h1>';
            }
            ?>
   </div>

</div>
            
                </div>



        