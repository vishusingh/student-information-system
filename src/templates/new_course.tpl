{include('header.tpl')}
<div class="content">
	<div class="container-fluid">
		<br />
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="card-box">
					<h4 class="header-title m-t-0 text-center">Add New Course</h4>
				</div>
			</div>
			<div class="col-md-3"></div>
		</div>
		<br />

		<div class="row">
			<div class="col-lg-3"></div>
			<div class="col-lg-6">
				<div class="card-box">
					<form role="form" method="post" action="/courses/new/">
						{if $errorCounter > 0}
							{foreach $errors error}
								<div class="form-group row">
									<div class="col-12">
										<div class="alert alert-danger alert-dismissible fade show" role="alert">{$error}
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
									</div>
								</div>
							{/foreach}
                        {/if}
						<div class="form-group">
							<label for="coursename">Course name</label>
							<input name="courseName" type="text" class="form-control" id="coursename" placeholder="Enter course name">
						</div>
						<div class="form-group">
							<label for="department">Department</label>
							<input name="department" type="text" class="form-control" id="department" placeholder="Enter course department">
						</div>
						<div class="form-group">
							<label for="years">Years</label>
							<input name="years" type="number" class="form-control" id="years">
						</div>
						<button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
					</form>
				</div>
			</div>
			<div class="col-lg-3"></div>
		</div>
	</div>
</div>
{include('footer.tpl')}
