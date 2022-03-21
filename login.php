<?php 

session_start();
//include('header.php');
?>
<title>Login Page</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="login.css">

<style>
    
</style>
 <title>Admin Login </title>
   </head>
    <body>
        <div class="container">
            <div class="card" style="width: 50%; margin-top:10%; margin-left:25%; border:1px solid #000;">
              <div class="card-header" style="padding-left:10px">
                  <h2>Login</h2>

                </div>
              <div class="card-body">
                <form action="logincheck.php" method="POST">
                    <div class="adminlogin">
                        <div class="textbox" style="padding-left:10px; ">
                            <i class="fa fa-user" aria-hidden="true" style="font-size:30px"></i>
                            <input type="text" placeholder="user_email" name="user_email" style="width:90%; border:none; padding:5px 5px 5px 5px" value="">
                            <small style="color:red;">
                                <?php echo isset($arrstrFormError['email_err'])?$arrstrFormError['email_err']:""; ?>
                            </small>
                        </div>

                        <div class="textbox" style="padding-left:10px; width:100%">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                            <input type="password" placeholder="Password" name="user_password" style="width:90%; border:none; padding:5px 5px 5px 5px" value="">
                            <small style="color:red;">
                                <?php echo isset($arrstrFormError['password_Err'])?$arrstrFormError['password_Err']:""; ?>
                            </small>
                        </div>

                        <input class="button" type="submit" name="login" value="Sign In">
                    </div>
                </form>
              </div>
            </div>
            
<?php include('footer.php');?>