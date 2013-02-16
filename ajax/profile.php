<?php
	require_once('../connect.php');
	
	$id = $_GET['id']; //getting the param
			
	$row = mysql_fetch_array(mysql_query("SELECT * FROM student WHERE roll_no =" . $id));
	//echo $id;
	echo "<div class='profile'><h4>Student Profile</h4><h5>Name: </h5><p>" . $row['name'] . "</p>";
	echo "<h5>Roll no: </h5><p>" . $row['roll_no'] . "</p>";
	echo "<h5>Program: </h5><p>" . $row['program'] . "</p>";
	echo "<h5>Branch: </h5><p>" . $row['branch'] . "</p>";       
	echo "<h5>Agg. marks: </h5><p>" . $row['agg_marks'] . "</p>";
	echo "<h5>Phone no. </h5><p>" . $row['phone'] ."</p>";
	echo "<img src='imgsize.php?w=100&h=100&img=ajax/img_student/" . $row['roll_no'] ."." . $row['imgext'] . "'" . "width =100 height = 100 /></div>";
?>
