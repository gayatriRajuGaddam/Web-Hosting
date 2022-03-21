<?php
include ("header.php");

?>               
<title>Index Page</title>
<style>
    .col1{
        border: 1px solid #191970;
    }
</style>
<div id="top-nav" class="navbar navbar-inverse navbar-static-top" style="background:#191970;color:white;border-color:white;">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="dashboardsidebar.php">Dashboard</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="fa fa-user-circle"></i><span class="caret"></span></a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="account.php"><i class="fa fa-user-secret"></i> My Profile</a></li>						
                    </ul>
                </li>
                <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
        </div>
    </div>
</div>
    <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10 mt-5 pt-5">
                        <div class="banner-area pb-30">
                            <h2 style="margin-left:-25px">Domain Name</h2>
                        </div>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-lg-3 col1">
                                        <form action="cartwebhost.php" method="POST">
                                            <div class="card">
                                            <img src="img1.jpg" class="card-img"><br>
                                                <br>
                                            <label>.cloud</label>
                                                <div class="card-body">
                                                <br>
                                                <br>
                                                <p class="card=title">Modern business runs on the  <label>.cloud</label></p>
                                                <br>
                                                <br>
                                                <span>Starting at</span>
                                                <h2 style="margin-top:-5px">‪₹ 383.85*‬</h2>
                                                <br>
                                                <br>
                                                <button type="submit" name="Add" class="btn btn-info" style="width:100%; margin-bottom:25px">Check Availability</button>
                                                <input type="hidden" name="item_name" value="pro 1">
                                                <input type="hidden" name="item_price" value="150">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <div class="col-lg-3 col1">
                                        <form action="http://localhost:8080/manu/cartwebhost.php" method="POST">
                                            <div class="card">
                                            <img src="img5.jpg" class="card-img"><br>
                                                <br>
                                                <label>.blog</label>
                                                <div class="card-body">
                                                <br>
                                                <br>
                                                <p class="card=title">Give your <label>.blog</label> a custom web address.</p>
                                                <br>
                                                <br>
                                                <span>Starting at</span>
                                                <h2 style="margin-top:-5px">‪‬</h2>
                                                <br>
                                                <br>
                                                <button type="submit" name="Add" class="btn btn-info" style="width:100%; margin-bottom:25px">Check Availability</button>
                                                <input type="hidden" name="item_name" value="pro 2">
                                                <input type="hidden" name="item_price" value="150">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <div class="col-lg-3 col1">
                                        <form action="http://localhost:8080/manu/cartwebhost.php" method="POST">
                                            <div class="card">
                                            <img src="img3.jpg" class="card-img"><br>
                                                <br>
                                                <label>.com</label>
                                                <div class="card-body">
                                                <br>
                                                <br>
                                                <p class="card=title">Get the world's most popular domain</p>
                                                <br>
                                                <br>
                                                <span>Starting at</span>
                                                <h2 style="margin-top:-5px">‪₹ 499.00*‬</h2>
                                                <br>
                                                <br>
                                                <button type="submit" name="Add" class="btn btn-info" style="width:100%; margin-bottom:28px">Check Availability</button>
                                                <input type="hidden" name="item_name" value="pro 3">
                                                <input type="hidden" name="item_price" value="150">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <div class="col-lg-3 col1">
                                        <form action="http://localhost:8080/manu/cartwebhost.php" method="POST">
                                            <div class="card">
                                            <img src="img4.jpg" class="card-img"><br>
                                                <br>
                                                <label>.digital</label>
                                                <div class="card-body">
                                                <br>
                                                <br>
                                                <p class="card=title"><label>.digital</label> is the place for downloads</p>
                                                <br>
                                                <br>
                                                <br>
                                                <span>Starting at</span>
                                                <h2 style="margin-top:-5px">‪‪₹ 153.08*‬‬</h2>
                                                <br>
                                                <br>
                                                <button type="submit" name="Add" class="btn btn-info" style="width:100%; margin-bottom:23px">Check Availability</button>
                                                <input type="hidden" name="item_name" value="pro 4">
                                                <input type="hidden" name="item_price" value="150">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <br><br>       
<?php
include ("footer.php");
?>

