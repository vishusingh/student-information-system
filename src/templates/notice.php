<div class="content">
	<div class="container-fluid">
		<?php
		if (isset($notices) && count($notices))
		{
			foreach ($notices as $notice)
			{
				?>
				<div class="row">
					<div class="col-md-12">
						<div class="card m-b-20">
							<div class="card-header">
								<?=$notice->notice_title;?>
							</div>
							<div class="card-body">
								<blockquote class="card-bodyquote">
									<p><?=$notice->notice_message;?></p>
									<div class="card-footer">Added by <cite title="Source Title"><?=$notice->notice_creator;?> | <?=$notice->notice_date;?></cite>
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