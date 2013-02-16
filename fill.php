<?php
	require_once('./connect.php');
    
    if(!isset($_POST[froll_no])){die();}
    
    $agg_marks = (($_POST[first_a] + $_POST[first_b] + $_POST[first_c] + $_POST[first_d] + $_POST[first_e]
                  + $_POST[sec_a] + $_POST[sec_b] + $_POST[sec_c] + $_POST[sec_d] + $_POST[sec_e]
                  + $_POST[third_a] + $_POST[third_b] + $_POST[third_c] + $_POST[third_d] + $_POST[third_e]
                  + $_POST[fourth_a] + $_POST[fourth_b] + $_POST[fourth_c] + $_POST[fourth_d] + $_POST[fourth_e])/2000)*100;
                  

    $marks_fyr = "INSERT INTO firstyr (roll_no, sub_a, sub_b, sub_c, sub_d, sub_e) VALUES ('$_POST[froll_no]', '$_POST[first_a]', '$_POST[first_b]', '$_POST[first_c]', '$_POST[first_d]', '$_POST[first_e]')";    
    if(!mysql_query($marks_fyr, $con)) {
        die("Error inserting in marks table: " . mysql_error());
    }   
    
    $marks_syr = "INSERT INTO secyr (roll_no, sub_a, sub_b, sub_c, sub_d, sub_e) VALUES ('$_POST[froll_no]', '$_POST[sec_a]', '$_POST[sec_b]', '$_POST[sec_c]', '$_POST[sec_d]', '$_POST[sec_e]')";    
    if(!mysql_query($marks_syr, $con)) {
        die("Error inserting in marks table: " . mysql_error());
    }  
    
    $marks_tyr = "INSERT INTO thirdyr (roll_no, sub_a, sub_b, sub_c, sub_d, sub_e) VALUES ('$_POST[froll_no]', '$_POST[third_a]', '$_POST[third_b]', '$_POST[third_c]', '$_POST[third_d]', '$_POST[third_e]')";    
    if(!mysql_query($marks_tyr, $con)) {
        die("Error inserting in marks table: " . mysql_error());
    } 
    
    $marks_frthyr = "INSERT INTO fourthyr (roll_no, sub_a, sub_b, sub_c, sub_d, sub_e) VALUES ('$_POST[froll_no]', '$_POST[fourth_a]', '$_POST[fourth_b]', '$_POST[fourth_c]', '$_POST[fourth_d]', '$_POST[fourth_e]')";    
    if(!mysql_query($marks_frthyr, $con)) {
        die("Error inserting in marks table: " . mysql_error());
    } 
    
    if(isset($_FILES['image'])) {
         
         function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
         }
 
        if(preg_match('/[.](jpg)|(gif)|(png)$/', $_FILES['image']['name'])) {
            $filename = $_POST[froll_no];
            $extension = getExtension($_FILES['image']['name']);
            $source = $_FILES['image']['tmp_name'];
            $target = 'ajax/img_student/' . $filename . '.' . $extension;
            move_uploaded_file($source, $target);
            //echo "<p>done!</p>";
        } else {
            //echo "not!";
        }
    }
    //$extension = getExtension($_FILES['image']['name']);
    //echo $extension;
    $stu = "INSERT INTO student (name, roll_no, program, branch, agg_marks, phone, imgext) VALUES ('$_POST[fname]', '$_POST[froll_no]', '$_POST[prog]', '$_POST[branch]', '$agg_marks', '$_POST[fphone]', '$extension')";
    if(!mysql_query($stu, $con)) {
        die("Error inserting in student table: " . mysql_error());
    }   
    header("location:admin.php");
?>
