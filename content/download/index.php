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
        <div id="top-nav" class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="icon-toggle"></span>
              </button>
              <a class="navbar-brand" href="/admin">Student | Dashboard</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                
                <li class="dropdown">
                  <a class="dropdown-toggle" role="button" data-toggle="dropdown"><i class="fa fa-user"></i> Username <span class="caret"></span></a>
                  <ul id="g-account-menu" class="dropdown-menu" role="menu">
                    <li><a href="/content/profile">Profile</a></li>
                  </ul>
                </li>
                <li><a href="/logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
              </ul>
            </div>
          </div><!-- /container -->
        </div>
        <!-- /Header -->

        <!-- Main -->
        <div class="container">
        <div class="row">
            <!-- start col-3 -->
            <div class="col-md-2">
              <!-- Left column -->
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"> <a href="/home.php"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="/content/timetables"><i class="fa fa-table"></i> Timetables</a></li>
                        <li><a href="/content/classmates"><i class="fa fa-group"></i> Classmates</a></li>
                        <li><a href="/content/results"><i class="fa fa-search"></i> Results</a></li>
                        <li><a href="/content/download"><i class="fa fa-download"></i> Download Notes</a></li>
                    </ul>
            </div>
            <!-- end col-3 -->

            <div class="col-md-10">
                
              <!-- column 2 --> 
              
                <div class="row">  
                    
                    <div class="col-md-12">
                      <div class="table-responsive">          
                      <table class="table table-hover table-bordered">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Lecturer</th>
                            <th>Course unit</th>
                            <th>Year</th>
                            <th>Name</th>
                            <th>Download</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Anna</td>
                            <td>Operating Sys</td>
                            <td>Year 1 Sem 2</td>
                            <td>Intrduction to O.S</td>
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