<?php include('header.php');
?>

<style>
    .sidebar-container {
  position: fixed;
  width: 220px;
  height: 100%;
  left: 0;
  overflow-x: hidden;
  overflow-y: auto;
  background: #1a1a1a;
  color: #fff;
}

.content-container {
  padding-top: 20px;
}

.sidebar-logo {
  padding: 10px 15px 10px 30px;
  font-size: 20px;
  background-color: #2574A9;
}

.sidebar-navigation {
  padding: 0;
  margin: 0;
  list-style-type: none;
  position: relative;
}

.sidebar-navigation li {
  background-color: transparent;
  position: relative;
  display: inline-block;
  width: 100%;
  line-height: 20px;
}

.sidebar-navigation li a {
  padding: 10px 15px 10px 30px;
  display: block;
  color: #fff;
}

.sidebar-navigation li .fa {
  margin-right: 10px;
}

.sidebar-navigation li a:active,
.sidebar-navigation li a:hover,
.sidebar-navigation li a:focus {
  text-decoration: none;
  outline: none;
}

.sidebar-navigation li::before {
  background-color: #2574A9;
  position: absolute;
  content: '';
  height: 100%;
  left: 0;
  top: 0;
  -webkit-transition: width 0.2s ease-in;
  transition: width 0.2s ease-in;
  width: 3px;
  z-index: -1;
}

.sidebar-navigation li:hover::before {
  width: 100%;
}

.sidebar-navigation .header {
  font-size: 12px;
  text-transform: uppercase;
  background-color: #151515;
  padding: 10px 15px 10px 30px;
}

.sidebar-navigation .header::before {
  background-color: transparent;
}

.content-container {
  padding-left: 220px;
}
.con {
  width: 80%;
  margin: 20px auto;
}

.p {
  text-align: center;
  font-size: 14px;
  padding-top: 140px;
}
</style>
<div id="top-nav" class="navbar navbar-inverse navbar-static-top" style="background:#191970;color:white;border-color:white;">
    <div class="container-fluid" style="margin-left:10px; margin-right:10px">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="dashboardsidebar.php">Admin Dashboard</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="fa fa-user-circle"></i><span class="caret"></span></a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="http://localhost:8080/manu/hostaccount.php"><i class="fa fa-user-secret"></i> My Profile</a></li>						
                    </ul>
                </li>
                <li style="margin-top:15px">Welcome</li>
                <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="sidebar-container" style="margin-top:-60px;">
  <div class="sidebar-logo" style="margin-top:20px">
    
  </div>
  <ul class="sidebar-navigation">
    <li class="header">Domain</li>
    <li>
      <a href="domainnames.php">
        <i class="fa fa-home" aria-hidden="true"></i>Domain Names
      </a>
    </li>
    <li>
      <a href="newdomain.php">
        <i class="fa fa-home" aria-hidden="true"></i>New Domain Extensions
      </a>
    </li>
    <li>
      <a href="user_list.php">
        <i class="fa fa-tachometer" aria-hidden="true"></i> Users List
      </a>
    </li>
    <li>
      <a href="register.php">
        <i class="fa fa-home" aria-hidden="true"></i> Register
      </a>
    </li>
    <li class="header">Hosting</li>
    <li>
      <a href="hostingpage.php">
        <i class="fa fa-users" aria-hidden="true"></i> Web Hosting
      </a>
    </li>
    <li>
      <a href="hostuser_list.php">
        <i class="fa fa-cog" aria-hidden="true"></i> Users List
      </a>
    </li>
    <li>
      <a href="hostregister.php">
          <i class="fa fa-info-circle" aria-hidden="true"></i>Register
      </a>
    </li>
    <li class="header">Security</li>
    <li>
      <a href="sslname.php">
        <i class="fa fa-users" aria-hidden="true"></i> SSL Hosting
      </a>
    </li>
    <li>
      <a href="ssluser_list.php">
        <i class="fa fa-cog" aria-hidden="true"></i> Users List
      </a>
    </li>
    <li>
      <a href="sslregister.php">
          <i class="fa fa-info-circle" aria-hidden="true"></i>Register
      </a>
    </li>
  </ul>
</div>

<div class="content-container">

  <div class="container-fluid">

    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
        <?php include('card.php')?>
      <h2 style="margin-left:200px; margin-bottom:50px">More tools to grow your business.</h2>
        <a href="newdomain.php" style="text-align:center; text-decoration:none; margin-left:400px; color:white; background:#5DADE2; padding:15px 15px 15px 15px; margin-top:40px">Show New Domains</a>
    </div>
  </div>
</div>

<script src="graph.js"></script>
<script src="../../assets/js/plugins/chartjs.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
</body>

