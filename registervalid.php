<?php

include('db_register.php'); 

session_start();

$flag = true;
$arrstrError = array();


if(empty($_POST['first_name'] )){
    $arrstrError['first_name_err'] = 'First Name is required';
    $flag = false;
}
else{
    $full_name = filter_var($_POST['first_name'], FILTER_SANITIZE_STRING);
}

if(empty($_POST['last_name'] )){
    $arrstrError['last_name_err'] = 'Last Name is required';
    $flag = false;
}
else{
    $full_name = filter_var($_POST['last_name'], FILTER_SANITIZE_STRING);
}

if(empty($_POST['user_email'] )){
    $arrstrError['email_err'] = 'Email is required';
    $flag = false;
}
else{
    $email = filter_var($_POST['user_email'], FILTER_SANITIZE_EMAIL);

    $str = strstr($email,"@");

    //Validate Email
    if(!empty($str)){
        $str1 = strstr($str,".com");
        if(!empty($str1)){

        }
        else{
            $arrstrError['email_err'] = 'Email is invalid';
            $flag = false;
        }
    }
    else{
        $arrstrError['email_err'] = 'Email is invalid';
        $flag = false;
    }
}


if(!empty($_POST["user_password"])) {
        
        if (strlen($_POST["user_password"]) <= '8') {
            $arrstrError['password_Err'] = "Your Password Must Contain At Least 8 Characters!";
        }
        elseif(!preg_match("#[0-9]+#",$_POST["user_password"])) {
            $arrstrError['password_Err'] = "Your Password Must Contain At Least 1 Number!";
        }
        elseif(!preg_match("#[A-Z]+#",$_POST["user_password"])) {
            $arrstrError['password_Err'] = "Your Password Must Contain At Least 1 Capital Letter!";
        }
        elseif(!preg_match("#[a-z]+#",$_POST["user_password"])) {
            $arrstrError['password_Err'] = "Your Password Must Contain At Least 1 Lowercase Letter!";
        }; 
}

if(empty($_POST['domain_name'] )){
    $arrstrError['host_err'] = 'Domain Name is required';
    $flag = false;
}
else{
    $mobile = filter_var($_POST['domain_name'], FILTER_SANITIZE_STRING);

}






//Check flag is true or not
if($flag === true){
    echo "<pre>";
    //print_r($_POST);

    include("db_register.php");

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $doamin_name = $_POST['domain_name'];
    $purchase_date = $_POST['purchase_date'];
    $expiry_date = $_POST['expiry_date'];

    $query = "INSERT INTO user(first_name,last_name,user_email,user_password,domain_name,purchase_date,expiry_date) VALUES('$first_name','$last_name','$user_email','$user_password','$domain_name','$purchase_date','$expiry_date')";

    $result = mysqli_query($connection,$query);

    mysqli_error($connection);

    if($result){
        echo "Record successfully added!";
        header("Location:dashboardsidebar.php"); //redirection
    }
    else{
        echo "Error in adding record!!";
    }


}
else{
    $_SESSION['host_registerFormError'] = $arrstrError;
    header("Location:register.php"); //redirection
}




























