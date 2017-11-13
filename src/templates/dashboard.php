<!-- Start content -->
<div class="content">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Welcome <?=ucfirst(User::data('username'));?> !</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="#">SIS</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="widget-bg-color-icon card-box">
                    <div class="bg-icon bg-icon-purple pull-left">
                        <i class="mdi mdi-account-multiple text-purple"></i>
                    </div>
                    <div class="text-right">
                        <h3 class="text-dark m-t-10"><b class="counter"><?=$students;?></b></h3>
                        <p class="text-muted mb-0">Students</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="widget-bg-color-icon card-box fadeInDown animated">
                    <div class="bg-icon bg-icon-primary pull-left">
                        <i class="mdi mdi-account-multiple text-info"></i>
                    </div>
                    <div class="text-right">
                        <h3 class="text-dark m-t-10"><b class="counter"><?=$lecturers;?></b></h3>
                        <p class="text-muted mb-0">Lecturers</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="widget-bg-color-icon card-box">
                    <div class="bg-icon bg-icon-danger pull-left">
                        <i class="mdi mdi-account-multiple text-pink"></i>
                    </div>
                    <div class="text-right">
                        <h3 class="text-dark m-t-10"><b class="counter"><?=$admins;?></b></h3>
                        <p class="text-muted mb-0">Administrators</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="widget-bg-color-icon card-box">
                    <div class="bg-icon bg-icon-success pull-left">
                        <i class="mdi mdi-account-multiple text-success"></i>
                    </div>
                    <div class="text-right">
                        <h3 class="text-dark m-t-10"><b class="counter">2</b></h3>
                        <p class="text-muted mb-0">Online</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Latest students' complaints</h4>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="row">
			<?php
			if (isset($complaints) && count($complaints))
			{
				foreach ($complaints as $complaint)
				{
					?>
                    <div class="col-md-4">
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
					<?php
				}
			}
			?>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Latest announcements</h4>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

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
        <!-- end row -->

    </div>
    <!-- end container -->
</div>
<!-- end content -->
