<?php
session_start();
      $server ="localhost";
      $username = "root";
      $password = "";
      $dbconn = mysqli_connect('localhost','root','','pet_care') or die($dbconn->error);   
        $name=$_POST['name'];
        $password = $_POST["password"];
        $_SESSION['name']=$name; 
        $query = mysqli_query( $dbconn, "SELECT * FROM supplier WHERE name='$name' and password='$password'");
         if (mysqli_num_rows($query) != 0)

        {
            header('location:supplier_home.php');
          }
          else{
            header('location:login.html'); 
          }
?>
