<div id="login-container">
	
	
	<div id="login-header">
		
		<h3>Login</h3>
		
	</div> <!-- /login-header -->
	
	<div id="login-content" class="clearfix">
	
	<form action="/login/verify" method="post">
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="email">Email</label>
						<div class="controls">
							<input type="text" class="" id="email" name="email">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="password">Password</label>
						<div class="controls">
							<input type="password" class="" id="password" name="password">
						</div>
					</div>
				</fieldset>
				
				<!-- <div id="remember-me" class="pull-left">
					<input type="checkbox" name="remember" id="remember" />
					<label id="remember-label" for="remember">Remember Me</label>
				</div> -->
				
				<div class="pull-right">
					<button type="submit" class="btn btn-warning btn-large">
						Login
					</button>
				</div>
			</form>
			
		</div> <!-- /login-content -->
		
		
		<div id="login-extra">
			
			<p>Don't have an account? <a href="javascript:;">Sign Up.</a></p>
			
			<p>Remind Password? <a href="forgot_password.html">Retrieve.</a></p>
			
		</div> <!-- /login-extra -->
	
</div> <!-- /login-wrapper -->