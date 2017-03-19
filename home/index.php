<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/core/init.php';
    $section = 'home';
    if(!User::isLoggedIn())       
    {     
        Redirect::to('/login.php');        
    }           
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>SIS | STUDENT</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
        
        <!-- Header -->
        <?php require_once ROOT_PATH . '/includes/header.php'; ?>
        <!-- /Header -->

        <!-- Main -->
        <div class="container">
        <div class="row">
            <!-- start col-2 -->
            <div class="col-md-2">
                <!-- side-nav-start -->
                <?php require_once(ROOT_PATH . '/includes/side-nav.php'); ?>
                <!-- side-nav-end -->
            </div>
            <!-- end col-2 -->

            <div class="col-md-10">
                
              <!-- column 2 --> 
              
                <div class="row">
                   
                    
                  
                    <!-- center left--> 
                    <div class="col-md-6">
                    
                      <div class="panel panel-default">
                          <div class="panel-heading"><h4>Course Units</h4></div>
                          <div class="panel-body">
                            
                            <small>Operating Systems</small>
                            <div class="progress">
                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%">
                                <span class="sr-only">72% Complete</span>
                              </div>
                            </div>
                            <small>C programming</small>
                            <div class="progress">
                              <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                <span class="sr-only">20% Complete</span>
                              </div>
                            </div>
                            <small>Web Design</small>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                <span class="sr-only">60% Complete (warning)</span>
                              </div>
                            </div>
                            <small>Repair and Maintanence</small>
                            <div class="progress">
                              <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="sr-only">80% Complete</span>
                              </div>
                            </div>

                          </div><!--/panel-body-->
                      </div><!--/panel-->
                      
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
                          <div class="panel-heading"><h4>Announcements</h4></div>
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
                                <tr><th colspan="3">Top Five Students</th></tr>
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
                                <h4>Post Suggestion Or Complaint</h4>
                                </div>
                            </div>
                            <div class="panel-body">

                              <form class="form form-vertical">
                               
                                <div class="control-group">
                                  <label>Message</label>
                                  <div class="controls">
                                    <textarea class="form-control"></textarea>
                                  </div>
                                </div> 
                                     
                                <div class="control-group">
                                  <label>Category</label>
                                  <div class="controls">
                                     <select class="form-control">
                                        <option></option>
                                        <option>Lecturer</option>
                                        <option>Suggestion</option>
                                        <option>Other</option>
                                     </select>
                                  </div>
                                </div>    
                                
                                <div class="control-group">
                                    <label></label>
                                    <div class="controls">
                                    <button type="submit" class="btn btn-primary">
                                      send
                                    </button>
                                    </div>
                                </div>   
                                
                              </form>
                        
                        
                          </div><!--/panel content-->
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