<?php
require('top.php')
?>


            <div class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-9 col-md-offset-3 col-md-9">
             <H1 style="color: blanchedalmond;">Featured Products</H1>
             <br>
                
             <?php
              $get_product=get_product($con,6);
             foreach($get_product as $list) {
              ?> 
             <div class="col-xs-12 col-sm-4 col-md-3">
             <a href="product.php?id=<?php echo $list['id']?>">
              <div class="thumbnail">
              <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" class="img-responsive" alt="">
              <h4 style="color: blanchedalmond;
              text-align: center;"><?php echo $list['name']?></h4></div>
             </div>
             <?php }
             ?>
            </div>
           </div>
           
          <!--
            <div class="container-fluid">
                <div class="row">
                 <div class="col-sm-offset-3 col-sm-9 col-md-9 col-">
                  <h2 class="sub-header">ACCESSORIES FOR YOU</h2>
                  <div class="col-sm-2">
                    
                    <div class="thumbnail1">
                     <img src="https://images.bewakoof.com/uploads/grid/app/192x192-Accessories-Mobile-covers-1602150294.jpg" class="img-responsive" alt="">
                    
                  <h4 style="color: blanchedalmond;
                  text-align: center;">Mobile Covers</h4></div>
                   </div>
                
                   <div class="col-xs-12 col-sm-4 col-md-2">
                    <div class="thumbnail1">
                     <img src="https://images.bewakoof.com/uploads/grid/app/192x192-Accessories-Bag-1602150294.jpg" class="img-responsive" alt="">
                     <h4 style="color: blanchedalmond;
                     text-align: center;">Bags</h4>
                  </div>
                   </div>
                   <div class="col-xs-12 col-sm-4 col-md-2">
                      <div class="thumbnail1">
                       <img src="data:image/jpeg;base64,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" class="img-responsive" alt="">
                       <h4 style="color: blanchedalmond;
                       text-align: center;">Notebooks</h4>
                      </div>
                     </div>
                     <div class="col-xs-12 col-sm-4 col-md-2">
                      <div class="thumbnail1">
                       <img src="https://images.bewakoof.com/uploads/grid/app/192x192-Accessories-Sliders-1602150295.jpg" class="img-responsive" alt="">
                       <h4 style="color: blanchedalmond;
                       text-align: center;">Sliders</h4>
                      </div>
                     
                  </div>

                  <div class="col-xs-12 col-sm-4 col-md-2">
                    <div class="thumbnail1">
                     <img src="https://images.bewakoof.com/uploads/grid/app/192x192-Accessories-Slippers-1602150296.jpg" class="img-responsive" alt="">
                     <h4 style="color: blanchedalmond;
                     text-align: center;">Flip flops</h4>
                    </div>
                   
                </div>
                  </div>
                </div>
                </div>
             -->