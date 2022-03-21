<?php
 
 session_start();
 include "db_register.php";
 if(isset($_POST['edit']))
 {
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $user_emailr=$_POST['user_email'];
    $user_password=$_POST['user_password'];
    $ssl_name=$_SESSION['ssl_name'];
    $purchase_date=$_SESSION['purchase_name'];
    $expiry_date=$_SESSION['expiry_name'];
   
    $user1_id=$_POST['id'];    
    if($res === $id)
    {
   
       $update = "update ssl_users set first_name='$first_name',last_name='$last_name',user_email='$user_email',$user_password='$user_password',ssl_name='$ssl_name',purchase_date='$purchase_date',expiry_date='$expiry_date' where id='1'";
       $result=mysqli_query($connection,$update);
       if($result)
       { 
           /*Successful*/
           header('location:sidebar.php');
       }
       else
       {
           /*sorry your profile is not update*/
           header('location:ssledit_account.php');
       }
    }
    else
    {
        /*sorry your id is not match*/
        header('location:ssledit_account.php');
    }
 }
?>