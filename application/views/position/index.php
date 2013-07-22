<div class="span9">
	<h1 class="page-title">
		<i class="icon-home"></i>
		Positions
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
						<th>Position</th>
						<th>Location</th>
						<th>Company</th>
						<th>Applicants</th>
					</tr>
				</thead>
				<tbody>
					<? foreach($positions as $position) { ?>
					<tr>
						<td><? echo $position->id; ?></td>
						<td><? echo $position->title; ?></td>
						<td><? echo $position->location; ?></td>
						<td><? echo $position->company->get()->name; ?></td>
						<td>13</td>
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
			<a class="btn" href="/positions/add">Add Position</a>
		</div>
	</div>
</div>
</div>