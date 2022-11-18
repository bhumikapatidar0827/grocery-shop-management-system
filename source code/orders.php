<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>orders</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="placed-orders">

   <h1 class="title">placed orders</h1>

   <div class="box-container">

   <?php
      $select_orders = $conn->prepare("SELECT * FROM `orders` WHERE user_id = ?");
      $select_orders->execute([$user_id]);
      if($select_orders->rowCount() > 0){
         while($fetch_orders = $select_orders->fetch(PDO::FETCH_ASSOC)){ 
   ?>
   <div class="box">
      <p> placed on : <span><?= $fetch_orders['placed_on']; ?></span> </p>
      <p> name : <span><?= $fetch_orders['name']; ?></span> </p>
      <p> number : <span><?= $fetch_orders['number']; ?></span> </p>
      <p> email : <span><?= $fetch_orders['email']; ?></span> </p>
      <p> address : <span><?= $fetch_orders['address']; ?></span> </p>
      <p> payment method : <span><?= $fetch_orders['method']; ?></span> </p>
      <p> your orders : <span><?= $fetch_orders['total_products']; ?></span> </p>
      <p> total price : <span>$<?= $fetch_orders['total_price']; ?>/-</span> </p>
      <p> payment status : <span style="color:<?php if($fetch_orders['payment_status'] == 'pending'){ echo 'red'; }else{ echo 'green'; }; ?>"><?= $fetch_orders['payment_status']; ?></span> </p>
   </div>
   <?php
      }
   }else{
      echo '<!-- products section starts  -->

      <section class="products" id="products">
      
          <h1 class="heading"> our <span>products</span> </h1>
      
          <div class="swiper product-slider">
      
              <div class="swiper-wrapper">
      
                  <div class="swiper-slide box">
                      <img src="project images/orange.png" alt="">
                      <h3>fresh orange</h3>
                      <div class="price"> $4.99/- - 10.99/- </div>
                      <div class="stars">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                      </div>
                      <a href="cart.php" class="btn">add to cart</a>
                  </div>
      
                  <div class="swiper-slide box">
                      <img src="project images/carrot.png" alt="">
                      <h3>carrot</h3>
                      <div class="price"> $4.99/- - 10.99/- </div>
                      <div class="stars">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                      </div>
                      <a href="cart.php" class="btn">add to cart</a>
                  </div>
      
                  <div class="swiper-slide box">
                      <img src="project images/chicken.png" alt="">
                      <h3>fresh meat</h3>
                      <div class="price"> $4.99/- - 10.99/- </div>
                      <div class="stars">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                      </div>
                      <a href="cart.php" class="btn">add to cart</a>
                  </div>
      
                  <div class="swiper-slide box">
                      <img src="project images/cabbage.png" alt="">
                      <h3>fresh cabbage</h3>
                      <div class="price"> $4.99/- - 10.99/- </div>
                      <div class="stars">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                      </div>
                      <a href="cart.php" class="btn">add to cart</a>
                  </div>
      
              </div>
      
          </div>
      
          <div class="swiper product-slider">
      
              <div class="swiper-wrapper">
      
                  <div class="swiper-slide box">
                      <img src="project images/tomato.png" alt="">
                      <h3>fresh tomato</h3>
                      <div class="price"> $4.99/- - 10.99/- </div>
                      <div class="stars">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                      </div>
                      <a href="cart.php" class="btn">add to cart</a>
                  </div>
      
                  <div class="swiper-slide box">
                      <img src="project images/broccoli.png" alt="">
                      <h3>fresh brocoli</h3>
                      <div class="price"> $4.99/- - 10.99/- </div>
                      <div class="stars">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                      </div>
                      <a href="cart.php" class="btn">add to cart</a>
                  </div>
      
                  <div class="swiper-slide box">
                      <img src="project images/lichi.png" alt="">
                      <h3>fresh lichi</h3>
                      <div class="price"> $4.99/- - 10.99/- </div>
                      <div class="stars">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                      </div>
                      <a href="cart.php" class="btn">add to cart</a>
                  </div>
      
                  <div class="swiper-slide box">
                      <img src="project images/watermelon.png" alt="">
                      <h3>watermelon</h3>
                      <div class="price"> $4.99/- - 10.99/- </div>
                      <div class="stars">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                      </div>
                      <a href="cart.php" class="btn">add to cart</a>
                  </div>
      
              </div>
      
          </div>
      
      
      </section>
      
      <!-- products section ends -->';
   }
   ?>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>