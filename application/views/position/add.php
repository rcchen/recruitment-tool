<div class="span9">

	<h1 class="page-title">
		<i class="icon-home"></i>
		Add New Position
	</h1>

	<div class="widget">
		<div class="widget-header">
			<i class="icon-th-list"></i>
			<h3>Properties</h3>
		</div>
		<div class="widget-content">
			<form class="form-horizontal" action="/positions/action_create" method="post">
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="position">Title</label>
						<div class="controls">
							<input type="text" class="input-medium" name="title" id="title">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="url">Location</label>
						<div class="controls">
							<input type="text" class="input-medium" name="location" id="location">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="company_id">Company</label>
						<div class="controls">
							<select name="company_id">
								<? foreach ($companies as $company) { ?>
								<option value="<? echo $company->id; ?>"><? echo $company->name; ?></option>
								<? } ?>
							</select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="description">Description</label>
						<div class="controls">
							<textarea name="description"></textarea>
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