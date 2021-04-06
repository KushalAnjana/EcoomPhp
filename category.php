<?php
require('top.php');


$cat_res=mysqli_query($con,"select * from categories where status=1 order by categories asc");
$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res)){
  $cat_arr[]=$row;
}

?>

<style>
  .text-center {
  text-align: center;
}

.color-white {
  color: #fff;
}





.box-container {
  align-items: center;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  padding: 35px 15px;
  width: 100%;
}

@media screen and (min-width:1380px) {
  .box-container {
    flex-direction: row
  }
}

.box-item {
  position: relative;
  -webkit-backface-visibility: hidden;
  width: 325px;
  margin-bottom: 35px;
  max-width: 100%;
}

.flip-box {
  -ms-transform-style: preserve-3d;
  transform-style: preserve-3d;
  -webkit-transform-style: preserve-3d;
  perspective: 1000px;
  -webkit-perspective: 1000px;
}

.flip-box-front,
.flip-box-back {
  background-size: cover;
  background-position: center;
  border-radius: 8px;
  min-height: 325px;
  -ms-transition: transform 0.7s cubic-bezier(.4,.2,.2,1);
  transition: transform 0.7s cubic-bezier(.4,.2,.2,1);
  -webkit-transition: transform 0.7s cubic-bezier(.4,.2,.2,1);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-box-front {
  -ms-transform: rotateY(0deg);
  -webkit-transform: rotateY(0deg);
  transform: rotateY(0deg);
  -webkit-transform-style: preserve-3d;
  -ms-transform-style: preserve-3d;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-front {
  -ms-transform: rotateY(-180deg);
  -webkit-transform: rotateY(-180deg);
  transform: rotateY(-180deg);
  -webkit-transform-style: preserve-3d;
  -ms-transform-style: preserve-3d;
  transform-style: preserve-3d;
}

.flip-box-back {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  
  -ms-transform: rotateY(180deg);
  -webkit-transform: rotateY(180deg);
  transform: rotateY(180deg);
  -webkit-transform-style: preserve-3d;
  -ms-transform-style: preserve-3d;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-back {
  -ms-transform: rotateY(0deg);
  -webkit-transform: rotateY(0deg);
  transform: rotateY(0deg);
  -webkit-transform-style: preserve-3d;
  -ms-transform-style: preserve-3d;
  transform-style: preserve-3d;
}

.flip-box .inner {
  position: absolute;
  left: 0;
  width: 100%;
  padding: 60px;
  outline: 1px solid transparent;
  -webkit-perspective: inherit;
  perspective: inherit;
  z-index: 2;
  
  transform: translateY(-50%) translateZ(60px) scale(.94);
  -webkit-transform: translateY(-50%) translateZ(60px) scale(.94);
  -ms-transform: translateY(-50%) translateZ(60px) scale(.94);
  top: 50%;
}

.flip-box-header {
  font-size: 34px;
}

.flip-box p {
  font-size: 20px;
  line-height: 1.5em;
}

.flip-box-img {
  margin-top: 25px;
}

.flip-box-button {
  background-color: transparent;
  border: 2px solid #fff;
  border-radius: 2px;
  color: #fff;
  cursor: pointer;
  font-size: 20px;
  font-weight: bold;
  margin-top: 25px;
  padding: 15px 20px;
  text-transform: uppercase;
}




.body {
  font-size: 15px;
}

.card-holder {
  margin: 2em 0;
}

.card {
  font-family: -apple-system, BlinkMacSystemFont, 'Open Sans', sans-serif;
  font-size: 22px;
  font-weight: 600;
  height: 170px;
  width: 170px;
  padding: 0.5em 1em;
  border-radius: 0.25em;
  display: table-cell;
  vertical-align: middle;
  letter-spacing: -2px;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}
.card:hover{ -webkit-transform: scale(1.05, 1.07);
            transition: 0.5s ease-out;
            cursor: pointer !important;
           
}

.card .subtle {
  color: #000;
  font-size: 0.5em;
  font-weight: 400;
  letter-spacing: -1px; 
}

.card i {
  font-size: 3em;
}

.bg-gold {
    color: #fff;
    
    background: -webkit-linear-gradient(70deg, #dab12d 90%, #0b8b3c 0%);
  background: -o-linear-gradient(70deg, #89c717 90%, #0fa32f 0%);
  background: -moz-linear-gradient(70deg, #c7d63b 90%, #0b8d57 0%);
  background: linear-gradient(70deg, #8ecc2b 90%, #079446 0%);
}

.bg-news {
    color: #fff;
  background: -webkit-linear-gradient(70deg, #ff6464 0%, #5ac8fa 40%);
  background: -o-linear-gradient(70deg, #ff6464 0%, #5ac8fa 40%);
  background: -moz-linear-gradient(70deg, #ff6464 0%, #5ac8fa 40%);
  background: linear-gradient(70deg, #ff6464 0%, #5ac8fa 40%);
}



.bg-aurora {
    color: #fff;
    background: -webkit-linear-gradient(110deg, #72da11 40%, rgba(0, 0, 0, 0) 30%), -webkit-radial-gradient(farthest-corner at 0% 0%,#cc9600 70%, #72da11 70%);
    background: -o-linear-gradient(110deg, #72da11 40%, rgba(0, 0, 0, 0) 30%), -o-radial-gradient(farthest-corner at 0% 0%, #cc960070%, #72da11 70%);
    background: -moz-linear-gradient(110deg, #72da11 40%, rgba(0, 0, 0, 0) 30%), -moz-radial-gradient(farthest-corner at 0% 0%, #cc9600 70%, #72da11 70%);
    background: linear-gradient(110deg, #72da11 40%, rgba(0, 0, 0, 0) 30%), radial-gradient(farthest-corner at 0% 0%, #cc9600 70%, #72da11 70%);
}

.bg-germany {
    color: #fff;
    background: -webkit-linear-gradient(110deg, #a60af3 40%, rgba(0, 0, 0, 0) 30%), -webkit-radial-gradient(farthest-corner at 0% 0%, #7a00cc 70%, #c03fff 70%);
    background: -o-linear-gradient(110deg, #a60af3 40%, rgba(0, 0, 0, 0) 30%), -o-radial-gradient(farthest-corner at 0% 0%, #7a00cc 70%, #c03fff 70%);
    background: -moz-linear-gradient(110deg, #a60af3 40%, rgba(0, 0, 0, 0) 30%), -moz-radial-gradient(farthest-corner at 0% 0%, #7a00cc 70%, #c03fff 70%);
    background: linear-gradient(110deg, #a60af3 40%, rgba(0, 0, 0, 0) 30%), radial-gradient(farthest-corner at 0% 0%, #7a00cc 70%, #c03fff 70%);
}

.bg-purple {
    color: #fff;
    background: -webkit-linear-gradient(110deg, #a60af3 40%, rgba(0, 0, 0, 0) 30%), -webkit-radial-gradient(farthest-corner at 0% 0%, #7a00cc 70%, #c03fff 70%);
    background: -o-linear-gradient(110deg, #a60af3 40%, rgba(0, 0, 0, 0) 30%), -o-radial-gradient(farthest-corner at 0% 0%, #7a00cc 70%, #c03fff 70%);
    background: -moz-linear-gradient(110deg, #a60af3 40%, rgba(0, 0, 0, 0) 30%), -moz-radial-gradient(farthest-corner at 0% 0%, #7a00cc 70%, #c03fff 70%);
    background: linear-gradient(110deg, #a60af3 40%, rgba(0, 0, 0, 0) 30%), radial-gradient(farthest-corner at 0% 0%, #7a00cc 70%, #c03fff 70%);
}

.bg-spring {
    background: -webkit-linear-gradient(70deg, #fff810  30%, rgba(0,0,0,0) 30%), -webkit-linear-gradient(30deg, #63e89e 60%, #ff7ee3 60%);
    background: -o-linear-gradient(70deg, #fff810  30%, rgba(0,0,0,0) 30%), -o-linear-gradient(30deg, #63e89e 60%, #ff7ee3 60%);
    background: -moz-linear-gradient(70deg, #fff810  30%, rgba(0,0,0,0) 30%), -moz-linear-gradient(30deg, #63e89e 60%, #ff7ee3 60%);
    background: linear-gradient(70deg, #fff810  30%, rgba(0,0,0,0) 30%), linear-gradient(30deg, #63e89e 60%, #ff7ee3 60%);
}
    
</style>
  <div class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-9 col-md-offset-3 col-md-9">
             <H1 style="color: blanchedalmond;">Custom Printing</H1>
             <br>

             <?php
             foreach($cat_arr as $list)
             {
             ?>
             <a href="category-product.php?id= <?php echo $list['id']?>">
             <div class=" col-xs-6  col-sm-2">
              
               <div class="card-holder">
                 <div class="card bg-aurora ">
                      <?php echo $list['categories']?>
                  </div>
               </div>
           
           </div>
           </a>
           <?php
             }
             ?>

  </div>


          