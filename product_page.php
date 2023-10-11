<?php

@include 'upload/db_conn.php';

if(isset($_POST['add_to_cart'])){

   $name = $_POST['name'];
   $price = $_POST['price'];
   $image = $_POST['image'];
   $quantity = 1;

   $query_1 = "SELECT * FROM cart WHERE name = '$name'";
   $select_cart = mysqli_query($conn, $query_1);

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
    $query = "INSERT INTO cart (name, price , image, quantity) VALUES('$name', '$price', '$image', '$quantity')";
    $insert_product = mysqli_query($conn, $query);
    $message[] = 'product added to cart successfully';
   }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="./css/style3.css" />
    <link rel="stylesheet" href="./css/nav.css" />
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400;500&family=Poppins:wght@300;400;500;600;700&
    display=swap" rel="stylesheet">
    <title>Pet-detail</title>

</head>
<body>
<?php
      
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
<?php

if(isset($message)){
   foreach($message as $message){
    echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" 
    onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>
        <!-- ---------- single pet details--------- -->
        <div class="small-container single-product">
            <div class="row">
            <?php
        require 'upload/db_conn.php';
        $id = $_GET['id'];
        $query3 = "Select * from product_upload where id = '$id'";
        $query_run2 = mysqli_query($conn, $query3);
        $check_img = mysqli_num_rows($query_run2)>0;

        if($check_img){
            while($row = mysqli_fetch_assoc($query_run2))
            {

                ?>
                <div class="col-2">
                <form action="" method="post">
                    <img src="upload/uploads/<?php echo $row['img_url'];?>" width="100%" id="ProductImg">
                    <input type="hidden" name="name" value="<?php echo $row['product_name']; ?>">
                    <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
                    <input type="hidden" name="image" value="<?php echo $row['img_url']; ?>">
                    <input type="submit" class="btn" value="add to cart" name="add_to_cart">
                

            <?php
            };
        };
        ?>

                
        <?php
        require 'upload/db_conn.php';
        $id = $_GET['id'];
        $query2 = "Select * from product_details where id = '$id'";
        $query_run1 = mysqli_query($conn, $query2);
        $check_pet = mysqli_num_rows($query_run1)>0;

        if($check_pet){
            while($row = mysqli_fetch_assoc($query_run1))
            {

                ?>
                <!-- <form action="" method="post"> -->
                <div class="col-2">
                    <P><?php echo $row['pet']?></P>
                    <!--<select name="<?php echo $row['product_name']?>"id="">
                    <option value="">Male</option>
                    <option value="">Female</option> 
                        <option value="">Dog</option>
                        <option value="">Cat</option>
                    </select> -->
                    <P><?php echo $row['product_name']?></P>
                    <h4>$<?php echo $row['cost']?>/-<h4>
                    <input type="number" min="1" value="1">
                    <!-- <a href="cart.php" input type="submit" class="btn" value="add to cart" name="add_to_cart">Add to cart</a> -->
                    <!-- <a href="cart.php" class="btn" value="add to cart" name="add_to_cart">Add to cart</a> -->
                    <!-- <input type="submit" class="btn" value="add to cart" name="add_to_cart"> -->
                    <h3>Pet Details <i class="fa fa-indent"></i></h3>
                    <br>
                    <p><?php echo $row['product_desc']?></p>
                    <br>

                    <p>Company: <?php echo $row['company']?></p>
                    <p>Supplier: <?php echo $row['supplier']?></p>
                    <p>Quantity: <?php echo $row['quantity']?></p>
                    <p>Cost: <?php echo $row['cost']?></p>
                    <!-- <input type="submit" class="btn" value="add to cart" name="add_to_cart"> -->
                </div>
            </form>
            </div>
            <?php
            };
        };
        ?>
        </div>
        </div>
        <!-- <div class="small-container">
            <div class="row row-2">
                <h2>Related Products</h2>
                <p>View more</p>
            </div>
        </div>
    
    <div class="small-container">

        <div class="row">
            <div class="col-4">
                <img src="./image/dog_3.jpeg" alt="">
                <b>Golden Retriever</b>
            </div>
            <div class="col-4">
                <img src="./image/dog_4.jpeg" alt="">
                <b>Poodle</b>
            </div>
            <div class="col-4">
                <img src="./image/dog_6.jpg" alt="" width= "30%" height ="30%">
                <b>Pomeranian</b>
            </div>
            <div class="col-4">
                <img src="./image/dog_8.jpeg" alt="">
                <b>Golden Retriever</b>
            </div>
        </div>
    </div> -->
        


    <!-- footer -->
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download our App </h3>
                    <p>Download our app for Android and ios mobile phone</p>
                    <div class="app-logo">
                        <img src="images/app-store.png" alt="">
                        <img src="images/play-store.png" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/logo-white.png" alt="">
                    <p>Our Purpose is to Sustainably Make the Pleasure and Benefits of sports Accessible to the Many.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">copyright © 2022 - Group</p>

        </div>
    </div>

    <!-- --------js for toggle menu----------- -->
    <script>
        var MenuItems = document.getElementById('MenuItems');
        MenuItems.style.maxHeight="0px";

        function menutoggle(){
            if(MenuItems.style.maxHeight=="0px")
            {
                MenuItems.style.maxHeight = "200px";
            }
            else
            {
                MenuItems.style.maxHeight="0px";
            }
        }

    </script>
    <!-- ------------------------ js for product gallery--------------- -->
    <script>
        var ProductImg = document.getElementById("ProductImg");
        var SmallImg = document.getElementsByClassName("small-img");

        SmallImg[0].onclick = function()
        {
            ProductImg.src= SmallImg[0].src;
        }
        SmallImg[1].onclick = function()
        {
            ProductImg.src= SmallImg[1].src;
        }
        SmallImg[2].onclick = function()
        {
            ProductImg.src= SmallImg[2].src;
        }
        SmallImg[3].onclick = function()
        {
            ProductImg.src= SmallImg[3].src;
        }
    </script>
</body>
</html>