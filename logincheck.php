<?php
session_start();
include("db_register.php");

//Data from user
$email = $_POST['user_email'];
$user_password = $_POST['user_password'];

// Data from database
$query = "select * from user where user_email='$email'";
$result = mysqli_query($connection,$query);

$data = mysqli_fetch_assoc($result);

$db_password = $data['user_password'];

if($user_password==$db_password){
    $_SESSION['logged_username'] = $data['first_name']." ".$data['last_name'];
    $_SESSION['is_logged_in'] = true;
    $_SESSION['logged_user_id'] = $data['id'];
    header("Location:dashboardsidebar.php");
}
else{
    $_SESSION['is_logged_in'] = false;
    $_SESSION['error'] = "Username or password incorrect";
    header("Location:dashboardsidebar.php");
}

