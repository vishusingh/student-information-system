<!--START COLUMN 10-->
<div class="col-md-10">

	<!--START ROW-->
	<div class="row">

		<!--START COLUMN 6 ONE-->
		<div class="col-md-6">

		</div>
		<!--END COLUMN 6 ONE-->

		<!--START COLUMN 6 TWO-->
		<div class="col-md-6">

			<div class="panel panel-default">

				<div class="panel-heading"><h5>Announcements</h5></div>

				<div class="panel-body">
					<p>Content from database here</p>
				</div>

			</div>

			<form action="<?php echo $baseUrl; ?>/home/" method="POST" role="form">

				<?php

					if (isset($errorList)) 
					{
						
						foreach ($errorList as $error) 
						{
							
							echo '<div class="alert alert-danger">' . $error . '</div>';

						}

					}

					if (isset($_GET['status']) && $_GET['status'] == 'complaitsuccess') 
					{
						
						echo '<div class="alert alert-success"><p>Thanks for your feedback</p></div>';

					}

				?>

				<legend><h3>Send in suggestion or complaint</h3></legend>
			
				<div class="form-group">

					<label for="category">Category</label>

					<select class="form-control" name="category" id="category">
						<option></option>
						<option>Lecturer</option>
						<option>Suggestion</option>
						<option>Other</option>
					</select>

				</div>

				<div class="form-group">

					<label for="message">Message</label>

					<textarea class="form-control" name="message" rows="3" id="message"></textarea>

				</div>					
			
				<button type="submit" name="submit" class="btn btn-info">Submit</button>

			</form>

		</div>
		<!--END COLUMN 6 TWO-->

	</div>
	<!--END ROW-->

</div>
<!--END COLUMN 10-->
