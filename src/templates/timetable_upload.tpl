{include('header.tpl')}
<div class="content">
	<div class="container-fluid">
		<br />
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="card-box">
					<h4 class="header-title m-t-0 text-center">Timetable Upload</h4>
				</div>
			</div>
			<div class="col-md-3"></div>
		</div>
		<br />

		<div class="row">
			<div class="col-lg-3"></div>
			<div class="col-lg-6">
				<div class="card-box">
					<form enctype="multipart/form-data" role="form" method="post" action="/upload/timetable/">
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

                        {if $success}
							<div class="form-group row">
								<div class="col-12">
									<div class="alert alert-success alert-dismissible fade show" role="alert">File successfully uploaded
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
								</div>
							</div>
						{/if}

						<div class="form-group">
							<label for="desc">Timetable Description</label>
							<input name="description" type="text" class="form-control" id="desc" placeholder="Enter timetable description">
						</div>
						<div class="form-group row">
							<label class="col-2 col-form-label">File input</label>
							<div class="col-10">
								<input type="file" class="form-control" name="file">
							</div>
						</div>
						<button type="submit" class="btn btn-info waves-effect waves-light">Upload</button>
					</form>
				</div>
			</div>
			<div class="col-lg-3"></div>
		</div>
	</div>
</div>
{include('footer.tpl')}
