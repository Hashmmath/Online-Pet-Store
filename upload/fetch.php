<?php
session_start();
$con = mysqli_connect('localhost','root','','pet_care');

if(isset($_POST['upload_save_btn']))
{
    $product_id = mysqli_real_escape_string($con, $_POST['product_id']);
    $product_name = mysqli_real_escape_string($con, $_POST['product_name']);
    $company_name = mysqli_real_escape_string($con, $_POST['company_name']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $image = $_FILES['image_profile']['name'];

    $path = "product_upload/"; /** Path for Uploading your Image **/
        
    $image_extension = pathinfo($image, PATHINFO_EXTENSION); /** Image Extension **/
    $filename = time().'.'.$image_extension; /** Renaming the Image **/

    $query = "INSERT INTO product_upload (id,product_name,img_url,company_name,price) VALUES ('$product_id','$product_name','$filename','$company_name','$price')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        // Upload Image to uploads folder
        move_uploaded_file($_FILES['image_profile']['tmp_name'], $path."/".$filename);

        $_SESSION['message'] = "Product Uploaded Successfully";
        header('Location: /pet shop/product_upload_details.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something went wrong";
        header('Location: product_details.php');
        exit(0);
    }
}
?>
