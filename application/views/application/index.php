<div class="span9">
	<h1 class="page-title">
		<i class="icon-home"></i>
		Applications
	</h1>
	<div class="widget widget-table">
		<div class="widget-header">
			<i class="icon-th-list"></i>
			<h3>Table</h3>
		</div>
		<div class="widget-content">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>#</th>
						<th>Applicant Name</th>
						<th>Position</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<? foreach($applications as $application) { ?>
					<tr>
						<td><? echo $application->id; ?></td>
						<td><? echo $application->user->get()->first_name . ' ' . $application->user->get()->last_name; ?></td>
						<td><? echo $application->position->get()->title; ?></td>
						<td>None</td>
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
			<a class="btn" href="/applications/add">Add Application</a>
		</div>
	</div>
</div>
</div>