<?php
session_start();
include("db_register.php");

$user_id = $_POST['user_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$user_email = $_POST['user_email'];
$ssl_name = $_POST['ssl_name'];
$purchase_date = $_POST['purchase_date'];
$expiry_date = $_POST['expiry_date'];

$query = "update ssl_users set first_name='$first_name', last_name='$last_name',user_email='$user_email', ssl_name='$ssl_name',purchase_date='$purchase_date',expiry_date='$expiry_date' where id='$user_id'";

$result = mysqli_query($connection,$query);

if($result){
    $_SESSION['result_update'] = true;
    header("Location:ssluser_list.php");
}
else{
    $_SESSION['result_update'] = false;
    header("Location:ssluser_list.php");
}