<div class="content">
	<div class="container-fluid">
		<?php
		if (isset($complaints) && count($complaints))
		{
			foreach ($complaints as $complaint)
			{
				?>
				<div class="row">
					<div class="col-md-12">
						<div class="card m-b-20">
							<div class="card-header">
								<?=$complaint->complaint_title;?>
							</div>
							<div class="card-body">
								<blockquote class="card-bodyquote">
									<p><?=$complaint->complaint_message;?></p>
									<div class="card-footer">Added by <cite title="Source Title"><?=$complaint->complaint_creator;?> | <?=$complaint->complaint_date;?></cite>
									</div>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
				<?php
			}
		}
		?>
	</div>
</div>