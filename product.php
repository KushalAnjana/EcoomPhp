<?php
require('top.php');
$product_id=mysqli_real_escape_string($con,$_GET['id']);
$get_product=get_product($con,'','',$product_id);

?>

<style>
    
  
.product-card {
  width: 800px;
  display: flex;
  height: auto;
  background: white;
  box-shadow: 0 0 8px #000;
  border-radius: 20px;
  margin: auto;
}

.product-card .left-column {
  width: 50%;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
}
.product-card .left-column .share ,
.product-card .left-column .heart {
  position: absolute;
  top: 8px;
  font-size: 1.5rem;
  cursor: pointer;
  color: #FFF;
  text-shadow: 0 0 2px #000;
  transition: 0.3s ease;
}
.product-card .left-column .share {
  left: 10px;
}
.product-card .left-column .heart {
  right: 10px;
}
.product-card .left-column .share:hover {
  color: rgb(145,145,145);
}
.product-card .left-column .heart:hover {
  color: #C50000;
}
.product-card .left-column img {
  width: 100%;
  transition: 0.3s ease;
}
.product-card .right-column {
  width: 50%;
  position: relative;
  overflow: hidden;
  padding: 2rem 1rem ;
  display: flex;
  flex-direction: column;
}
.product-card .right-column .logo {
  width: 50px;
  position: absolute;
  top: 10px;
  right: 10px;
}
.product-card .right-column .product-name {
  text-transform: uppercase;
  font-weight: bold;
}
.product-card .right-column .product-name h1 {
  font-size: 2vw;
}
.product-card .right-column .price {
  font-size: 2rem;
  font-weight: bold;
}
.product-card .right-column .colors {
  display: flex;
}
.product-card .right-column .colors span:not(:last-child) {
  width: 20px;
  height: 20px;
  display: inline-block;
  border-radius: 50%;
  cursor: pointer;
  border: solid 2px #cacaca;
  transition: 0.3s ease;
  margin: 10px 5px;
}
.product-card .right-column .colors .darkblue {
  background: rgb(5,38,87);
}
.product-card .right-column .colors .darkblue:hover {
  border: solid 2px rgb(5,38,87);
}
.product-card .right-column .colors .green {
  background: rgb(0,214,132);
}
.product-card .right-column .colors .green:hover {
  border: solid 2px rgb(0,214,132);
}
.product-card .right-column .colors .purple {
  background: purple;
}
.product-card .right-column .colors .purple:hover {
  border: solid 2px purple;
}
.product-card .right-column .colors .black {
  background: #000;
}
.product-card .right-column .colors .black:hover {
  border: solid 2px #000;
}
.product-card .right-column .colors .quantity {
  font-size: 1.3rem;
  font-weight: bold;
  align-self: center;
  margin-left: 100px;
}
.product-card .right-column .colors .quantity input {
  border: none;
  outline: none;
  font-size: 1.3rem;
  font-weight: bold;
}
.product-card .right-column .btn {
  font-size: 1.5rem;
  cursor: pointer;
  background: linear-gradient(to right , #FF1605,#FF0095);
  color: #fff;
  border: none;
  outline: none;
  padding: 1.5vw;
  border-radius: 30px;
}
.product-card .right-column .btn:hover {
  box-shadow: 0 0 6px #000;
}

@media screen and (max-width:830px) {
  .product-card {
    width: 400px;
    height:auto;
    flex-direction: column;
  }
  .product-card .left-column {
    width: 100%;
  }
  .product-card .left-column img {
    width: 60%;
  }
  .product-card .right-column {
    width: 100%;
  }
  .product-card .right-column .product-name h1 ,
  .product-card .right-column .btn {
    font-size: 1.2rem;
  }
  .product-card .right-column .colors .quantity {
    margin-left: 50px;
  }
}
@media screen and (max-width:400px) {
  .product-card {
    width: 300px;
    height: auto;
  }
  .product-card .right-column .colors .quantity {
    margin-left: 20px;
  }
}

@media screen and (max-width:320px) {
  .product-card {
    width: 280px;
    height: 530px;
  }
}


</style>
<div class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-9 col-md-offset-3 col-md-9">

             <br>
               
    <div class="product-card">
        <div class="left-column">
            <span class="share"><i class="fas fa-share-alt"></i></span>
            <span class="heart"><i class="fas fa-heart"></i></span>
            <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$get_product['0']['image']?>" alt="backpack">
        </div>
        <div class="right-column">
            <img src="https://i.postimg.cc/sg9zWbbr/logo.png" alt="logo" class="logo">
            <div class="product-name">
                <h1><?php echo $get_product['0']['name']?></h1>
                <p></p>
            </div>
            <div class="price">Rs.<?php echo $get_product['0']['price']?></div>
            <div class="description">
                <p>
                <?php echo $get_product['0']['short_desc']?>
                  <ul> 
                     Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus saepe dicta itaque debitis cupiditate? Sequi reprehenderit, inventore eum debitis et, voluptatem recusandae dolore totam fugit similique, in at id magni?
              </ul> 

              <?php echo $get_product['0']['description']?> 
                    
                </p>
            </div>
            
           
        
                
                <div class="quantity" >
                 <p>   QTY:
                    <select id="qty">
                      <option >1</option>
                      <option >2</option>
                      <option >3</option>
                      <option >4</option>
                      <option >5</option>
                      <option >6</option>
                      <option >7</option>
                      <option >8</option>
                      <option >9</option>
                      <option >10</option>
                    </select>
                 </p>
                </div>

                
               
      
              <a class="btn" href="javascript:void(0)" onclick="manage_cart('<?php echo $get_product['0']['id']?>','add')">
      
         Add to Cart
        
    </a>
          
        </div>
    </div>
                </div>
               
                <script>

function manage_cart(pid,type){
  var qty= jQuery("#qty").val();
  jQuery.ajax({
    url:'manage_cart.php',
    type:'post',
    data:'pid='+pid +'&qty='+qty +'&type='+type,
    success:function(result){
      jQuery('.cartt').html(result)
    }
  })
}
</script>