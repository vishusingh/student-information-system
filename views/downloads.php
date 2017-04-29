<!--START COLUMN 10-->
<div class="col-md-10">

	<!--START ROW-->
	<div class="row">

		<div class="col-md-12">

			<div class="table-responsive"> 

				<table class="table table-hover table-bordered">

					<thead>

						<tr>

							<th>No.</th>
							<th>Name</th>
							<th>Lecturer</th>
							<th>Course</th>
							<th>Semester</th>
							<th>Download</th>
							
						</tr>

					</thead>

					<tbody>						

						<?php

							foreach ($results as $result) 
							{

								echo '<tr>';

								echo '<td>' . $result->id . '</td>';

								echo '<td>' . $result->name . '</td>';

								echo '<td>' . $result->lecturer . '</td>';

								echo '<td>' . $result->course . '</td>';

								echo '<td>' . $result->semester . '</td>';

								echo '<td><a href="" download><span class="fa fa-download"></a></span></td>';

								echo '</tr>';

							}

						?>

					</tbody>

				</table>

			</div>

		</div><!--/col-span-12-->

	</div>
	<!--END ROW-->

</div>
<!--END COLUMN 10-->
