<?php
session_start();
$con = mysqli_connect('localhost','root','','pet_care');

if(isset($_POST['registration']))
{
    $name = mysqli_real_escape_string($con, $_POST['Username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $mailid = mysqli_real_escape_string($con, $_POST['mailid']);
    $C_password = mysqli_real_escape_string($con, $_POST['c_password']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);

    $query = "INSERT INTO details (name,password,mailid,mobile) VALUES ('$name','$password','$mailid','$mobile')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        header('Location: login.html');
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