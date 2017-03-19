<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/core/init.php');
    $section = 'results';
    if(!User::isLoggedIn())       
    {   
        Redirect::to('/login');        
    }           
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>SIS | Results</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
        
        <!-- Header -->
            <?php require_once(ROOT_PATH . '/includes/header.php'); ?>
        <!-- /Header -->

        <!-- Main -->
        <div class="container">
        <div class="row">
            <!-- start col-2 -->
            <div class="col-md-2">
                <?php require_once(ROOT_PATH . '/includes/side-nav.php'); ?>
            </div>
            <!-- end col-2 -->

            <div class="col-md-10">
            
                <div class="row">  
                    
                    <div class="col-md-6">
                 
                      <div class="panel panel-default">
                          <div class="panel-heading"><h4>First Year</h4></div>
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
                          <div class="panel-heading"><h4>Second Year</h4></div>
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

                    </div><!--/col-span-6--> 

                    <div class="col-md-6">

                      <div class="panel panel-default">
                          <div class="panel-heading"><h4>Third Year</h4></div>
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
                          <div class="panel-heading"><h4>Fourth Year</h4></div>
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

                    </div><!--/col-span6-->

              </div><!--/row-->
            </div><!--/col-span-9-->
        </div>
        </div>
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
    
</body>
</html>