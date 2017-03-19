<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/core/init.php');
    $section = 'timetables';
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
        <title>SIS | STUDENT</title>
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
                    
                    <div class="col-md-12">
                      <div class="table-responsive">          
                      <table class="table table-hover table-bordered">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Session</th>
                            <th>Download</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Year 1 Sem 1 Time Table</td>
                            <td>Morning</td>
                            <td><span class="fa fa-download"></span></td>
                          </tr>
                        </tbody>
                      </table>
                      </div>
                    </div><!--/col-span-12-->             
              </div><!--/row-->
            </div><!--/col-span-9-->
        </div>
        </div>
     <?php require_once(ROOT_PATH . '/includes/footer-scripts.php'); ?>
    </body>
</html>