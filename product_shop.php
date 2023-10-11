<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="css/style3.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="./css/nav.css" />
    <!-- <link rel="stylesheet" href="./css/style.scss" /> -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400;500&family=Poppins:wght@300;400;500;600;700&
    display=swap" rel="stylesheet">
</head>
<body>
<?php
      require 'upload/db_conn.php';
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>
<div class="navbar">
  <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="shop.php"><i class="fa fa-fw fa-paw"></i> Shop</a>
  <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a>
  <a href="login.html"><i class="fa fa-fw fa-user"></i> Login</a>
  <a href="cart.php"><i class="fa fa-fw fa-shopping-cart"></i> Cart <span><?php echo $row_count; ?></span></a>
</div>
  <!-- <header class="header">
    <a href="#" class="logo"> <i class="fas fa-paw"></i> shop </a>
    <nav class="navbar">
      <a href="#home">home</a>
      <a href="#about">about</a>
      <a href="./shop.html">shop</a>
      <a href="#services">services</a>
      <a href="#plan">plan</a>
      <a href="#contact">contact</a>
    </nav>

    <div class="icons">
      <div class="fas fa-bars" id="menu-btn"></div>
      <a href="#" class="fas fa-shopping-cart"></a>
      <div class="fas fa-user" id="login-btn"></div>
    </div>

    <form action="" class="login-form">
      <h3>sign in</h3>
      <input
        type="email"
        name=""
        placeholder="enter your email"
        id=""
        class="box"
      />
      <input
        type="password"
        name=""
        placeholder="enter your password"
        id=""
        class="box"
      />
      <div class="remember">
        <input type="checkbox" name="" id="remember-me" />
        <label for="remember-me">remember me</label>
      </div>
      <input type="submit" value="sign in" class="btn" />
      <div class="links">
        <a href="#">forget password</a>
        <a href="#">sign up</a>
      </div>
    </form>
  </header> -->


    <!-- shop section starts  -->
    <h2 class="title">Products Available </h2>
      <div class="row">
          <!-- <div class="col-4"> -->
    <?php
        require 'upload/db_conn.php';
        $query = "select * from product_upload";
        $query_run = mysqli_query($conn, $query);
        $check_name = mysqli_num_rows($query_run)>0;

        if($check_name){
            while($row = mysqli_fetch_assoc($query_run))
            {

                ?>
                <div class="col-4">
              <!-- <img src="./image/dog_1.jpg" alt=""> -->
                  <a href="product_page.php?id=<?php echo $row['id'];?>"><img src="upload/uploads/<?php echo $row['img_url']?>" alt=""></a>

              <h4>Name: <?php echo $row['product_name']?></h4>
                <h4>Company Name: <?php echo $row['company_name']?></h4>
                <h4>Price: $<?php echo $row['price']?>/-</h4>
          </div>
          <?php
            }
          }
      ?>
          <!-- <div class="col-4">
              <img src="./image/dog_3.jpeg" alt="" width="20%" height="20%">
              <h4>Name: Snoopy</h4>
              <h4>Owner Name: Satish Kumar</h4>
              <h4>Mobile.no: 987456123</h4>
          </div>
          <div class="col-4">
              <img src="./image/cat_2.jpg" alt="">
              <h4>Name: Camila </h4>
              <h4>Owner Name: Ramya Kumari</h4>
              <h4>Mobile.no: 987456123</h4>
          </div>
          <div class="col-4">
              <img src="./image/cat_1.jpg" alt="">
              <h4>Name: Dumpling</h4>
                 <h4>Owner Name: Ram Krishna</h4>
                 <h4>Mobile.no: 987456123</h4>
                
          </div>
      </div>
      <div class="row">
          <div class="col-4">
              <img src="./image/dog_3.jpeg" alt="" width="20%" height="20%">
              <h4>Name: Snoopy</h4>
                <h4>Owner Name: Satish Kumar</h4>
                <h4>Mobile.no: 987456123</h4>
          </div>
          <div class="col-4">
              <img src="./image/dog_2.jpg" alt="">
              <h4>Name: Jazz</h4>
                 <h4>Owner Name: Harshitha</h4>
                 <h4>Mobile.no: 987456123</h4>
                
            
          </div>
          <div class="col-4">
              <img src="./image/dog_4.jpeg" alt="">
              <h4>Name: Dumpling</h4>
                 <h4>Owner Name: Ram Krishna</h4>
                 <h4>Mobile.no: 987456123</h4>
          </div>
          <div class="col-4">
              <img src="./image/cat_3.jpg" alt="" >
              <h4>Name: Maxi</h4>
                 <h4>Owner Name: kishore</h4>
                 <h4>Mobile.no: 987456123</h4>
          </div> -->
      </div>
  </div>
  <a href="./shop.php" class="btn">Explore Pets</a>

      <!-- shop section ends -->

      <section class="footer">
        <img src="image/top_wave.png" alt="" />
  
        <div class="share">
          <a href="#" class="btn"> <i class="fab fa-facebook-f"></i> facebook </a>
          <a href="#" class="btn"> <i class="fab fa-twitter"></i> twitter </a>
          <a href="#" class="btn"> <i class="fab fa-instagram"></i> instagram </a>
          <a href="#" class="btn"> <i class="fab fa-linkedin"></i> linkedin </a>
          <a href="#" class="btn"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>
  
        <div class="credit">
          created by <span> Group </span> | all rights reserved!
        </div>
      </section>
  
      <!-- custom js file link  -->
      <script src="js/script.js"></script>
</body>
</html>