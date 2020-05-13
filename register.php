<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Log in to the System</title>
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    body {
		font-family: 'Varela Round', sans-serif;
	}
	.modal-login {
        margin-top: 75px;
		color: #636363;
		width: 377px;
	}
	.modal-login .modal-content {
		padding: 20px;
		border-radius: 5px;
		border: none;
	}
	.modal-login .modal-header {
		border-bottom: none;
		position: relative;
		justify-content: center;
	}
	.modal-login h4 {
		text-align: center;
		font-size: 26px;
	}
	.modal-login  .form-group {
		position: relative;
	}
	.modal-login i {
		position: absolute;
		left: 13px;
		top: 11px;
		font-size: 18px;
	}
	.modal-login .form-control {
		padding-left: 40px;
	}
	.modal-login .form-control:focus {
		border-color: #00ce81;
	}
	.modal-login .form-control, .modal-login .btn {
		min-height: 40px;
		border-radius: 3px; 
	}
	.modal-login .hint-text {
		text-align: center;
		padding-top: 10px;
	}
	.modal-login .close {
        position: absolute;
		top: -5px;
		right: -5px;
	}
	.modal-login .btn {
		background: #00ce81;
		border: none;
		line-height: normal;
	}
	.modal-login .btn:hover, .modal-login .btn:focus {
		background: #00bf78;
	}
	.modal-login .modal-footer {
		background: #ecf0f1;
		border-color: #dee4e7;
		text-align: center;
		margin: 0 -20px -20px;
		border-radius: 5px;
		font-size: 13px;
		justify-content: center;
	}
	.modal-login .modal-footer a {
		color: #999;
	}
	.trigger-btn {
		display: inline-block;
		margin: 100px auto;
	}
</style>
</head>
<body  style="background-image:url(images/courses_background.jpg)">

<!-- Modal HTML -->
<div>
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Register</h4>
			</div>

      	<div class="panel-heading ">
		  		<?php echo display_error(); ?>
			  </div>

			<div class="modal-body">
				<form method="post" action="register.php">
					<div class="form-group">
						<i class="fa fa-user"></i>
						<input type="text" class="form-control" name="username" value="<?php echo $username; ?>" placeholder="Username" required="required">
					</div>
					<div class="form-group">
						<i class="fa fa-envelope"></i>
						<input type="email" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="Email" required="required">					
					</div>
					<div class="form-group">
						<i class="fa fa-lock"></i>
						<input type="password" name="password_1" class="form-control"  placeholder="Password" required="required">					
					</div>
					<div class="form-group">
						<i class="fa fa-lock"></i>
						<input type="password" name="password_2" class="form-control" placeholder="Confirm Password" required="required">					
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary btn-block btn-lg" name="register_btn" value="Register">
					</div>
				</form>					
			</div>
			<div class="modal-footer">
           Already a member? <a href="login.php">Sign in</a>
			</div>
		</div>
	</div>
</div>     
</body>
</html>                            