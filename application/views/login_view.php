<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo base_url() ;?>assets/css/login.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>assets/js/jquery-1.7.min.js" type="text/javascript"></script>
<title>Login</title>
</head>

<body>
    <?php echo validation_errors(); ?>
    <?php echo form_open('verifylogin'); ?>
		
		<div class="lg-container">
		<h1>Login</h1>
		<form id="lg-form" name="lg-form" method="post">
			
			<div>
				<label for="username">Username:</label>
				<input type="text" name="username" id="username" placeholder="username"/>
			</div>
			
			<div>
				<label for="password">Password:</label>
				<input type="password" name="password" id="password" placeholder="password" />
			</div>
			
			<div>				
				<button type="submit" id="login">Login</button>
			</div>
			
		</form>
		<div id="message"></div>
	</div>
		<div id="message"></div>
	</div>
 
</body>
</html>