<!--START COLUMN 10-->
<div class="col-md-10">

	<!--START ROW-->
	<div class="row">

		<div class="col-md-12">

			<?php 

				if (count($notesResults)) 
				{
				
			?>

			<div class="table-responsive"> 

				<table class="table table-hover table-bordered">

					<thead>

						<tr>

							<th>Name</th>
							<th>Lecturer</th>
							<th>Course</th>
							<th>Semester</th>
							<th>Date Added</th>
							<th>Download</th>
							
						</tr>

					</thead>

					<tbody>						

						<?php

							foreach ($notesResults as $notesResult) 
							{

								echo '<tr>';

								echo '<td>' . $notesResult->name . '</td>';

								echo '<td>' . $notesResult->lecturer . '</td>';

								echo '<td>' . $notesResult->course . '</td>';

								echo '<td>' . $notesResult->semester . '</td>';

								echo '<td>' . explode(' ', $notesResult->timestamp)[0] . '</td>';

								echo '<td><a href="' . baseUrl . $notesResult->simplepath . '" download><span class="fa fa-download"></a></span></td>';

								echo '</tr>';

							}

						?>

					</tbody>

				</table>

			</div>

			<?php 

				}

				else
				{

					echo '<h1><div class="alert alert-info text-center"><p>There are no notes currently</p></div></h1>';

				}

			?>

		</div><!--/col-span-12-->

	</div>
	<!--END ROW-->

</div>
<!--END COLUMN 10-->
