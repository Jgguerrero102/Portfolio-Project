<?php
      $con = mysqli_connect('localhost','root');
      mysqli_select_db($con, 'ecommerce');
      $sql = "SELECT * FROM products WHERE featured=1";
      $featured = $con->query($sql)

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Dino-Bot Toys</title>
<link rel= "stylesheet" href="css/boostrap-reboot.min.css">
<meta charset="UTF-8">
<script src="https://ajax.com.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/boostrap.min.js"></script>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-light">
    <a class="navbar-brand" href="#">Dino-Bot Toys</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Products
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="products-dinosaurs.php">Dinosaurs</a></li>
            <li><a class="dropdown-item" href="products-robots.php">Robots</a></li>
            
        </ul>
        </li>
      </ul>
      </div>
    </div>
  </nav>

  <div class="col-md-2"></div>
  <div class="col-md-8">
  <div class="row">
      <h2 class="text-center">Suggested Products</h2> <br> </br>
      <?php
            while ($product = mysqli_fetch_assoc($featured)):
          
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

</body>
</html>
