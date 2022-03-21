<?php
session_start();
include("db_register.php");

$query = "delete from user where id=".$_GET['user_id'];

$result = mysqli_query($connection,$query);

if($result){
    $_SESSION['result_delete'] = true;
    header("Location:user_list.php");
}
else{
    $_SESSION['result_delete'] = false;
    header("Location:user_list.php");
}