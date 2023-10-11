<?php

@include 'upload/db_conn.php';

if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
   if($update_quantity_query){
      header('location:cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'");
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `cart`");
   header('location:cart.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style3.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400;500&family=Poppins:wght@300;400;500;600;700&
    display=swap" rel="stylesheet">
    <title>Cart-detail|E-commerce</title>

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
<div class="container">

<section class="shopping-cart">

   <h1 class="heading">shopping cart</h1>

   <table>

      <thead>
         <th>image</th>
         <th>name</th>
         <th>price</th>
         <th>quantity</th>
         <th>total price</th>
         <th>action</th>
      </thead>

      <tbody>

         <?php 
         
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
         ?>

         <tr>
            <td><img src="upload/uploads/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
            <td><?php echo $fetch_cart['name']; ?></td>
            <td>$<?php echo number_format($fetch_cart['price']); ?>/-</td>
            <td>
               <form action="" method="post">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['id']; ?>" >
                  <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['quantity']; ?>" >
                  <input type="submit" value="update" name="update_update_btn">
               </form>   
            </td>
            <td>$<?php echo $sub_total = number_format($fetch_cart['price'] * $fetch_cart['quantity']); ?>/-</td>
            <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('remove item from cart?')" class="delete-btn"> <i class="fas fa-trash"></i> remove</a></td>
         </tr>
         <?php
           $grand_total += $sub_total;  
            };
         };
         ?>
         <tr class="table-bottom">
            <td><a href="shop.php" class="option-btn" style="margin-top: 0;">continue shopping</a></td>
            <td colspan="3">grand total</td>
            <td>$<?php echo $grand_total; ?>/-</td>
            <td><a href="cart.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" class="delete-btn"> <i class="fas fa-trash"></i> delete all </a></td>
         </tr>
      </tbody>

   </table>

   <div class="checkout-btn">
      <a href="checkout.html" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">procced to checkout</a>
   </div>

</section>

</div>
   
<!-- custom js file link  -->
<script src="js/script.js"></script>
        <!--<table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Sub Total</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="image/dog_1.jpg" alt="">
                        <div>
                            <p>Pomeranian</p>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$50.00</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="image/dog_5.jpeg" alt="">
                        <div>
                            <p>Poodle</p>
                            <small>Price: $75.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$75.00</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="image/dog_7.jpeg" alt="">
                        <div>
                            <p>Golden Retriever</p>
                            <small>Price: $60.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$60.00</td>
            </tr>
        </table>
        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>$200.00</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$0.00</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>$200.00</td>
                </tr>
            </table>
        </div>
    </div> -->

    <!-- footer -->
    <div class="footer" id="f_ooter">
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
        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            } else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>

</body>

</html>