<?php
session_start();
include("db_register.php");
//print_r($_POST);

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$user_email = $_POST['user_email'];
$host_name = $_POST['host_name'];
$purchase_date = $_POST['purchase_date'];
$expiry_date = $_POST['expiry_date'];

$query = "insert into hostusers(first_name,last_name,user_email,host_name,purchase_date,expiry_date) values('$first_name','$last_name','$user_email','$host_name','$purchase_date','$expiry_date')";

$result = mysqli_query($connection,$query);

if($result){
    $_SESSION['result'] = true;
    header("Location:hostuser_list.php");
}
else{
    $_SESSION['result'] = false;
    header("Location:hostuser_list.php");
}