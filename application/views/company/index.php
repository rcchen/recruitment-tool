<div class="span9">
	
	<h1 class="page-title">
		<i class="icon-user"></i>
		Companies
	</h1>

	<div class="widget widget-table">
		<div class="widget-header">
			<i class="icon-th-list"></i>
			<h3>Active</h3>
		</div>
		<div class="widget-content">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Name</th>
						<th>URL</th>
						<th>Positions</th>
					</tr>
				</thead>
				<tbody>
					<? foreach($companies as $company) { ?>
					<tr>
						<td><? echo $company->name; ?></td>
						<td><? echo $company->url; ?></td>
						<td><? echo $company->position->get()->count(); ?></td>
					</tr>
					<? } ?>
				</tbody>
			</table>
		</div>
	</div>

	<div class="widget">
		<div class="widget-header">
			<i class="icon-th-list"></i>
			<h3>Actions</h3>
		</div>
		<div class="widget-content">
			<a class="btn" href="/companies/add">Add Company</a>
		</div>
	</div>

</div>
</div>