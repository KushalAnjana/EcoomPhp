<?php 
require('top.php');
$order_id=get_safe_value($con,$_GET['id']);


?>
 <style>
#expand {
  cursor: pointer;
}

#coolstuff {
  display: none;
}

#container {
  width: 100%;
  max-width: 800px;
  margin: auto;
  text-align: center;
}

ul {
  text-align: left;
}

hr {
  border-color: white;
  border-bottom: 0;
}

table {
  width: 100%;
  margin: auto;
  text-align: center;
}

tr {
  padding: 0;
  margin: 0;
  border: 0;
}

td {
  no-border-top: 1px solid white;
  padding: 5px 2px;
}

.image {
  width: 150px;
}

.image > img {
  width: 100%;
  background: white;
  border-radius: 2px;
  box-shadow: 0 2px 7px rgba(0,0,0,0.4);
  a-border: 1px solid black;
}

.amount {
  width: 50px;
}

.amount > input {
  font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
  color: white;
  font-size: 16px;
  background: transparent;
  border: none;
  width: 100%;
  text-align: center;
  outline: none;
}

.remove {
  width: 30px;
}

.remove > div {
  border-radius: 10px;
  width: 16px;
  height: 16px;
  line-height: 16px;
  padding: 2px;
  transition: background .3s, border .3s, transform .3s;
  cursor: pointer;
  text-align: center;
  margin: auto;
  border: 1px solid white;
}

.remove.hey > div {
  background: red;
  border-color: red;
  transform: scale(1.3);
}

.remove:hover > div {
  background: red;
  border-color: red;
}

.big {
  font-size: 2em;
  font-weight: bold;
}

#checkout {
  padding: 10px;
  font-size: 16px;
  color: white;
  display: inline-block;
  margin: 2px;
  border-radius: 3px;
  text-align: center;
  transition: background 0.2s;
  background: #0a8f6c;
  cursor: pointer;
}

#checkout > span {
  width: 0;
  display: inline-block;
  overflow: hidden;
  transition: width .3s;
  text-align: right;
}

#checkout:hover > span {
  width: 20px;
}

#footer {
  opacity: 0.6;
  border-top: 1px solid white;
  padding-top: 10px;
  text-align: center;
  margin-top: 15px;
}

#footer a {
  color: white;
}
        </style>
    <body>
        

       
            <div class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-9 col-md-offset-3 col-md-9">
              <center><h1 style="color: blanchedalmond;">My order detail</h1></center>
              <br><br>
              <div id="container">
                
              
                <table>
                  <tr style="text-align:center;">
                    <td>Product Name</td>
                    <td>Product Image</td>
                    <td>Oty</td>
                    <td>Price</td>
                    <td> Total Price</td>
                   
                  </tr>
                  
                  <?php
                  $uid=$_SESSION['USER_ID'];
                   $res=mysqli_query($con,"select distinct(order_detail.id),  order_detail.*,product.name,product.image from order_detail,product,`order` where order_detail.order_id='$order_id' and
                   `order`.user_id='$uid' and  product.id = order_detail.product_id ");
                   $total_price=0;
                   while($row=mysqli_fetch_assoc($res)){
                        $total_price=$total_price+( $row['qty']*$row['price'] );
                  
          ?>
                  <tr class="p">
                 
                    <td class="name"><?php echo $row['name'] ?></td>
                    
                    <td class="image"><img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['image']?>" alt="backpack"></td>
                    <td class="name"><?php echo $row['qty'] ?></td>
                    <td class="name"><?php echo $row['price'] ?></td>
                    <td class="name"><?php echo $row['qty']*$row['price'] ?></td>
                   
                  </tr>
                  
                  <?php  }
                ?>
                
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>Subtotal:</td>
                    <td class="totalpricesubtotal"><?php echo $total_price?></td>
                    <td> </td>
                  </tr>
                  
                </table>
<hr>
           
                <br><br>
               
                </div>
           
             
            </div>

       


        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
    </html>