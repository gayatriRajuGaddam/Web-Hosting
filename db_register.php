<?php
//Parameter for DB Connection
$host = "localhost";
$database_name = "db_task";
$database_user = "root";
$user_password = "";

//DB Connection
$connection= mysqli_connect($host,$database_user,$user_password,$database_name);

if(mysqli_connect_errno()){
    echo "Error in database connection";
    die;
}
else{
   //echo "Connection established!!";
}
