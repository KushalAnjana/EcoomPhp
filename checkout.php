<?php require('top.php');

if(!(isset($_SESSION["USER_LOGIN"]) &&  $_SESSION['USER_LOGIN'] = 'yes' )) {
  ?>
  <script>
    window.location.href='login.php'
    </script>
 <?php

}
?>
<?php
if(!isset($_SESSION['cart']) ||  count($_SESSION['cart'])==0) {
  ?>
  <script>
    window.location.href='index.php'
    </script>
 <?php

}

$cart_total=0;



if(isset($_POST['submit'])){
  $address=get_safe_value($con,$_POST['address']);
  $city=get_safe_value($con,$_POST['city']);
  $pincode=get_safe_value($con,$_POST['pincode']);
  $payment_type='cod';
  $user_id=$_SESSION['USER_ID'];
  foreach($_SESSION['cart'] as $key=>$val){
    $productArr=get_product($con,'','',$key);
    $price=$productArr[0]['price'];
    $qty=$val['qty'];
    $cart_total= $cart_total + ($price * $qty);
}
  $total_price=$cart_total;
  $payment_status='pending';
  if($payment_type=='cod'){
    $payment_status='success';
  }
  $order_status='pending';
  $added_on=date('Y-m-d h:i:s');
 
  mysqli_query($con,"insert into `order`(user_id,address,city,pincode,payment_type,payment_status,order_status,added_on,total_price) values('$user_id'
  ,'$address','$city','$pincode','$payment_type','$payment_status','$order_status','$added_on','$total_price'
  )");

  
  
  $order_id=mysqli_insert_id($con);

  foreach($_SESSION['cart'] as $key=>$val){

    $productArr=get_product($con,'','',$key);
    
    $price=$productArr[0]['price'];
   
    $qty=$val['qty'];

    mysqli_query($con,"insert into `order_detail`(order_id,product_id,qty,price ) values('$order_id'
,'$key','$qty','$price'
)");

}
unset($_SESSION['cart'])
?>
<script>
  window.location.href='thank_you.php'
  </script>
<?php




}


?>
<style>
        
.check .row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;

}

.check .col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.check .col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.check .col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.check .col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.check .container {
    color: blanchedalmond;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

.check input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

.check label {
  margin-bottom: 10px;
  display: block;
}

.check .icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.check .btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.check .btn:hover {
  background-color: #45a049;
}

.check .check a {
  color: #acb8c2;
}

.check hr {
  border: 1px solid lightgrey;
}

.check span.price {
  float: right;
  color: rgb(241, 241, 241);
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
    .check .row {
    flex-direction: column-reverse;
  }
  .check  .col-25 {
    margin-bottom: 20px;
  }
  
}
@media (min-width: 1200px){
    .check .container {
   width:870px;
}}
@media (min-width: 768px){
.container {
    width: 550px;
}}


        </style>
    
                <br>
           
            <div class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-9 col-md-offset-3 col-md-9">
           
             <br>
             <div class="check">
             <div class="row">
                <div class="col-75">
                  <div class="container">
                    <form method="post">
                    
                      <div class="row">
                        <div class="col-50">
                          <h3>Billing Address</h3>
                         
                          <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                          <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                          <label for="city"><i class="fa fa-institution"></i> City</label>
                          <input type="text" id="city" name="city" placeholder="New York">
              
                          <div class="row">
                            <div class="col-50">
                              <label for="state">State</label>
                              <input type="text" id="state" name="state" placeholder="NY">
                            </div>
                            <div class="col-50">
                              <label for="zip">Zip</label>
                              <input type="text" id="zip" name="pincode" placeholder="10001">
                            </div>
                          </div>
                        </div>
              
                       
                        
                      </div>
                      <label>
                        <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                      </label>
                     <a href=""><input type="submit" name="submit" value="Continue to checkout" class="btn"></a> 
                    </form>
                  </div>
                </div>
                <div class="col-25">
                  <div class="container">

                    <h4>Cart <span class="price" ><i class="fa fa-shopping-cart"></i> <b></b></span></h4>
              
              <?php
                        $cart_total=0;
                        foreach($_SESSION['cart'] as $key=>$val){
                        
                              $productArr=get_product($con,'','',$key);
                              $pname=$productArr[0]['name'];
                              $price=$productArr[0]['price'];
                                  $image=$productArr[0]['image'];
                               $mrp=$productArr[0]['mrp'];
                                     $qty=$val['qty'];
                        $cart_total= $cart_total + ($price * $qty);
              ?>

                
                  
                    <p><a href="#"><?php echo $pname ?> </a> <span class="price"><?php echo $price *  $qty ?></span></p>
                   
                 

                <?php } ?>
                <hr>
                    <p>Total <span class="price" ><b><?php echo $cart_total ?></b></span></p>
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