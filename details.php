
<?php
      $con = mysqli_connect('localhost','root');
      mysqli_select_db($con, 'ecommerce');
      $sql= "SELECT + FROM products WHERE featured=1";
      $featured = $con->query($sql)

 ?>





<div class="col-md-2">
  <div class="col-md-8">
  <div class="row">
      <h2 class="text-center">Product Details</h2>
      <?php
            while ($product = mysqli_fetch_assoc($featured));

       ?>
  </div>
  <div class="col-md-5">
      <h4><?=$product['title'];?></h4>
      <img src="<?=$product['image'];?>" alt="<?=$product['title'];?>" />
      <p class="1price"> <br>Rs <?=$product['price'];?> </br></p>
      <p class="desc">Rs <?=$product['description'];?> </p>
      <p class="bname">Rs <?=$product['brandname'];?> </p>
  </div>
  <?php endwhile: ?>
  </div>
</div>
