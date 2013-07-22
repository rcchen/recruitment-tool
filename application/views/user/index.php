<div class="span9">
	
	<h1 class="page-title">
		<i class="icon-user"></i>
		Users
	</h1>

	<div class="widget widget-table">
		<div class="widget-header">
			<i class="icon-th-list"></i>
			<h3>Registered</h3>
		</div>
		<div class="widget-content">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>First</th>
						<th>Last</th>
						<th>Email</th>
						<th>Role</th>
					</tr>
				</thead>
				<tbody>
					<? foreach($users as $user) { ?>
					<tr>
						<td><? echo $user->first_name; ?></td>
						<td><? echo $user->last_name; ?></td>
						<td><? echo $user->email; ?></td>
						<td>TBD</td>
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
			<a class="btn" href="/users/add">Add User</a>
		</div>
	</div>

</div>
</div>