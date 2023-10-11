<?php
session_start();
$con = mysqli_connect('localhost','root','','pet_care');

if(isset($_POST['upload_save_btn']))
{
    
    $pet_id = mysqli_real_escape_string($con, $_POST['pet_id']);
    $pet_name = mysqli_real_escape_string($con, $_POST['pet_name']);
    $pet_details = mysqli_real_escape_string($con, $_POST['pet_details']);
    $animal = mysqli_real_escape_string($con, $_POST['animal']);
    $height = mysqli_real_escape_string($con, $_POST['height']);
    $weight = mysqli_real_escape_string($con, $_POST['weight']);
    $life_span = mysqli_real_escape_string($con, $_POST['life_span']);
    $ref_id = mysqli_real_escape_string($con, $_POST['ref_id']);
    $breed = mysqli_real_escape_string($con, $_POST['breed']);

    //$path = "uploads/"; /** Path for Uploading your Image **/
        
    //$image_extension = pathinfo($image, PATHINFO_EXTENSION); /** Image Extension **/
    //$filename = time().'.'.$image_extension; /** Renaming the Image **/

    $query = "INSERT INTO dog_details (id,pet_name,animal,pet_details,height,weight,life_span,img_id,breed) VALUES ('$pet_id','$pet_name','$animal','$pet_details','$height','$weight','$life_span','$ref_id','$breed')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        // Upload Image to uploads folder
        //move_uploaded_file($_FILES['image_profile']['tmp_name'], $path."/".$filename);

        //$_SESSION['message'] = "Place Uploaded Successfully";
        header('Location: /pet shop/shop.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something went wrong";
        header('Location: details.php');
        exit(0);
    }
}
?>