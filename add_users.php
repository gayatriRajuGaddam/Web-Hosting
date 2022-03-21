<?php
//DB connection
//Query
//Execute
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users List</title>
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
    <div class="col-12">
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="hostsave_account.php" method="post" >
                    <div class="card">
                        <div class="card-header" style="background:#1C3481; color:white; font-size:18px">
                            Add Users
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <label for="">First Name</label>
                                    <input type="text" class="form-control" name="first_name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="">Last Name</label>
                                    <input type="text" class="form-control" name="last_name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" name="user_email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="">Hosting</label>
                                    <input type="text" class="form-control" name="host_name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="" class="control-label">Purchase Date</label>
                                    <input type="date" class="form-control form-control-sm" autocomplete="off" name="purchase_date" value="<?php echo isset($purchase_date) ?>">
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                <label for="" class="control-label">Expiry Date</label>
                                <input type="date" class="form-control form-control-sm" autocomplete="off" name="expiry_date" value="<?php echo isset($expiry_date) ?>">
                                    
                                </div>
                            </div>
                            <br>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>

        </div>
    </div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>