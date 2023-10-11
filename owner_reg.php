<?php
session_start();
$con = mysqli_connect('localhost','root','','pet_care');

if(isset($_POST['registration']))
{
    $name = mysqli_real_escape_string($con, $_POST['Username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $mailid = mysqli_real_escape_string($con, $_POST['mailid']);
    $number = mysqli_real_escape_string($con, $_POST['number']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $pets = mysqli_real_escape_string($con, $_POST['pets']);
    $subscription = mysqli_real_escape_string($con, $_POST['subscription']);

    $query = "INSERT INTO owner (name,password,email,number,pets,address,subscription) VALUES ('$name','$password','$mailid','$number','$pets','$address','$subscription')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        header('Location: owner_login.html');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something went wrong";
        header('Location: registration.html');
        exit(0);
    }
}
?>