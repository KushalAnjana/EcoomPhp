<?php

require('top.php');


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
              <center><h1 style="color: blanchedalmond;">My Cart</h1></center>
              <br><br>
              <div id="container">
                
              
                <table>
                  <!--<tr style="text-align:center;">
                    <td>Image</td>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Amount</td>
                    <td>Subtotal</td>
                    <td> </td>
                  </tr>-->
                  <?php

foreach($_SESSION['cart'] as $key=>$val){

      $productArr=get_product($con,'','',$key);
      $pname=$productArr[0]['name'];
      $price=$productArr[0]['price'];
          $image=$productArr[0]['image'];
       $mrp=$productArr[0]['mrp'];
             $qty=$val['qty'];

          ?>
                  <tr class="p">
                    <td class="image"><img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$image?>" /></td>
                    <td class="name"><?php echo $pname ?></td>
                    <td class="price"><?php echo $price ?></td>
                    <td class="amount"><input type="number" id="<?php echo $key ?>qty" value="<?php echo $qty ?>"  />
                  <a href="javascript:void(0)" onclick="manage_cart('<?php echo $key?>','update')">update</a></td>
                    <td class="pricetotal"><?php echo $qty * $price ?></td>
                    <td class="premove"><a href="javascript:void(0)" onclick="manage_cart('<?php echo $key?>','remove')"> &times </a></td>
                  </tr>
                  
                  <?php  }
                ?>
                  
                </table>
<hr>
                <a href="<?php echo SITE_PATH ?>"> <div id="checkout" style="float: left;">Continue Shopping<span> &rarr;</span></div></a>
                <a href="<?php echo SITE_PATH ?>checkout.php"> <div id="checkout" style="float:right ;">Checkout<span> &rarr;</span></div></a>
                <br>
                <br><br>
               
                </div>
           
             
            </div>

            <script>

function manage_cart(pid,type){
  if(type=='update'){
          var qty= jQuery("#"+pid +"qty").val();
        }
        else{
          var qty= jQuery("#qty").val();
        }


  jQuery.ajax({
    url:'manage_cart.php',
    type:'post',
    data:'pid='+pid +'&qty='+qty +'&type='+type,
    success:function(result){
      if(type=='update' || type=='remove'){
        window.location.href = 'cart.php';
      }
      jQuery('.cartt').html(result)
    }
  })
}
</script>


        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
    </html>