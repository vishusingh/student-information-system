<?php
	require_once('../connect.php');
    
    $result = mysql_query("SELECT * FROM student ORDER BY agg_marks DESC");
    echo "<h4>Top students</h4>";
    $count = 0;
    echo "<ul>";
    while($row = mysql_fetch_array($result)){
        $count++;
        if($count > 5){
            break;
        }
        if($count == 5){
            echo "<li id='last'>";    
        } else {
        echo "<li>";            
        }
        echo "<p>";   
        //$extension = getExtension("ajax/img_student/".$row['roll_no']);
        echo "<img src='imgsize.php?w=70&h=70&img=ajax/img_student/" . $row['roll_no'] ."." . $row['imgext'] . "'" . "width =70 height = 70 />";           
        echo $row['name'] . "<br />";
        echo $row['program'] . " - " . $row['branch'] . "<br />";
        echo "Roll no - " . $row['roll_no'] . "<br />";
        echo "Overall - " . $row['agg_marks'] . "%<br />";
        echo "</p>";
        echo "</li>";
    }
    echo "</ul>";   
   
?>
