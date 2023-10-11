<?php session_start(); ?>
<?php
include('upload/db_conn.php');

if (!isset($_SESSION['name'])){
  header('location: owner_login.html');
  die();
}
?>
<?php
$name=$_SESSION['name'];
$query = mysqli_query($conn,"select * from owner where name = '$name'");
$row = mysqli_fetch_array($query);
$id = $row['id'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Complete Responsive Pet Food Website Design Tutorial</title>

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- header section starts  -->

    <header class="header">
      <a href="#" class="logo"> <i class="fas fa-paw"></i> shop </a>

      <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="./shop.php">shop</a>
        <a href="#services">services</a>
        <a href="#plan">plan</a>
        <a href="#contact">contact</a>
        <!-- <a href = "./upload/shopdetails.php">Upload</a>
        <a href = "./upload/product_details.php">Product Upload</a> -->
      </nav>

      <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="./owner_profile.php ?id=<?php echo $row['id']; ?>" class="fas fa-user" id="login-btn"></a>
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
    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">
      <div class="content">
        <h3><span>hi, <?php echo $_SESSION['name']?></span> welcome to our pet shop</h3>
        <a href="./shop.php" class="btn">shop now</a>
      </div>

      <img src="image/bottom_wave.png" class="wave" alt="" />
    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">
      <div class="image">
        <img src="image/about_img.png" alt="" />
      </div>

      <div class="content">
        <h3>Pet Shop <span>And </span>Product Suppliers</h3>
        <p>
          Our Online Pet Store contains all varieties of pets, if anyone wants to purchase and along with that the store also offers
          pet related products for everyone at the comfort of their home.
        </p>
        <!-- <a href="#" class="btn">read more</a> -->
      </div>
    </section>

    <!-- about section ends -->

    <!-- dog and cat food banner section starts -->

    <div class="dog-food">
      <div class="image">
        <img src="image/home_bg_img.jpg" alt="" />
      </div>

      <div class="content">
        <h3><span>Pet</span>Shop</h3>
        <p>
          The Shop page displays all kids of pets that are available in the website 
        </p>
        <!-- <div class="amount">$15.00 - $30.00</div> -->
        <a href="./shop.php"> <img src="image/shop_now_dog.png" alt="" /> </a>
      </div>
    </div>

    <div class="cat-food">
      <div class="content">
        <h3><span>Product</span>Shop</h3>
        <p>
          The Product Shop page displays all the products that are available in the website
        </p>
        <!-- <div class="amount">$15.00 - $30.00</div> -->
        <a href="./product_shop.php"> <img src="image/shop_now_cat.png" alt="" /> </a>
      </div>

      <div class="image">
        <img src="./image/dog_food.png" alt="" />
      </div>
    </div>

    <!-- dog and cat food banner section ends -->

    <!-- shop section starts  -->

    <!-- <section class="shop" id="shop">
      <h1 class="heading">our <span> pets </span></h1>

      <div class="box-container">
        <div class="box">
          <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
          </div>
          <div class="image">
            <img src="image/dog_1.jpg" alt="" />
          </div>
          <div class="content">
            <h3>Chow Chow</h3>
            <div class="amount">Name: cho cho</div>
            <div class="amount">Owner Name: Cheritha</div>
            <div class="amount">Mobile.no: 987456123</div>
          </div>
        </div>

        <div class="box">
          <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
          </div>
          <div class="image">
            <img src="image/dog_2.jpg" alt="" />
          </div>
          <div class="content">
            <h3>Golden Retriever</h3>
            <div class="amount">Name: Jazz</div>
            <div class="amount">Owner Name: Harshitha</div>
            <div class="amount">Mobile.no: 987456123</div>
          </div>
        </div>

        <div class="box">
          <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
          </div>
          <div class="image">
            <img src="image/dog_3.jpg" alt="" />
          </div>
          <div class="content">
            <h3>Pomeranian</h3>
            <div class="amount">Name: Snoopy</div>
            <div class="amount">Owner Name: Satish Kumar</div>
            <div class="amount">Mobile.no: 987456123</div>
          </div>
        </div>

        <div class="box">
          <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
          </div>
          <div class="image">
            <img src="./image/cat_1.jpg" alt="" />
          </div>
          <div class="content">
            <h3>American Shorthair</h3>
            <div class="amount">Name: Dumpling</div>
            <div class="amount">Owner Name: Ram Krishna</div>
            <div class="amount">Mobile.no: 987456123</div>
          </div>
        </div>

        <div class="box">
          <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
          </div>
          <div class="image">
            <img src="./image/cat_2.jpg" alt="" />
          </div>
          <div class="content">
            <h3>Persian cat</h3>
            <div class="amount">Name: Camila</div>
            <div class="amount">Owner Name: Ramya Kumari</div>
            <div class="amount">Mobile.no: 987456123</div>
          </div>
        </div>

        <div class="box">
          <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
          </div>
          <div class="image">
            <img src="./image/cat_3.jpg" alt="" />
          </div>
          <div class="content">
            <h3>Bombay cat</h3>
            <div class="amount">Name: Maxi</div>
            <div class="amount">Owner Name: kishore</div>
            <div class="amount">Mobile.no: 987456123</div>
          </div>
        </div>
      </div>
    </section> -->
<!-- 
    shop section ends -->

    <!-- services section starts  -->

    <section class="services" id="services">
      <h1 class="heading">our <span>services</span></h1>

      <div class="box-container">
        <div class="box">
          <i class="fas fa-dog"></i>
          <h3>Pet boarding</h3>
          <a href="./owner_reg.html" class="btn">Register as Owner</a>
        </div>

        <div class="box">
          <i class="fas fa-cat"></i>
          <h3>Product Adding</h3>
          <a href="./supplier_reg.html" class="btn">Register as Supplier</a>
        </div>

        <div class="box">
          <i class="fas fa-drumstick-bite"></i>
          <h3>Owner Subscription</h3>
          <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
          <i class="fas fa-bath"></i>
          <h3>Pet Care</h3>
          <a href="#" class="btn">read more</a>
        </div>
      </div>
    </section>

    <!-- services section ends -->

    <!-- plan section ends -->

    <section class="contact" id="contact">
      <div class="image">
        <img src="image/contact_img.png" alt="" />
      </div>

      <form action="">
        <h3>contact us</h3>
        <input type="text" placeholder="your name" class="box" />
        <input type="email" placeholder="your email" class="box" />
        <input type="tumber" placeholder="your number" class="box" />
        <textarea
          name=""
          placeholder="your message"
          id=""
          cols="30"
          rows="10"
        ></textarea>
        <input type="submit" value="send message" class="btn" />
      </form>
    </section>

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
