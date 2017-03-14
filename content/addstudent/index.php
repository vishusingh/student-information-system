<?php
    // require_once $_SERVER['DOCUMENT_ROOT'] . '/core/init.php';      
    // if(!User::isLoggedIn())       
    // {     
    //     Redirect::to('login.php');        
    // }           
?>
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
		<?php include '../../includes/admin/header.php'; ?>
		<!-- /Header -->

		<!-- Main -->
		<div class="container">
		<div class="row">
			<!-- start col-3 -->
			<div class="col-md-2">
			  <!-- Left column -->		 
			  
					<ul class="nav nav-pills nav-stacked">
						<li><a href="/admin"><i class="fa fa-home"></i> Home</a></li>
						<li  class="active"><a href="/content/addstudent"><i class="fa fa-user"></i> Add New Student</a></li>
						<li><a href="/content/timetables"><i class="fa fa-table"></i> Timetables</a></li>
						<li><a href="/content/results"><i class="fa fa-search"></i> Results</a></li>
						<li><a href="/content/marks"><i class="fa fa-percent"></i> Feed In Marks</a></li>
						<li><a href="/content/students"><i class="fa fa-group"></i> Students</a></li>
						<li><a href="/content/notes"><i class="fa fa-list-alt"></i> Notes</a></li>
						<li><a href="/content/upload"><i class="fa fa-upload"></i> Upload Notes</a></li>
						<li><a href="/content/download"><i class="fa fa-download"></i> Download Notes</a></li>
					</ul>
			</div>
			<!-- end col-3 -->

			<div class="col-md-10">
				
			  <!-- column 2 -->	
				<div class="row">
				   
					
				  
					<!-- center left-->	
					<div class="col-md-6">
						<form action="" method="POST" role="form">										
							<div class="form-group">
								<label for="">First Name</label>
								<input type="text" class="form-control" id="" placeholder="First Name">
							</div>
							<div class="form-group">
								<label for="">Last Name</label>
								<input type="text" class="form-control" id="" placeholder="Last Name">
							</div>
							<div class="form-group">
								<label for="">Session</label>
								<input type="text" class="form-control" id="" placeholder="Input field">
							</div>
							<div class="form-group">
								<label for="">Date</label>
								<input type="Date" class="form-control" id="" value="<?php  date_default_timezone_set('Africa/Nairobi'); echo date('Y-m-d H:i:s'); ?>" disabled>
							</div>
							<div class="form-group">
								<label for="">Course</label>
								<select class="form-control">
									<option selected="selected"></option>
									<option>IT</option>
									<option>SE</option>
									<option>CS</option>
								</select>
							</div>

							<button type="submit" class="btn btn-primary">Submit</button>
						</form>

					</div><!--/col-->
					<div class="col-md-6">
						
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