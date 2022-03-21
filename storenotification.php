<!DOCTYPE html>
<html lang="en" >

<head>
<meta charset="UTF-8">
<title>Notification</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/index.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300'>
<style>

</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>
<body>
<div id="top-nav" class="navbar navbar-inverse navbar-static-top" style="background:#191970;color:white;border-color:white; width:100%">
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
  
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/parsley.js/1.2.2/parsley.min.js'></script>

<?php   
include 'db_register.php';
if(isset($_POST['edit'])){
$firstname = $_POST['first_name'];
$lastname  = $_POST['last_name'];
$email 	   = $_POST['user_email'];
$domainname = $_POST['domain_name'];
$date      = date("Y/m/d");
$expdate   = date('Y/m/d', strtotime('+1 years'));
$fetch = "INSERT INTO user (`first_name`, `last_name`, `user_mail`,`domain_name`, `purchase_date`, 'expiry_date`) VALUES ('$firstname','$lastname','$email','$domainname','$date','$expdate')";
$fire = mysqli_query($connection,$fetch);
}
?>

<div class="container">
  <h2 style="margin-bottom:20px">Notification Status</h2>           
  <table class="table table-hover">
    <thead>
      <tr class="info">
        <th>First NSame</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Domain</th>
		<th>Registration Date</th>
        <th>Expiration Date</th>
		<th>Status</th>
      </tr>
    </thead>
    <tbody>
<?php
$fetchqry = "SELECT * FROM user";
$result=mysqli_query($connection,$fetchqry);
$num=mysqli_num_rows($result);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
	   <tr>
        <td><?php echo $row['first_name'];?></td>
        <td><?php echo $row['last_name'];?></td>
		<td><?php echo $row['user_email'];?></td>
        <td><?php echo $row['domain_name'];?></td>
        <td><?php echo $date1 = $row['purchase_date'];?></td>
		<td><?php echo $date2 = $row['expiry_date'];?></td>
		<td><?php if(strtotime(date("Y/m/d")) < strtotime($date2)) echo "Active"; else { echo "Expired";} ?></td>
      </tr>											<?php } ?>
    </tbody>
  </table>
</div>
</body>
</html>