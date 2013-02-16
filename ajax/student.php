<?php   
        session_start();
		require_once('../connect.php');
        /*ob_start();
        $result = mysql_query("SELECT * FROM student WHERE roll_no = '0616110058'");
        $row = mysql_fetch_array($result);
        header ("Content-type: image/jpg");
        echo ($row['image']);
        ob_end_flush();
        */
        $n = $_GET['n']; //getting the query id - vishu
        switch ($n)
        {
            case 1:
            $result = mysql_query("SELECT * FROM student WHERE branch = 'CS'");
            break;
            case 2:
            $result = mysql_query("SELECT * FROM student WHERE branch = 'EC'");
            break;
            case 3:
            $result = mysql_query("SELECT * FROM student WHERE branch = 'IT'");
            break;
            case 4:
            $result = mysql_query("SELECT * FROM student WHERE branch = 'ME'");
            break;
            case 5:
            $result = mysql_query("SELECT * FROM student WHERE branch = 'EN'");
            break;
        }
        
        echo "<table id='table'><tr>
        <th>Name</th>
        <th>Roll. no.</th>
        <th>Program</th>
        <th>Branch</th>
        <th>Agg. Marks</th>
        <th>Phone no.</th>";
        if(isset($_SESSION['edit'])){
        echo "<th>Edit</th><th>Delete</th></tr>";            
        }
        $varColor = 1;
        while ($row = mysql_fetch_array($result)) {
            if($varColor == 1) {
            //$imagebytes = $row['image'];
            echo "<tr>";
            echo "<td>" . "<a href='#' id='" . $row['roll_no'] . "' class='profile-load'>" . $row['name'] . "</a>" . "</td>";
            echo "<td>" . $row['roll_no'] . "</td>";
            echo "<td>" . $row['program'] . "</td>";
            echo "<td>" . $row['branch'] . "</td>";
            echo "<td>" . "<a href='#' id ='" . $row['roll_no'] . "' class='click-me'>" . $row['agg_marks'] . "</a>" . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            if(isset($_SESSION['edit'])){
                echo "<td><a href='#' id='" . $row['roll_no'] . "' class='edit-me'><img src='images/edit.png' alt='edit' /></a></td>";
                echo "<td><a href='#' id='" . $row['roll_no'] . "' class='del-me'><img src='images/del.png' alt='edit' /></a></td>";
            }
            //echo "<td>";
            //header('Content-Type:image/jpeg');
            //print $imagebytes;
            //echo "</td>";
            echo "</tr>";
            $varColor = 0; //to alter row colors - vishu
            } else {
            //$imagebytes = $row['image'];
            echo "<tr class='alt'>";
            echo "<td>" . "<a href='#' id='" . $row['roll_no'] . "' class='profile-load'>" . $row['name'] . "</a>" . "</td>";
            echo "<td>" . $row['roll_no'] . "</td>";
            echo "<td>" . $row['program'] . "</td>";
            echo "<td>" . $row['branch'] . "</td>";
            echo "<td>" . "<a href='#' id ='" . $row['roll_no'] . "' class='click-me'>" . $row['agg_marks'] . "</a>" . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            if(isset($_SESSION['edit'])){
                echo "<td><a href='#' id='" . $row['roll_no'] . "' class='edit-me'><img src='images/edit.png' alt='edit' /></a></td>";
                echo "<td><a href='#' id='" . $row['roll_no'] . "' class='del-me'><img src='images/del.png' alt='edit' /></a></td>";
            }
            //echo "<td>" . "<img src='" . $imagebytes . "' />" . "</td>";
            echo "</tr>";
            $varColor = 1;
            }          
        }
        echo "</table></br>";
        //ob_end_flush();
        mysql_close($con);       
?><script type="text/javascript" src="ajax/main.js"></script>
