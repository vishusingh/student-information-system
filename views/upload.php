<div class="container">

	<ol class="breadcrumb" style="margin-bottom: 15px;">
		<li><a href="/">Home</a></li>
		<li class="active">Upload</li>
	</ol>

	<div class="row">

		<div class="col-md-6">

			<?php

				if (isset($errorListNotes))
				{

					foreach ($errorListNotes as $errorNotes) 
					{

						echo '<div class="alert alert-danger">' . $errorNotes . '</div>';

					}

				}

				if (isset($_GET["notestatus"]) AND $_GET["notestatus"] == "success") 
				{

					echo '<div class="alert alert-success"><p>Your file was uploaded successfully</p></div>';

				}

			?>

			<form action="<?php echo $baseUrl; ?>/content/upload/" method="POST" enctype="multipart/form-data" role="form">

				<legend>Upload Notes</legend>	

				<div class="form-group">
					<label for="name">Name For Notes</label>
					<input type="text" name="name" class="form-control" id="name" placeholder="Add name for the notes">
				</div>

				<div class="form-group">

					<label for="lecturer">Lecturer</label>

					<select class="form-control" name="lecturer" id="lecturer">

					<option></option>

					<?php

						foreach ($lecturers as $lecturer) 
						{

							echo "<option>{$lecturer->name}</option>";
							
						}

					?>

					</select>

				</div>

				<div class="form-group">

					<label for="course">Course</label>

					<select class="form-control" name="course" id="course">

					<option></option>

					<?php

						foreach ($courses as $course) 
						{

							echo "<option>{$course->course_name}</option>";
							
						}

					?>

					</select>

				</div>

				<div class="form-group">

					<label for="year">Year</label>

					<select class="form-control" name="year" id="year">

						<option></option>
						<option>1</option>						
						<option>2</option>
						<option>3</option>
						<option>4</option>
						
					</select>

				</div>

				<div class="form-group">

					<label for="semester">Semester</label>

					<select class="form-control" name="semester" id="semester">

						<option></option>
						<option>1</option>						
						<option>2</option>
						
					</select>

				</div>

				<input type="file" class="filestyle" name="file" data-buttonBefore="true">

				<hr>

				<button type="submit" name="submitnotes" class="btn btn-info">Upload Notes</button>

			</form>

		</div>

		<div class="col-md-6">

			<?php

				if (isset($errorListTimeTable))
				{

					foreach ($errorListTimeTable as $errorTimetable) 
					{

						echo '<div class="alert alert-danger">' . $errorTimetable . '</div>';

					}

				}

				if (isset($_GET["timetablestatus"]) AND $_GET["timetablestatus"] == "success") 
				{

					echo '<div class="alert alert-success"><p>Your file was uploaded successfully</p></div>';

				}

			?>

			<form action="<?php echo $baseUrl; ?>/content/upload/" method="POST" enctype="multipart/form-data" role="form">

				<legend>Upload Timetable</legend>	

				<div class="form-group">
					<label for="name1">Name For Timetable</label>
					<input type="text" name="name" class="form-control" id="name1" placeholder="Add name for the Timetable">
				</div>

				<div class="form-group">

					<label for="uploadedby">Uploaded By</label>

					<select class="form-control" name="lecturer" id="uploadedby">

					<option></option>

					<?php

						foreach ($lecturers as $lecturer) 
						{

							echo "<option>{$lecturer->name}</option>";
							
						}

					?>

					</select>

				</div>

				<div class="form-group">

					<label for="year1">Year</label>

					<select class="form-control" name="year" id="year1">

						<option><?php echo date('Y'); ?></option>
						<option><?php echo date('Y') + 1 ; ?></option>
						
					</select>

				</div>

				<input type="file" class="filestyle" name="file" data-buttonBefore="true">

				<hr>

				<button type="submit" name="submittimetable" class="btn btn-info">Upload Timetable</button>

			</form>

		</div>

	</div>

</div>