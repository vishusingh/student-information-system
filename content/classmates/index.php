<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/core/init.php');
    $section = 'classmates';
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
                           
              </div><!--/row-->

            </div><!--/col-md-10-->
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
    
</body></html>