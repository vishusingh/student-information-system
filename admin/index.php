<!DOCTYPE html>
<html lang="en-US">
	<head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>SIS | ADMIN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/home.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
        
        <!-- Header -->
		<?php include '../includes/admin/head.php'; ?>
		<!-- /Header -->

		<!-- Main -->
		<div class="container">
		<div class="row">
			<!-- start col-3 -->
			<div class="col-md-3">
			  <!-- Left column -->
			  
			  <ul class="list-unstyled">
				<li class="nav-header">
					<ul style="height: auto;" class="list-unstyled in" id="userMenu">
						<li class="active"> <a href="#"><i class="fa fa-home"></i> Home</a></li>
						<li><a href="/content/addstudent"><i class="fa fa-user"></i> Add New Student</a></li>
						<li><a href="/content/timetables"><i class="fa fa-table"></i> Timetables</a></li>
						<li><a href="/content/results"><i class="fa fa-search"></i> Results</a></li>
						<li><a href="/content/marks"><i class="fa fa-percent"></i> Feed In Marks</a></li>
						<li><a href="/content/students"><i class="fa fa-group"></i> Students</a></li>
						<li><a href="/content/notes"><i class="fa fa-list-alt"></i> Notes</a></li>
						<li><a href="/content/upload"><i class="fa fa-upload"></i> Upload Notes</a></li>
						<li><a href="/content/download"><i class="fa fa-download"></i> Download Notes</a></li>
					</ul>
				</li>
			  </ul>
			</div>
			<!-- end col-3 -->

			<div class="col-md-9">
				
			  <!-- column 2 -->			  
				<div class="row">
				   
					
				  
					<!-- center left-->	
					<div class="col-md-6">
					  <div class="well">Inbox Messages <span class="badge pull-right">3</span></div>
					  
					  <hr>
					  
					  <div class="btn-group btn-group-justified">
						<a href="#" class="btn btn-primary col-sm-3">
						  <i class="fa fa-plus"></i><br>
						  Service
						</a>
						<a href="#" class="btn btn-primary col-sm-3">
						  <i class="fa fa-cloud"></i><br>
						  Cloud
						</a>
						<a href="#" class="btn btn-primary col-sm-3">
						  <i class="fa fa-cog"></i><br>
						  Tools
						</a>
						<a href="#" class="btn btn-primary col-sm-3">
						  <i class="fa fa-question-sign"></i><br>
						  Help
						</a>
					  </div>
					  
					  <hr>
					  
					  <div class="panel panel-default">
						  <div class="panel-heading"><h4>Reports</h4></div>
						  <div class="panel-body">
							
							<small>Success</small>
							<div class="progress">
							  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%">
								<span class="sr-only">72% Complete</span>
							  </div>
							</div>
							<small>Info</small>
							<div class="progress">
							  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
								<span class="sr-only">20% Complete</span>
							  </div>
							</div>
							<small>Warning</small>
							<div class="progress">
							  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
								<span class="sr-only">60% Complete (warning)</span>
							  </div>
							</div>
							<small>Danger</small>
							<div class="progress">
							  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
								<span class="sr-only">80% Complete</span>
							  </div>
							</div>

						  </div><!--/panel-body-->
					  </div><!--/panel-->
			
					  <hr>              

					  <!--tabs-->
					  <div class="container">
						<div class="col-md-4">
						<ul class="nav nav-tabs" id="myTab">
						  <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
						  <li><a href="#messages" data-toggle="tab">Messages</a></li>
						  <li><a href="#settings" data-toggle="tab">Settings</a></li>
						</ul>
						
						<div class="tab-content">
						  <div class="tab-pane active" id="profile">
							<h4><i class="fa fa-user"></i></h4>
							Lorem profile dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
							<p>Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
							  dolor, in sagittis nisi.</p>
						  </div>
						  <div class="tab-pane" id="messages">
							<h4><i class="fa fa-comment"></i></h4>
							Message ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
							<p>Quisque mauris augu.</p>
						  </div>
						  <div class="tab-pane" id="settings">
							<h4><i class="fa fa-cog"></i></h4>
							Lorem settings dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
							<p>Quisque mauris augue, molestie.</p>
						  </div>
						</div>
						</div>
					  </div>  
					   
					  <!--/tabs-->
					  
					  <hr>
					  
					  <div class="panel panel-default">
						  <div class="panel-heading"><h4>New Requests</h4></div>
						  <div class="panel-body">
							<div class="list-group">
							<a href="#" class="list-group-item active">Hosting virtual mailbox serv..</a>
							<a href="#" class="list-group-item">Dedicated server doesn't..</a>
							<a href="#" class="list-group-item">RHEL 6 install on new..</a>
							</div>
						  </div>
					  </div>
		   
					</div><!--/col-->
					<div class="col-md-6">
						<div class="panel panel-default">
						  <div class="panel-heading"><h4>Annoucements</h4></div>
						  <div class="panel-body">
							
						  <div style="display: none;" class="alert alert-info in">
							<button type="button" class="close" data-dismiss="alert">×</button>
							This is a dismissable alert.. just sayin'.
						  </div>

						  This is a dashboard-style layout that uses Bootstrap 
		3. You can use this template as a starting point to create something 
		more unique.
						  <br><br>
						  Visit the Bootstrap Playground at <a href="http://usebootstrap.com/theme/admin">Bootply</a> to tweak this layout or discover more useful code snippets.
						  </div>
						</div>
					  
						<table class="table table-striped">
							  <thead>
								<tr><th>Visits</th><th>ROI</th><th>Source</th></tr>
							  </thead>
							  <tbody>
								<tr><td>45</td><td>2.45%</td><td>Direct</td></tr>
								<tr><td>289</td><td>56.2%</td><td>Referral</td></tr>
								<tr><td>98</td><td>25%</td><td>Type</td></tr>
								<tr><td>..</td><td>..</td><td>..</td></tr>
								<tr><td>..</td><td>..</td><td>..</td></tr>
							  </tbody>
						</table>
					  
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="panel-title">
								<i class="fa fa-wrench pull-right"></i>
								<h4>Post Request</h4>
								</div>
							</div>
							<div class="panel-body">

							  <form class="form form-vertical">
							   
								<div class="control-group">
								  <label>Name</label>
								  <div class="controls">
								   <input class="form-control" placeholder="Enter Name" type="text">
								  </div>
								</div>      
								
								<div class="control-group">
								  <label>Message</label>
								  <div class="controls">
									<textarea class="form-control"></textarea>
								  </div>
								</div> 
									 
								<div class="control-group">
								  <label>Category</label>
								  <div class="controls">
									 <select class="form-control"><option selected="selected">options</option></select>
								  </div>
								</div>    
								
								<div class="control-group">
									<label></label>
									<div class="controls">
									<button type="submit" class="btn btn-primary">
									  Post
									</button>
									</div>
								</div>   
								
							  </form>
						
						
						  </div><!--/panel content-->
						</div><!--/panel-->
					  
						<div class="panel panel-default">
						  <div class="panel-heading"><div class="panel-title"><h4>Engagement</h4></div></div>
						  <div class="panel-body">	
							<div class="col-xs-4 text-center"><img src="/assets/img/admin/FFF.gif" class="img-circle img-responsive"></div>
							<div class="col-xs-4 text-center"><img src="/assets/img/admin/555.gif" class="img-circle img-responsive"></div>
							<div class="col-xs-4 text-center"><img src="/assets/img/admin/222.gif" class="img-circle img-responsive"></div>
						  </div>
					   </div><!--/panel-->
					  
					</div><!--/col-span-6-->			 
			  </div><!--/row-->
			</div><!--/col-span-9-->
		</div>
		</div>
		<!-- /Main -->
		<div class="modal" id="addWidgetModal">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title">Add Widget</h4>
			  </div>
			  <div class="modal-body">
				<p>Add a widget stuff here..</p>
			  </div>
			  <div class="modal-footer">
				<a href="#" data-dismiss="modal" class="btn">Close</a>
				<a href="#" class="btn btn-primary">Save changes</a>
			  </div>
			</div><!-- /.modal-content -->
		  </div><!-- /.modal-dalog -->
		</div><!-- /.modal -->
        
		<script type="text/javascript" src="/assets/js/jquery.js"></script>
        <script type="text/javascript" src="/assets/js/bootstrap.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            $(".alert").addClass("in").fadeOut(4500);
			$('[data-toggle=collapse]').click(function(){
				$(this).find("i").toggleClass("glyphicon-chevron-right glyphicon-chevron-down");
			});
        });
        </script>
    
</body></html>