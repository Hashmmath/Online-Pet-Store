<?php
session_start();
$con = mysqli_connect('localhost','root','','pet_care');

if(isset($_POST['registration']))
{
    $name = mysqli_real_escape_string($con, $_POST['Username']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $mailid = mysqli_real_escape_string($con, $_POST['mailid']);
    $state = mysqli_real_escape_string($con, $_POST['state']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $pincode = mysqli_real_escape_string($con, $_POST['pincode']);
    $cardnumber = mysqli_real_escape_string($con, $_POST['cardnumber']);
    $expmonth = mysqli_real_escape_string($con, $_POST['expmonth']);
    $expyear = mysqli_real_escape_string($con, $_POST['expyear']);
    $cvv = mysqli_real_escape_string($con, $_POST['cvv']);
    $cost = mysqli_real_escape_string($con, $_POST['cost']);

    $query = "INSERT INTO payment (name,mailid,address,city,state,zipcode,cardnumber,expmonth,expyear,cvv,cost) VALUES ('$name','$mailid','$address','$city','$state','$pincode','$cardnumber','$expmonth','$expyear','$cvv','$cost')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        header('Location: message.html');
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