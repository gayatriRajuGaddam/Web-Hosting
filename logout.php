<?php

session_start();

unset($_SESSION['logged_username']);
unset($_SESSION['error']);
unset($_SESSION['is_logged_in']);
header("Location:login.php");

?>