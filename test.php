<?php
      $con = mysqli_connect('localhost','root');
      mysqli_select_db($con, 'ecommerce');
      $sql= "SELECT + FROM products WHERE featured=1";
      $featured = $con->query($sql)

 ?>

<div class="col-md-2">
  <div class="col-md-8">
  <div class="row">
      <h2 class="text-center">Suggested Products</h2> <br> </br>
      <?php
            while ($product = mysqli_fetch_assoc($featured));
          
       ?>
 
  <div class="col-md-5">
      <h4><?=$product['title'];?></h4>
      <img src="<?=$product['image'];?>" alt="<?=$product['title'];?>" />
      <p class="1price">Rs <?=$product[`price`];?> </p>
      <a href="details.php">
        <button class="btn btn-success" type="button" data-toggle="modal" data-target="#details-1" >More</button>
      </a>
  </div>
  <?php endwhile; ?>
  </div>
</div>