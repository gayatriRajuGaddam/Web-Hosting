<?php
session_start();
include("db_register.php");
//print_r($_POST);

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$user_email = $_POST['user_email'];
$domain_name = $_POST['domain_name'];
$purchase_date = $_POST['purchase_date'];
$expiry_date = $_POST['expiry_date'];

$query = "insert into user(first_name,last_name,user_email,domain_name,purchase_date,expiry_date) values('$first_name','$last_name','$user_email','$domain_name','$purchase_date','$expiry_date')";

$result = mysqli_query($connection,$query);

if($result){
    $_SESSION['result'] = true;
    header("Location:user_list.php");
}
else{
    $_SESSION['result'] = false;
    header("Location:user_list.php");
}