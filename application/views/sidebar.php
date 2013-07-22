<div id="content">
	
	<div class="container">
		
		<div class="row">
			
			<div class="span3">
				
				<div class="account-container">
				
					<!-- <div class="account-avatar">
						<img src="./img/headshot.png" alt="" class="thumbnail" />
					</div> -->

					<? if ($user) { ?>

					<div class="account-details">
					
						<span class="account-name"><? echo $user->first_name . ' ' . $user->last_name; ?></span>
						
						<span class="account-role">Administrator</span>
						
						<span class="account-actions">
							<a href="javascript:;">Profile</a> |
							
							<a href="javascript:;">Edit Settings</a>
						</span>
					
					</div> <!-- /account-details -->

					<? } ?>
				
				</div> <!-- /account-container -->
				
				<hr />
				
				<ul id="main-nav" class="nav nav-tabs nav-stacked">
					
					<li <? if ($sidebar_active == 'dashboard') { echo 'class="active"'; } ?>>
						<a href="/dashboard">
							<i class="icon-dashboard"></i>
							Dashboard 		
						</a>
					</li>
					
					<li <? if ($sidebar_active == 'users') { echo 'class="active"'; } ?>>
						<a href="/users">
							<i class="icon-user"></i>
							Users	
						</a>
					</li>
					
					<li>
						<a href="./plans.html">
							<i class="icon-th-list"></i>
							Positions		
						</a>
					</li>
					
				</ul>	
				
				<hr />
				
				<div class="sidebar-extra">
					<p>Thanks for participating in the Athena beta program. If there's anything that you think should be built into the system, feel free to reach out to us!</p>
				</div> <!-- .sidebar-extra -->
				
				<br />
		
			</div> <!-- /span3 -->