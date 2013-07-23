<div class="span9">

	<h1 class="page-title">
		<i class="icon-home"></i>
		Add New Application
	</h1>

	<div class="widget">
		<div class="widget-header">
			<i class="icon-th-list"></i>
			<h3>Properties</h3>
		</div>
		<div class="widget-content">
			<form class="form-horizontal" action="/applications/action_create" method="post">
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="user_id">User</label>
						<div class="controls">
							<select name="user_id">
								<? foreach ($users as $user) { ?> 
								<option value="<? echo $user->id; ?>"><? echo $user->first_name . ' ' . $user->last_name; ?></option>
								<? } ?>
							</select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="position_id">Position</label>
						<div class="controls">
							<select name="position_id">
								<? foreach ($positions as $position) { ?>
								<option value="<? echo $position->id; ?>"><? echo $position->title; ?></option>
								<? } ?>
							</select>
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