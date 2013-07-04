<?php ?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		
	</title>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

	<?php
		//echo $this->Html->meta('icon');

		echo $this->Html->css('admin/css/bootstrap.min');
		echo $this->Html->css('admin/css/bootstrap-responsive.min');
		echo $this->Html->css('admin/css/font-awesome');
		echo $this->Html->css('admin/css/base-admin');
		echo $this->Html->css('admin/css/pages/signin');
	?>
</head>
<body>

	<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="./">
				Base Admin				
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					
					<li class="">						
						<a href="./signup.html" class="">
							Create an Account
						</a>
						
					</li>
					
					<li class="">						
						<a href="./" class="">
							<i class="icon-chevron-left"></i>
							Back to Homepage
						</a>
						
					</li>
				</ul>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->



<div class="account-container">
	
	<div class="content clearfix">
		
		<form action="./" method="post">
		
			<h1>Sign In</h1>		
			
			<div class="login-fields">
				
				<p>Sign in using your registered account:</p>
				
				<div class="field">
					<label for="username">Username:</label>
					<input type="text" id="username" name="username" value="" placeholder="Username" class="login username-field" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" value="" placeholder="Password" class="login password-field"/>
				</div> <!-- /password -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				<span class="login-checkbox">
					<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
					<label class="choice" for="Field">Keep me signed in</label>
				</span>
									
				<button class="button btn btn-warning btn-large">Sign In</button>
				
			</div> <!-- .actions -->
			
			<div class="login-social">
				<p>Sign in using social network:</p>
				
				<div class="twitter">
					<a href="#" class="btn_1">Login with Twitter</a>				
				</div>
				
				<div class="fb">
					<a href="#" class="btn_2">Login with Facebook</a>				
				</div>
			</div>
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->


<!-- Text Under Box -->
<div class="login-extra">
	Don't have an account? <a href="./signup.html">Sign Up</a><br/>
	Remind <a href="#">Password</a>
</div> <!-- /login-extra -->

	

			<?php // echo $this->Session->flash(); ?>

			<?php //echo $this->fetch('content'); ?>
            
            <?php 
			echo $this->Html->script('admin/jquery-1.7.2.min');
			echo $this->Html->script('admin/bootstrap');
			echo $this->Html->script('admin/signin');
			?>
	
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
