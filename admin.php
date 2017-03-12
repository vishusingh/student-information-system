<?php
    session_start();
    if(!session_is_registered(username)) {
        header("location:login.php");
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Information System</title>

<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/960.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />

<script type="text/javascript" src="ajax/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="ajax/jquery.cycle.all.min.js"></script>
<script type="text/javascript" src="ajax/main.js"></script>
 
</head>

<body>
<div id="dialog" title="Basic dialog">
	   <p>This is the default dialog which is useful for displaying information. 'x' icon.</p>
    </div>
<div id="container" class="container_16">
    <div id="header" class="grid_16">
    
    	<a href="index.php"><h3>Krishna Engineering College</h3></a>
        <div id="top_menu">     	
            <a id="ad_logout" href="logout.php">Logout</a>
        </div><!-- end top_menu -->
    </div><!-- end header -->
    
    <div id="sub_header" class="grid_16">
    	<h4 id="logo">Student Information System - Admin</h4>
        <form id="search" method="POST">
        	<ul>
                <li><input type="text" id="search_box" name="search" value="Search.." /></li>
                <li>
                    <input type="image" id="search_btn" src="images/btn_search_name.png" />
                        <ul id="submenu">
                            <li><a href="#" id="s_name">By Name</a></li>
                            <li><a href="#" id="s_roll">By Roll. no.</a></li>
                        </ul>
                </li>
                <li><input type="image" src="images/btn_search.png" id="go" alt="search" title="search" /></li>
            </ul>
        </form><!-- end search -->
    </div><!-- end sub header -->
    
    <div class="grid_5 alpha">
        <img src="images/left_col_top.png" />
        
        <div id="left_col" class="grid_5 alpha">
        <h4>Top 5 students</h4>
        <ul>
            <li>
                
                
                <p> <img src="images/stu.jpg" width="70" height="70" />
                    John Smith <br />
                    B.Tech - CS <br />
                    Roll no - 0616110058 <br />
                    Overall - 95% <br />
                </p>
            </li>
            
            <li>
                <p> <img src="images/stu.jpg" width="70" height="70" />
                    John Smith <br />
                    B.Tech - CS <br />
                    Roll no - 0616110058 <br />
                    Overall - 95% <br />
                </p>
            </li>
            
            <li>
                <p> <img src="images/stu.jpg" width="70" height="70" />
                    John Smith <br />
                    B.Tech - CS <br />
                    Roll no - 0616110058 <br />
                    Overall - 95% <br />
                </p>
            </li>
            
            <li>
                <p> <img src="images/stu.jpg" width="70" height="70" />
                    John Smith <br />
                    B.Tech - CS <br />
                    Roll no - 0616110058 <br />
                    Overall - 95% <br />
                </p>
            </li>
            
            <li id="last">
                <p> <img src="images/stu.jpg" width="70" height="70" />
                    John Smith <br />
                    B.Tech - CS <br />
                    Roll no - 0616110058 <br />
                    Overall - 95% <br />
                </p>
            </li>
            
        </ul>
        </div><!-- end left col -->
        <img src="images/left_col_bottom.png" />
                
    </div><!-- end wrap -->
    
    <div class="grid_11 omega">
            <img src="images/main_top.png" />
            <div id="right_col" >
                <h4>Enter new student data </h4>
                <div id="content">
                    
                    <div id="form">
                    <form enctype="multipart/form-data" method="post" action="fill_data.php" id="marks_form">
                        <div><label class="leflabel">Name:</label><input type="text" size="15" class="finput" name="fname" id="fname"/><span id="nameError"></span></div>
                        <div><label class="leflabel">Roll no:</label><input type="text" size="15" class="finput" name="froll_no" id="froll_no" /><span id="rollError"></span></div>
                        <div><label class="leflabel">Phone:</label><input type="text" size="15" class="finput" name="fphone" id="fphone" /><span id="phoneError"></span></div>
                                                
                        <div>
                            <label class="leflabel">Photo:</label><input name="image" type="file" />
                       </div>
                        
                        <div>
                            <label class="leflabel">Program:</label>
                            <input type="radio" name="prog" checked="checked" value="B.Tech." /><label>B.Tech.</label>
                            <input type="radio" name="prog" value="MCA" /><label>MCA</label>           
                        </div>
                        <div>
                            <label class="leflabel">Branch:</label>
            
                            <input type="radio" name="branch" value="N/A" /><label>N/A</label>
                            <input type="radio" checked="checked" name="branch" value="CS" /><label>CS</label>
                            <input type="radio" name="branch" value="EC" /><label>EC</label>
                            <input type="radio" name="branch" value="IT" /><label>IT</label>
                            <input type="radio" name="branch" value="ME" /><label>ME</label>
                            <input type="radio" name="branch" value="EN" /><label>EN</label>
                                              
                        </div>
                        
                        <div><label class="leflabel">Marks:</label>
                        
                        <div class="grid_4">   
                        <img src="images/marks-top.jpg" width="240" height="8" />                       
                            <div id="marks"><!-- marks -->
                                <a href="#" id="next"><img src="images/mark_rarr.jpg"/></a>
                                <a href="#" id="prev"><img src="images/mark_larr.jpg"/></a>
                                <div id="wrap">
  
                                <div class="slideshow">
                                <div id="slide1">
                                    <h4>First Year</h4><br /><br />
                                    <label>Sub A:</label><input type="text" name="first_a" size="10" /><br />
                                    <label>Sub B:</label><input type="text" name="first_b" size="10" /><br />
                                    <label>Sub C:</label><input type="text" name="first_c" size="10" /><br />
                                    <label>Sub D:</label><input type="text" name="first_d" size="10" /><br />
                                    <label>Sub E:</label><input type="text" name="first_e" size="10" /><br />                                    
                                </div><!-- end slide1 -->
                                
                                <div id="slide1_b">
                                    <h4>First Year</h4>
                                    <h4>(Internal)</h4><br />
                                    <label>Sub A:</label><input type="text" name="first_a_int" size="10" /><br />
                                    <label>Sub B:</label><input type="text" name="first_b_int" size="10" /><br />
                                    <label>Sub C:</label><input type="text" name="first_c_int" size="10" /><br />
                                    <label>Sub D:</label><input type="text" name="first_d_int" size="10" /><br />
                                    <label>Sub E:</label><input type="text" name="first_e_int" size="10" /><br />                                    
                                </div><!-- end slide1 -->
                                
                                <div id="slide2">
                                    <h4>Second Year</h4><br /><br />
                                    <label>Sub A:</label><input type="text" name="sec_a" size="10" /><br />
                                    <label>Sub B:</label><input type="text" name="sec_b" size="10" /><br />
                                    <label>Sub C:</label><input type="text" name="sec_c" size="10" /><br />
                                    <label>Sub D:</label><input type="text" name="sec_d" size="10" /><br />
                                    <label>Sub E:</label><input type="text" name="sec_e" size="10" /><br />                                    
                                </div><!-- end slide2 -->
                                
                                <div id="slide2_b">
                                    <h4>Second Year</h4>
                                    <h4>(Internal)</h4><br />
                                    <label>Sub A:</label><input type="text" name="sec_a_int" size="10" /><br />
                                    <label>Sub B:</label><input type="text" name="sec_b_int" size="10" /><br />
                                    <label>Sub C:</label><input type="text" name="sec_c_int" size="10" /><br />
                                    <label>Sub D:</label><input type="text" name="sec_d_int" size="10" /><br />
                                    <label>Sub E:</label><input type="text" name="sec_e_int" size="10" /><br />                                    
                                </div><!-- end slide2 -->
                                
                                <div id="slide3">
                                    <h4>Third Year</h4><br /><br />
                                    <label>Sub A:</label><input type="text" name="third_a" size="10" /><br />
                                    <label>Sub B:</label><input type="text" name="third_b" size="10" /><br />
                                    <label>Sub C:</label><input type="text" name="third_c" size="10" /><br />
                                    <label>Sub D:</label><input type="text" name="third_d" size="10" /><br />
                                    <label>Sub E:</label><input type="text" name="third_e" size="10" /><br />
                                </div><!-- end slide3 -->
                                
                                <div id="slide3_b">
                                    <h4>Third Year</h4>
                                    <h4>(Internal)</h4><br />
                                    <label>Sub A:</label><input type="text" name="third_a_int" size="10" /><br />
                                    <label>Sub B:</label><input type="text" name="third_b_int" size="10" /><br />
                                    <label>Sub C:</label><input type="text" name="third_c_int" size="10" /><br />
                                    <label>Sub D:</label><input type="text" name="third_d_int" size="10" /><br />
                                    <label>Sub E:</label><input type="text" name="third_e_int" size="10" /><br />
                                </div><!-- end slide3 -->
                                
                                <div id="slide4">
                                    <h4>Fourth Year</h4><br /><br />
                                    <label>Sub A:</label><input type="text" name="fourth_a" size="10" /><br />
                                    <label>Sub B:</label><input type="text" name="fourth_b" size="10" /><br />
                                    <label>Sub C:</label><input type="text" name="fourth_c" size="10" /><br />
                                    <label>Sub D:</label><input type="text" name="fourth_d" size="10" /><br />
                                    <label>Sub E:</label><input type="text" name="fourth_e" size="10" /><br />
                                </div><!-- end slide4 -->
                                
                                <div id="slide4">
                                    <h4>Fourth Year</h4>
                                    <h4>(Internal)</h4><br />
                                    <label>Sub A:</label><input type="text" name="fourth_a_int" size="10" /><br />
                                    <label>Sub B:</label><input type="text" name="fourth_b_int" size="10" /><br />
                                    <label>Sub C:</label><input type="text" name="fourth_c_int" size="10" /><br />
                                    <label>Sub D:</label><input type="text" name="fourth_d_int" size="10" /><br />
                                    <label>Sub E:</label><input type="text" name="fourth_e_int" size="10" /><br />
                                </div><!-- end slide4 -->
                                </div><!-- end slideshow -->
                                
                                </div><!-- end wrap -->                                                                
                                <img src="images/marks-bottom.jpg" width="240" height="8" />
                                
                            </div><!-- end marks -->                            
                                
                        </div><!-- end container -->
                       </div><!-- end marks box -->
                       
                       <div><input type="submit" name="submit" value="Submit" id="marks_inp" /></div>
                    </form>
                    </div><!-- end form -->
                     
                    <div class="grid_11"><!-- orig content -->
                    <h4>View complete student list (By Branch)</h4>              
                    <ul>
                        <li><a href="#" class="load-cs branch">CS</a></li>
                        <li><a href="#" class="load-ec branch">EC</a></li>
                        <li><a href="#" class="load-it branch">&nbsp;IT</a></li>
                        <li><a href="#" class="load-me branch">ME</a></li>
                        <li><a href="#" class="load-en branch">EN</a></li>
                    </ul>   
                    </div>                
                
                </div><!-- end content -->
                            
            </div><!-- end right col -->
        <img src="images/main_bottom.png" />            
    </div><!-- end wrap -->


    <div class="grid_16 footer">
        <img src="images/footer-top.png" />
        <div id="footer">
            <p>&copy; 2010 Vishu Singh<br />KEC</p>
        </div><!-- end footer -->
        <img src="images/footer-bottom.png" />
    </div><!-- end footer wrap -->

    
</div><!-- end container -->


</body>
</html>
