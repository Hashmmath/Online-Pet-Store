<?php
session_start();
$con = mysqli_connect('localhost','root','','pet_care');

if(isset($_POST['upload_save_btn']))
{
    $pet_id = mysqli_real_escape_string($con, $_POST['pet_id']);
    $pet_name = mysqli_real_escape_string($con, $_POST['pet_name']);
    $owner_name = mysqli_real_escape_string($con, $_POST['owner_name']);
    $contact_no = mysqli_real_escape_string($con, $_POST['contact_no']);
    $image = $_FILES['image_profile']['name'];

    $path = "uploads/"; /** Path for Uploading your Image **/
        
    $image_extension = pathinfo($image, PATHINFO_EXTENSION); /** Image Extension **/
    $filename = time().'.'.$image_extension; /** Renaming the Image **/

    $query = "INSERT INTO upload (id,pet_name,img_url,owner_name,mobile_no) VALUES ('$pet_id','$pet_name','$filename','$owner_name','$contact_no')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        // Upload Image to uploads folder
        move_uploaded_file($_FILES['image_profile']['tmp_name'], $path."/".$filename);

        $_SESSION['message'] = "Pet Uploaded Successfully";
        header('Location: /pet shop/petupload_details.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something went wrong";
        header('Location: shopdetails.php');
        exit(0);
    }
}
?>
