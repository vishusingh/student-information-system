<div class="breadcrumb-holder">
	<div class="container-fluid">
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="/dashboard/">Dashboard</a></li>
			<li class="breadcrumb-item active">Administrators</li>
		</ul>
	</div>
</div>
<section class="forms">
	<div class="container-fluid">
		<header>
			<h1 class="h3 display">Administrators</h1>
		</header>
		<div class="col-lg-12">
			<div class="card">
				<div class="card-header d-flex align-items-center">
					<h2 class="h5 display">Adminstrators List</h2>
				</div>
				<div class="card-block">
					<table class="table table-striped table-hover">
						<thead>
						<tr>
							<th><i class="icon_profile"></i> ID</th>
							<th><i class="icon_pin_alt"></i> Name</th>
							<th><i class="icon_calendar"></i> Username</th>
							<th><i class="icon_mail_alt"></i> Email</th>
							<th><i class="icon_cogs"></i> Phone</th>
							<th><i class="icon_cogs"></i> Joined</th>
						</tr>
						</thead>
						<tbody>
						<?php
						foreach ($adminResults as $adminResult)
						{?>
							<tr>
								<td><?=$adminResult->admin_id;?></td>
								<td><?=$adminResult->firstname.' '.$adminResult->lastname;?></td>
								<td><?=$adminResult->username;?></td>
								<td><?=$adminResult->email;?></td>
								<td><?=$adminResult->phonenumber;?></td>
								<td><?=$adminResult->joined_at;?></td>
							</tr>
						<?php }?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
