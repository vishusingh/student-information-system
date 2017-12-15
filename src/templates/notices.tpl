{include('header.tpl')}
<div class="content">
	<div class="container-fluid">
		<!-- Page-Title -->
		<div class="row">
			<div class="col-sm-12">
				<div class="page-title-box">
					<h4 class="page-title">All notices</h4>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>

        {if $delete}
			<div class="alert alert-danger alert-dismissible fade show" role="alert">Notice has been deleted
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
        {/if}

		<div class="row">
			<div class="col-12">
				<div class="card-box table-responsive">
					<table id="notices_datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Notice Title</th>
								<th>Notice Creator</th>
								<th>Date added</th>
								<th>View</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>

	</div>
</div>
{include('footer.tpl')}
