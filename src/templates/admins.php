<div class="content">
    <div class="container-fluid">
        <br />
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title m-t-0 text-center">Current Admins list</h4>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
        <br />

        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <table class="table">
                        <thead class="thead-default">
                        <tr>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Date Joined</th>
                        </tr>
                        </thead>
                        <tbody>
						<?php
						if (isset($admins) && count($admins))
						{
							foreach ($admins as $admin)
							{
								?>
                                <tr>
                                    <th scope="row"><?= $admin->firstname.' '.$admin->lastname; ?></th>
                                    <td><?= $admin->username; ?></td>
                                    <td><?= $admin->email; ?></td>
                                    <td><?= $admin->phone; ?></td>
                                    <td><?= explode(' ', $admin->date_added)[0]; ?></td>
                                </tr>
								<?php
							}
						}
						?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
