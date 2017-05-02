<!--START COLUMN 10-->
<div class="col-md-10">

	<!--START ROW-->
	<div class="row">

		<div class="col-md-12">

			<?php 

				if (count($timeTableResults)) 
				{
				
			?>

			<div class="table-responsive"> 

				<table class="table table-hover table-bordered">

					<thead>

						<tr>

							<th>Timetable Name</th>
							<th>Added By</th>
							<th>Date Added</th>
							<th>Download</th>
							
						</tr>

					</thead>

					<tbody>						

						<?php

							foreach ($timeTableResults as $timeTableResult) 
							{

								echo '<tr>';

								echo '<td>' . $timeTableResult->name . '</td>';

								echo '<td>' . $timeTableResult->addedby . '</td>';

								echo '<td>' . explode(' ', $timeTableResult->timestamp)[0] . '</td>';

								echo '<td><a href="' . baseUrl . $timeTableResult->simplepath . '" download><span class="fa fa-download"></a></span></td>';

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

					echo '<h1><div class="alert alert-info text-center"><p>There are no timetables currently</p></div></h1>';

				}

			?>

		</div><!--/col-span-12-->

	</div>
	<!--END ROW-->

</div>
<!--END COLUMN 10-->
