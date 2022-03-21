<?php 
session_start();
include('db_register.php');
include('header.php');
$query="select * from ssl_users";
$result=mysqli_query($connection,$query);
?>
<title>Account Page</title>
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
</div>s
<div class="container contact">		
	<div class="table-responsive">		
        <div><span style="font-size:20px;">User Account Details:</span></div>
		<table class="table table-boredered">		
			<tr>
                <?php while($row=mysqli_fetch_assoc($result)){?>
				<th>First Name</th>
				<td><?php echo $row['first_name'];?></td>
			</tr>
			<tr>
				<th>Last Nmae</th>
				<td><?php echo $row['last_name'];?></td>
			</tr>
			<tr>
				<th>Email</th>
				<td><?php echo $row['user_email'];?></td>
			</tr>
			<tr>
				<th>SSL</th>
				<td><?php echo $row['ssl_name'];?></td>
			</tr>
            <tr>
                <th><hr style="width:100%; height:10px; background:red; margin-left:-30px; margin-right:-25px"></th>
                <td><hr style="width:100%; height:10px; background:red"></td>
            </tr>
            <?php } ?>
		</table>
	</div>	
</div>	
<?php include('footer.php');?>