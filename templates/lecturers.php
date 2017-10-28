<div class="breadcrumb-holder">
	<div class="container-fluid">
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="/dashboard/">Dashboard</a></li>
			<li class="breadcrumb-item active">Lecturers</li>
		</ul>
	</div>
</div>
<section class="forms">
	<div class="container-fluid">
		<header>
			<h1 class="h3 display">Lecturers</h1>
		</header>
		<div class="col-lg-12">
			<div class="card">
				<div class="card-header d-flex align-items-center">
					<h2 class="h5 display">Lecturers List</h2>
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
						foreach ($lecturerResults as $lecturerResult)
						{?>
							<tr>
								<td><?=$lecturerResult->lecturer_id;?></td>
								<td><?=$lecturerResult->firstname.' '.$lecturerResult->lastname;?></td>
								<td><?=$lecturerResult->username;?></td>
								<td><?=$lecturerResult->email;?></td>
								<td><?=$lecturerResult->phone;?></td>
								<td><?=$lecturerResult->joined_at;?></td>
							</tr>
						<?php }?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
