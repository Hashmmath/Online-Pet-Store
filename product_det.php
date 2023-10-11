<?php
session_start();
$con = mysqli_connect('localhost','root','','pet_care');

if(isset($_POST['upload_save_btn']))
{
    
    $product_id = mysqli_real_escape_string($con, $_POST['product_id']);
    $product_name = mysqli_real_escape_string($con, $_POST['product_name']);
    $product_desc = mysqli_real_escape_string($con, $_POST['product_desc']);
    $pet = mysqli_real_escape_string($con, $_POST['pet']);
    $company = mysqli_real_escape_string($con, $_POST['company']);
    $supplier = mysqli_real_escape_string($con, $_POST['supplier']);
    $quantity = mysqli_real_escape_string($con, $_POST['quantity']);
    $ref_id = mysqli_real_escape_string($con, $_POST['ref_id']);
    $cost = mysqli_real_escape_string($con, $_POST['cost']);

    //$path = "uploads/"; /** Path for Uploading your Image **/
        
    //$image_extension = pathinfo($image, PATHINFO_EXTENSION); /** Image Extension **/
    //$filename = time().'.'.$image_extension; /** Renaming the Image **/

    $query = "INSERT INTO product_details (id,product_name,product_desc,pet,company,supplier,quantity,ref_id,cost) VALUES ('$product_id','$product_name','$product_desc','$pet','$company','$supplier','$quantity','$ref_id','$cost')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        // Upload Image to uploads folder
        //move_uploaded_file($_FILES['image_profile']['tmp_name'], $path."/".$filename);

        //$_SESSION['message'] = "Place Uploaded Successfully";
        header('Location: /pet shop/product_shop.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something went wrong";
        header('Location: product_det.php');
        exit(0);
    }
}
?>