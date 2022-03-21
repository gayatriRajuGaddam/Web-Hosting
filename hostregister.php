<?php
    session_start();
    if(isset($_SESSION['host_registerFormError'])){
        $arrstrFormError = $_SESSION['host_registerFormError'];
        unset($_SESSION['host_registerFormError']);
    }

?>

        <!-- Bootstrap core CSS-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Custom fonts for this template-->
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<title>Registration Form</title>
<style>
    label{
        font-size: 18px;
    }
            .container{
                
                margin-bottom: 20px;
                height: 70%;
            }
            .btn{
               width: 100%;
               padding: 8px;
               color: #ffffff;
               background: none #ADD8E6;
               border: none;
               border-radius: 6px;
               font-size: 18px;
               cursor: pointer;
               margin: 12px 0;
            }
            .login{
                color:#191970;
                font-size:20px;
            }
        </style>
    </head>
    <body>
        <div class="container" style="width:60%">
               <div class="card card-register mx-auto mt-5">
                 <div class="card-header" style="background:#191970; color:white;">Register an Account<a href="dashboardsidebar.php" style="margin-left:550px; text-decoration:none; color:white; font-weight:bold; font-size:20px">Back</a></div>
                 <div class="card-body">
                        <form action="hostregistervalid.php" method="POST">
                            <div>
                                <label>First Name</label>
                                <br>
                                <input class="form-control" type="text" name="first_name">
                                <br>
                                <small style="color:red;">
                                    <?php echo isset($arrstrFormError['first_name_err'])?$arrstrFormError['first_name_err']:""; ?>
                                </small>
                            </div>
                            <div>
                                <label>Last Name</label>
                                <br>
                                <input class="form-control" type="text" name="last_name">
                                <br>
                                <small style="color:red;">
                                    <?php echo isset($arrstrFormError['last_name_err'])?$arrstrFormError['last_name_err']:""; ?>
                                </small>
                            </div>
                            <br>
                            <div>
                                <label>Email</label>
                                <br>
                                <input class="form-control" type="text" name="user_email">
                                <br>
                                <small style="color:red;">
                                    <?php echo isset($arrstrFormError['email_err'])?$arrstrFormError['email_err']:""; ?>
                                </small>
                            </div>
                            <br>
                            <div>
                                <label>Password</label>
                                <br>
                                <input class="form-control" type="text" name="user_password">
                                <br>
                                <small style="color:red;">
                                    <?php echo isset($arrstrFormError['password_err'])?$arrstrFormError['password_err']:""; ?>
                                </small>
                            </div>
                            <br>
                            <div>
                                <label>Hosting Name</label>
                                <br>
                                <input class="form-control" type="text" name="host_name">
                                <br>
                                <small style="color:red;">
                                    <?php echo isset($arrstrFormError['host_err'])?$arrstrFormError['host_err']:""; ?>
                                </small>
                            </div>
                            <br>
                            <div>
                                <label>Purchase Date</label>
                                <br>
                                <input type="date" class="form-control form-control-sm" autocomplete="off" name="purchase_date" value="<?php echo isset($purchase_date) ?>">
                                <br>
                                <small style="color:red;">
                                    <?php echo isset($arrstrFormError['purchase_err'])?$arrstrFormError['purchase_err']:""; ?>
                                </small>
                            </div>
                            <div>
                                <label>Expiry Date</label>
                                <br>
                                <input type="date" class="form-control form-control-sm" autocomplete="off" name="expiry_date" value="<?php echo isset($expiry_date) ?>">
                                <br>
                                <small style="color:red;">
                                    <?php echo isset($arrstrFormError['expiry_err'])?$arrstrFormError['expiry_err']:""; ?>
                                </small>
                            </div>
                            <div>
                                <button type="submit" class="btn  btn-block " name="reg_user">Register</button>
                            </div>
                        </form>
                        <div class="text-center">
                             <a class="login d-block small mt-3" href="login.php">Login</a>
                        </div>
                   </div>
            </div>
        
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- Bootstrap core JavaScript-->
     <script src="vendor/jquery/jquery.min.js"></script>
     <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
     <!-- Core plugin JavaScript-->
     <script src="vendor/jquery-easing/jquery.easing.min.js"></script>    
   