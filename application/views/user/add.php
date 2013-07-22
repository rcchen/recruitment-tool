<div class="span9">

	<h1 class="page-title">
		<i class="icon-home"></i>
		Add New User
	</h1>

	<div class="widget">
		<div class="widget-header">
			<i class="icon-th-list"></i>
			<h3>Properties</h3>
		</div>
		<div class="widget-content">
			<form class="form-horizontal" action="/users/action_create" method="post">
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="first_name">First Name</label>
						<div class="controls">
							<input type="text" class="input-medium" name="first_name" id="first_name">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="last_name">Last Name</label>
						<div class="controls">
							<input type="text" class="input-medium" name="last_name" id="last_name">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="email">Email</label>
						<div class="controls">
							<input type="text" class="input-medium" name="email" id="email">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="password">Password</label>
						<div class="controls">
							<input type="password" class="input-medium" name="password" id="password">
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" class="btn btn-primary">Save</button>
						<button class="btn">Cancel</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div>

</div>
</div>