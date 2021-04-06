<?php 
require('top.inc.php');
$categories_id= '';
$name= '';
$mrp= '';
$price= '';
$qty= '';
$image= '';
$short_desc='';
$description= '';
$meta_title='';
$meta_desc= '';
$meta_keyword= '';
$msg='';
$image_required='required';

if(isset($_GET['id']) && $_GET['id']!= ''){
    $image_required='';
    $id =get_safe_value($con,$_GET['id']);
    $res =    mysqli_query($con,"select * from product where  id='$id'");
    $check=mysqli_num_rows($res);
    if($check>0){
    $row= mysqli_fetch_assoc($res);
    $categories_id = $row['categories_id'];
    $name = $row['name'];
    $mrp = $row['mrp'];
    $price = $row['price'];
    $qty = $row['qty'];
    $short_desc = $row['short_desc'];
    $description = $row['description'];
    $meta_title = $row['meta_title'];
    $meta_desc = $row['meta_desc'];
    $meta_keyword = $row['meta_keyword'];
   
}
else{
    header('location:product.php');
    die();
}
}

if(isset($_POST['submit'])){
    $categories_id =get_safe_value($con,$_POST['categories_id']);
    $name =get_safe_value($con,$_POST['name']);
    $mrp =get_safe_value($con,$_POST['mrp']);
    $price =get_safe_value($con,$_POST['price']);
    $qty =get_safe_value($con,$_POST['qty']);
    
    $description =get_safe_value($con,$_POST['description']);
    $short_desc =get_safe_value($con,$_POST['short_desc']);
    $meta_title =get_safe_value($con,$_POST['meta_title']);
    $meta_desc =get_safe_value($con,$_POST['meta_desc']);
    $meta_keyword =get_safe_value($con,$_POST['meta_keyword']);
    $res = mysqli_query($con,"select * from product where  name='$name'");
    $check=mysqli_num_rows($res);
    if($check>0){
        if(isset($_GET['id']) && $_GET['id']!= ''){

        $getData=mysqli_fetch_assoc($res);
        if($id==$getData['id']){

        }
        else{
            $msg="Product already exist";
        }


        }
        else{
            $msg="Product already exist";
        }


     

    }

    if  ( $_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg' ){
          $msg="Please select only png,jpg,jpeg image formate";
    }



    if($msg=='')
    {
          if(isset($_GET['id']) && $_GET['id']!= ''){
              if($_FILES['image']['name']!=''){
                $image=rand(11111111,99999999).'_'.$_FILES['image']['name'];
                move_uploaded_file($_FILES['image']['tmp_name'],'../media/product/'.$image);
                $update_sql="update product set categories_id='$categories_id',name='$name',mrp='$mrp',price='$price'
                ,qty='$qty',description='$description',short_desc='$short_desc',
                meta_title='$meta_title',meta_desc='$meta_desc',meta_keyword='$meta_keyword',image='$image' where id = '$id'";
              }
              else{
                $update_sql="update product set categories_id='$categories_id',name='$name',mrp='$mrp',price='$price'
                ,qty='$qty',description='$description',short_desc='$short_desc',meta_title='$meta_title',
                meta_desc='$meta_desc',meta_keyword='$meta_keyword',image='$image' where id = '$id'";
              }
             mysqli_query($con,$update_sql);
}

        else{
            $image=rand(11111111,99999999).'_'.$_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'],'../media/product/'.$image);
           mysqli_query($con,"insert into 
           product(categories_id,name,mrp,price,qty,description,short_desc,meta_title,meta_desc,meta_keyword,status,image)
            values('$categories_id','$name','$mrp','$price','$qty','$description','$short_desc','$meta_title','$meta_desc','$meta_keyword',1,'$image') ");
}
     
    header('location:product.php');
     die();
}
}
?>
 <div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Product</strong><small> Form</small></div>
                       <form method="post" enctype="multipart/form-data">
                        <div class="card-body card-block">
                           <div class="form-group">
                               <label for="categories" class=" form-control-label">Categories</label>
                               <select class=" form-control" name="categories_id">
                                   <option>Select Categories</option>

                                     <?php
                                     $res= mysqli_query($con,"select id,categories from categories order  by categories asc "); 
                                       while($row=mysqli_fetch_assoc($res))

                                       {
                                           if($row['id']==$categories_id){
                                            echo "<option selected  value=".$row['id'].">".$row['categories']."</option>";
                                           }
                                           else{
                                            echo "<option value=".$row['id'].">".$row['categories']."</option>"; 
                                           }
                                     
                                       }


                                       ?>

                               </select>
                            </div>
                           


                           <div class="form-group">
                               <label for="categories" class=" form-control-label">Product Name</label>
                           <input type="text" name="name" placeholder="Enter your product name" class="form-control " require value="<?php echo $name ?>"></div>


                           <div class="form-group">
                               <label for="categories" class=" form-control-label">MRP</label>
                           <input type="text" name="mrp" placeholder="Enter your product mrp" class="form-control " require value="<?php echo $mrp ?>"></div>


                           <div class="form-group">
                               <label for="categories" class=" form-control-label">Product Price</label>
                           <input type="text" name="price" placeholder="Enter your product price" class="form-control " require value="<?php echo $price ?>"></div>


                           <div class="form-group">
                               <label for="categories" class=" form-control-label">Product Quantity</label>
                           <input type="text" name="qty" placeholder="Enter your product quantity" class="form-control " require value="<?php echo $qty ?>"></div>


                           <div class="form-group">
                               <label for="categories" class=" form-control-label">Product Image</label>
                           <input type="file" name="image"  class="form-control " <?php echo $image_required ?> ></div>


                           <div class="form-group">
                               <label for="categories" class=" form-control-label">Product Short Description</label>
                           <textarea name="short_desc" placeholder="Enter your product short description" class="form-control " require> <?php echo $short_desc ?></textarea></div>


                           <div class="form-group">
                               <label for="categories" class=" form-control-label">Product  Description</label>
                           <textarea name="description" placeholder="Enter your product description" class="form-control " require> <?php echo $description ?></textarea></div>

                           <div class="form-group">
                               <label for="categories" class=" form-control-label">Product Meta Title</label>
                           <textarea name="meta_title" placeholder="Enter your product meta title " class="form-control " > <?php echo $meta_title ?></textarea></div>

                           <div class="form-group">
                               <label for="categories" class=" form-control-label">Product Meta Description</label>
                           <textarea name="meta_desc" placeholder="Enter your product meta description" class="form-control " > <?php echo $meta_desc ?></textarea></div>

                           <div class="form-group">
                               <label for="categories" class=" form-control-label">Product Meta Keyword</label>
                           <textarea name="meta_keyword" placeholder="Enter your product short description" class="form-control " require> <?php echo $meta_keyword ?></textarea></div>

                           <button id="payment-button" name ="submit" type="submit" class="btn btn-lg btn-info btn-block">
                           <span id="payment-button-amount" name ="submit">Submit</span>
                           </button>
                           <div class="field_error">  <?php echo $msg;?></div> 
                        </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
            <?php 
require('footer.inc.php');
?>