<?php /*
include('class/User.php');
$user = new User();
$errorMessage = '';
if(!empty($_POST['forgetpassword']) && $_POST['forgetpassword']) {
	$errorMessage =  $user->resetPassword();
}*/
include('header.php');
?>
<style>
    .panel{
        margin-left: 50%;
        width:100%;
        margin-top: 15%;
    }
</style>
<title>forget Pass Page</title>
<?php include('container.php');?>
<div class="container contact">		
	<div class="col-md-6">                    
		<div class="panel panel-info" >
			<div class="panel-heading">
				<div class="panel-title">Forget Password</div>                        
			</div> 
			<div style="padding-top:30px" class="panel-body" >
					<div id="login-alert" class="alert alert-danger col-sm-12"></div>                            
				<form id="loginform" class="form-horizontal" role="form" method="POST" action="">                                    
					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="email" class="form-control" id="email" name="email"  placeholder="email" required>                                        
					</div>				
					<div style="margin-top:10px" class="form-group">                               
						<div class="col-sm-12 controls">
						  <input type="submit" name="forgetpassword" value="Submit" class="btn btn-info">						  
						</div>						
					</div>
					<div class="form-group">
						<div class="col-md-12 control">
							<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
								If You've already an account! 
							<a href="login.php">
								Log In 
							</a>Here
							</div>
						</div>
					</div>  	
				</form>   
			</div>                     
		</div>  
	</div>
</div>	
<?php include('footer.php');?>