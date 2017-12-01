<div class="content">
    <div class="container-fluid">
        <br />
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title m-t-0 text-center">Current Courses</h4>
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
                            <th>Course Name</th>
                            <th>Department</th>
                            <th>Years</th>
                            <th>Date Added</th>
                        </tr>
                        </thead>
                        <tbody>
						<?php
						if (isset($courses) && count($courses))
						{
							foreach ($courses as $course)
							{
								?>
                                <tr>
                                    <th scope="row"><?= $course->name; ?></th>
                                    <td><?= $course->department; ?></td>
                                    <td><?= $course->years; ?></td>
                                    <td><?= $course->date; ?></td>
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
