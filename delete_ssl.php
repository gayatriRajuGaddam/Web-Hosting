<?php
session_start();
include("db_register.php");

$query = "delete from ssl_users where id=".$_GET['user_id'];

$result = mysqli_query($connection,$query);

if($result){
    $_SESSION['result_delete'] = true;
    header("Location:ssluser_list.php");
}
else{
    $_SESSION['result_delete'] = false;
    header("Location:ssluser_list.php");
}