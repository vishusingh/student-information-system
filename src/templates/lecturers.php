<div class="content">
    <div class="container-fluid">
        <br />
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title m-t-0 text-center">Current Lecturers list</h4>
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
                            <th>Department</th>
                            <th>Date Joined</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
						<?php
                            if (isset($lecturers) && count($lecturers))
							{
								foreach ($lecturers as $lecturer)
								{
									?>
                                    <tr>
                                        <th scope="row"><?= $lecturer->firstname.' '.$lecturer->lastname; ?></th>
                                        <td><?= $lecturer->username; ?></td>
                                        <td><?= $lecturer->email; ?></td>
                                        <td><?= $lecturer->phone; ?></td>
                                        <td><?= $lecturer->department; ?></td>
                                        <td><?= explode(' ', $lecturer->date_added)[0]; ?></td>
                                        <td>
                                            <button class="btn btn-danger"><i class="fa fa-trash-o"></i>
                                            </button>
                                        </td>
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
