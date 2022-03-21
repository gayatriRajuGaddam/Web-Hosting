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
                                        <li><a href="hostaccount.php"><i class="fa fa-user-secret"></i> My Profile</a></li>						
                                    </ul>
                                </li>
                                <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row flex-row-reverse">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10 mt-5 pt-5">
                        <div class="banner-area pb-30">
                           <h1 style="margin-bottom:20px;">Web Hosting</h1>
                        </div>         
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-lg-3 col1">
                                        <form action="cartwebhost.php" method="POST">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3>Starter</h3>
                                                </div>
                                                <p class="card=title" style="width:100%; margin-top:40px">Low-cost affordable hosting to get you started.</p>
                                                <div class="card-body text-center">
                                                <h4 class="card=title " style="margin-top:40px;">₹ 99.00 /mo</h4>
                                                 <p>With a 3-yr term (50% savings)</p>
                                                 <span>₹ 199.00/mo when you renew4</span>
                                                    <button type="submit" name="Add"  style="width:100%; margin-top:40px; margin-bottom:20px" class="btn btn-info">Add to Cart</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <div class="col-lg-3 col1">
                                        <form action="http://localhost:8080/manu/cartwebhost.php" method="POST">
                                            <div class="card-header">
                                                    <h3>Economy</h3>
                                            </div>
                                            <div class="card">
                                                <div class="card-body text-center">
                                                <p class="card=title"  style="width:100%; margin-top:30px">An economical, 25 GB plan with matching domain and email (with terms of 12/mo. or longer).</p>
                                                <h4 class="card=title " style="margin-top:40px;">₹ 199.00 /mo</h4>
                                                <p>With a 3-yr term (55% savings</p>
                                                 <span>₹ 449.00/mo when you renew4</span>
                                                <button type="submit" name="Add" class="btn btn-info" style="width:100%; margin-top:30px; margin-bottom:20px">Add to Cart</button>
                                                <input type="hidden" name="item_name" value="pro 2">
                                                <input type="hidden" name="item_price" value="150">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <div class="col-lg-3 col1">
                                        <form action="http://localhost:8080/manu/cartwebhost.php" method="POST">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3>Deluxe</h3>
                                                </div>
                                                <div class="card-body text-center">
                                                <p class="card=title"  style="width:100%; margin-top:30px">Multiple site hosting with matching domain and email (for terms of 12/mo. or longer).</p>
                                                <h4 class="card=title " style="margin-top:50px;">₹ 299.00 /mo</h4>
                                                <p>With a 3-yr term (50% savings)</p>
                                                 <span>₹ 599.00/mo when you renew4</span>
                                                <button type="submit" name="Add" class="btn btn-info" style="width:100%; margin-top:30px; margin-bottom:30px">Add to Cart</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <div class="col-lg-3 col1">
                                        <form action="http://localhost:8080/manu/cartwebhost.php" method="POST">
                                            <div class="card-header">
                                                    <h3>Ultimate</h3>
                                            </div>
                                            <div class="card">
                                                <div class="card-body text-center">
                                                <p>Increased processing power with multiple sites, storage and databases. Plus, a matching domain, email and 1 SSL (for terms of 12/mo. or longer).</p>
                                                <h4 class="card=title " style="margin-top:40px;">₹ 449.00 /mo</h4>
                                                <p>With a 3-yr term (55% savings)</p>
                                                 <span>₹ 999.00/mo when you renew4</span>
                                                <button type="submit" name="Add" class="btn btn-info" style="width:100%; margin-top:20px; margin-bottom:30px">Add to Cart</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
<?php
include ("footer.php");
?>

