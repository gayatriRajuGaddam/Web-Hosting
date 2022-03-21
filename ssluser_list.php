<?php 

session_start();
include("db_register.php");

$query = "select * from ssl_users";
$result = mysqli_query($connection, $query)
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="custom_style.css">
</head>
<body>
<div id="top-nav" class="navbar navbar-inverse navbar-static-top" style="background:#191970;color:white;border-color:white;">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="dashboardsidebar.php" style="margin-left:25px; font-weight:bold; color:white; text-decoration:none">Dashboard</a>
        </div>
    </div>
</div>
<div class="conntainer" style="margin-left:60px; margin-top:20px">	
	<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">   
		<a href="#" style="font-size:25px; text-decoration:none; font-weight:bold"> User List</strong></a>
		<hr>
        <div class="row">
                <div class="col">
                    <div class="panel-heading " style="margin-top:20px">
                        <div class="row">
                            <div class="col-5">

                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped active" role="progressbar"
                                          aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                            40%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-heading " style="margin-top:-20px">
                        <div class="row">
                            <div class="col-md-2" align="right">
                                <a class="btn btn-success" href="add_ssluser.php" style="color:white; width:100%; margin-left:900px; margin-bottom:20px; text-decoration:none">Add</a>
                            </div>
                        </div>
                    </div>
                    <?php
                    if(isset($_SESSION['result'])){
                        if($_SESSION['result'] == true){
                            echo "Project Created Successfully";
                        }
                        else{
                            echo "Error in creating project";
                        }
                        unset($_SESSION['result']);
                    }

                    if(isset($_SESSION['result_update'])){
                        if($_SESSION['result_update'] == true){
                            echo "Project updated Successfully";
                        }
                        else{
                            echo "Error in updating project";
                        }
                        unset($_SESSION['result_update']);
                    }

                    if(isset($_SESSION['result_delete'])){
                        if($_SESSION['result_delete'] == true){
                            //echo "Project deleted Successfully";
                        }
                        else{
                            echo "Error in deleting project";
                        }
                        unset($_SESSION['result_delete']);
                    }
                    ?>
                    <br>	
		<table class="table table-bordered table-striped" style="border:1px solid gray;">
			<thead >
				<tr >
					<th >ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>SSl</th>					
					<th>Purchase Date</th>
					<th>Expiry Date</th>
				</tr>
			</thead>
				<?php while($row=mysqli_fetch_assoc($result)){?>
				<tr>
				    <td><?php echo $row['id'];?></td>
				    <td><?php echo $row['first_name'];?></td>
					<td><?php echo $row['last_name'];?></td>
					<td><?php echo $row['user_email'];?></td>
					<td><?php echo $row['ssl_name'];?></td>
					<td><?php echo $row['purchase_date'];?></td>
					<td><?php echo $row['expiry_date'];?></td>
					<td>
                        <a href="view_ssluser.php?user_id=<?php echo $row['id'] ?>" class="btn btn-primary">View</a>
                        <a href="ssledit_account.php?user_id=<?php echo $row['id'] ?>" class="btn btn-success">Edit</a>
                        <a href="delete_ssl.php?user_id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
				</tr>
                <?php }?>
			
		</table>
	</div>
	
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>	
<?php include('footer.php');?>