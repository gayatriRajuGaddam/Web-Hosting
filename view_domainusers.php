<?php
//DB connection
//Query
//Execute
session_start();
include("db_register.php");

$query = "select * from user where id=".$_GET['user_id'];
$result = mysqli_query($connection, $query);
$data = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project Management - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/custom_style.css">
</head>
<body>
<!--<div class="row">
    <div class="col-12">
               Navbar Section Fixed
        <?php
        include("navbar.php");
        ?>
    </div>
</div>
<div class="row">
    <div class="col-2">
        <?php
        include("sidebar.php");
        ?>
    </div>-->
    <div class="col-10">
        <div class="container" style="width:50%; margin-top:30px;">
            <div class="row">
                <div class="col">
                    <form action="domainsave_account.php" method="post">
                        <div class="card">
                            <div class="card-header"  style="background:#1C3481; color:white">
                                View Account Details<a href="user_list.php" style="text-decoration:none; color:white; Margin-left:300px">Back</a>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <label for=""> ID - <?php echo $data['id']; ?></label>

                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <label for="">First Name - <?php echo $data['first_name']; ?></label>

                                    </div>
                                </div>
                                <hr>
								<div class="row">
                                    <div class="col">
                                        <label for="">Last Name - <?php echo $data['last_name']; ?></label>

                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Email - <?php echo $data['user_email']; ?></label>

                                    </div>
                                </div>
                                <hr>
								<div class="row">
                                    <div class="col">
                                        <label for="">Domain - <?php echo $data['domain_name']; ?></label>

                                    </div>
                                </div>
                                <hr>
								<div class="row">
                                    <div class="col">
                                        <label for="">Purchase Date - <?php echo $data['purchase_date']; ?></label>

                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Expiry Date - <?php echo $data['expiry_date']; ?></label>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>

