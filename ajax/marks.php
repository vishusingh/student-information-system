<?php
    //echo "load successful!";
		require_once('../connect.php');
        
        $id = $_GET['id'];
        
        $sql1 = mysql_query("SELECT * FROM firstyr WHERE roll_no =" . $id);
        $sql2 = mysql_query("SELECT * FROM secyr WHERE roll_no =" . $id);
        $sql3 = mysql_query("SELECT * FROM thirdyr WHERE roll_no =" . $id);
        $sql4 = mysql_query("SELECT * FROM fourthyr WHERE roll_no =" . $id);
        
        $row1 = mysql_fetch_array($sql1);
        $row2 = mysql_fetch_array($sql2);
        $row3 = mysql_fetch_array($sql3);
        $row4 = mysql_fetch_array($sql4);
        $info = mysql_fetch_array(mysql_query("SELECT * from student WHERE roll_no=" . $id));
        
        echo "<br/><h4>" . $info['name'] . "'s Marks Statement</h4>";
        echo("<br/><h4>First Year:&nbsp;</h4>");
        echo "<table id='table'><tr>
            <th>Subjects</th>
            <th>External Marks</th>
            <th>Internal Marks</th></tr>           
            <tr><td>Sub A</td><td>" . $row1['sub_a'] . "</td><td>" . $row1['sub_a_int'] . "</td></tr>
            <tr><td>Sub B</td><td>" . $row1['sub_b'] . "</td><td>" . $row1['sub_b_int'] . "</td></tr>
            <tr><td>Sub C</td><td>" . $row1['sub_c'] . "</td><td>" . $row1['sub_c_int'] . "</td></tr>
            <tr><td>Sub D</td><td>" . $row1['sub_d'] . "</td><td>" . $row1['sub_d_int'] . "</td></tr>
            <tr><td>Sub E</td><td>" . $row1['sub_e'] . "</td><td>" . $row1['sub_e_int'] . "</td></tr>
            </table>";
            
        echo("<br/><br/><h4>Second Year:&nbsp;</h4>");
        echo "<table id='table'><tr>
            <th>Subjects</th>
            <th>External Marks</th>
            <th>Internal Marks</th></tr>           
            <tr><td>Sub A</td><td>" . $row2['sub_a'] . "</td><td>" . $row2['sub_a_int'] . "</td></tr>
            <tr><td>Sub B</td><td>" . $row2['sub_b'] . "</td><td>" . $row2['sub_b_int'] . "</td></tr>
            <tr><td>Sub C</td><td>" . $row2['sub_c'] . "</td><td>" . $row2['sub_c_int'] . "</td></tr>
            <tr><td>Sub D</td><td>" . $row2['sub_d'] . "</td><td>" . $row2['sub_d_int'] . "</td></tr>
            <tr><td>Sub E</td><td>" . $row2['sub_e'] . "</td><td>" . $row2['sub_e_int'] . "</td></tr>
            </table>";
            
        echo("<br/><br/><h4>Third Year:&nbsp;</h4>");
        echo "<table id='table'><tr>
            <th>Subjects</th>
            <th>External Marks</th>
            <th>Internal Marks</th></tr>           
            <tr><td>Sub A</td><td>" . $row3['sub_a'] . "</td><td>" . $row3['sub_a_int'] . "</td></tr>
            <tr><td>Sub B</td><td>" . $row3['sub_b'] . "</td><td>" . $row3['sub_b_int'] . "</td></tr>
            <tr><td>Sub C</td><td>" . $row3['sub_c'] . "</td><td>" . $row3['sub_c_int'] . "</td></tr>
            <tr><td>Sub D</td><td>" . $row3['sub_d'] . "</td><td>" . $row3['sub_d_int'] . "</td></tr>
            <tr><td>Sub E</td><td>" . $row3['sub_e'] . "</td><td>" . $row3['sub_e_int'] . "</td></tr>
            </table>";
            
        echo("<br/><br/><h4>Fourth Year:&nbsp;</h4>");
        echo "<table id='table'><tr>
            <th>Subjects</th>
            <th>External Marks</th>
            <th>Internal Marks</th></tr>           
            <tr><td>Sub A</td><td>" . $row4['sub_a'] . "</td><td>" . $row4['sub_a_int'] . "</td></tr>
            <tr><td>Sub B</td><td>" . $row4['sub_b'] . "</td><td>" . $row4['sub_b_int'] . "</td></tr>
            <tr><td>Sub C</td><td>" . $row4['sub_c'] . "</td><td>" . $row4['sub_c_int'] . "</td></tr>
            <tr><td>Sub D</td><td>" . $row4['sub_d'] . "</td><td>" . $row4['sub_d_int'] . "</td></tr>
            <tr><td>Sub E</td><td>" . $row4['sub_e'] . "</td><td>" . $row4['sub_e_int'] . "</td></tr>
            </table>";
        
        
    
?>
