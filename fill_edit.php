<?php
	require_once('./connect.php');
    
    $id = $_GET['id'];
    $agg_marks = (($_POST[first_a] + $_POST[first_b] + $_POST[first_c] + $_POST[first_d] + $_POST[first_e]
                  + $_POST[sec_a] + $_POST[sec_b] + $_POST[sec_c] + $_POST[sec_d] + $_POST[sec_e]
                  + $_POST[third_a] + $_POST[third_b] + $_POST[third_c] + $_POST[third_d] + $_POST[third_e]
                  + $_POST[fourth_a] + $_POST[fourth_b] + $_POST[fourth_c] + $_POST[fourth_d] + $_POST[fourth_e])/2000)*100;
    
    $marks_fyr = "UPDATE firstyr SET roll_no='$_POST[froll_no]', sub_a='$_POST[first_a]', sub_b='$_POST[first_b]', sub_c='$_POST[first_c]', sub_d='$_POST[first_d]', sub_e='$_POST[first_e]', sub_a_int='$_POST[first_a_int]', sub_b_int='$_POST[first_b_int]', sub_c_int='$_POST[first_c_int]', sub_d_int='$_POST[first_d_int]', sub_e_int='$_POST[first_e_int]' WHERE roll_no='$id'";
    if(!mysql_query($marks_fyr, $con)) {
        die("Error inserting in firstyr table: " . mysql_error());
    }                
    
    $marks_syr = "UPDATE secyr SET roll_no='$_POST[froll_no]', sub_a='$_POST[sec_a]', sub_b='$_POST[sec_b]', sub_c='$_POST[sec_c]', sub_d='$_POST[sec_d]', sub_e='$_POST[sec_e]', sub_a_int='$_POST[sec_a_int]', sub_b_int='$_POST[sec_b_int]', sub_c_int='$_POST[sec_c_int]', sub_d_int='$_POST[sec_d_int]', sub_e_int='$_POST[sec_e_int]' WHERE roll_no='$id'";
    if(!mysql_query($marks_syr, $con)) {
        die("Error inserting in secyr table: " . mysql_error());
    }
    
    $marks_tyr = "UPDATE thirdyr SET roll_no='$_POST[froll_no]', sub_a='$_POST[third_a]', sub_b='$_POST[third_b]', sub_c='$_POST[third_c]', sub_d='$_POST[third_d]', sub_e='$_POST[third_e]', sub_a_int='$_POST[third_a_int]', sub_b_int='$_POST[third_b_int]', sub_c_int='$_POST[third_c_int]', sub_d_int='$_POST[third_d_int]', sub_e_int='$_POST[third_e_int]' WHERE roll_no='$id'";
    if(!mysql_query($marks_tyr, $con)) {
        die("Error inserting in secyr table: " . mysql_error());
    }
    
    $marks_frthyr = "UPDATE fourthyr SET roll_no='$_POST[froll_no]', sub_a='$_POST[fourth_a]', sub_b='$_POST[fourth_b]', sub_c='$_POST[fourth_c]', sub_d='$_POST[fourth_d]', sub_e='$_POST[fourth_e]', sub_a_int='$_POST[fourth_a_int]', sub_b_int='$_POST[fourth_b_int]', sub_c_int='$_POST[fourth_c_int]', sub_d_int='$_POST[fourth_d_int]', sub_e_int='$_POST[fourth_e_int]' WHERE roll_no='$id'";
    if(!mysql_query($marks_frthyr, $con)) {
        die("Error inserting in secyr table: " . mysql_error());
    }  
    
    $ext= mysql_fetch_array(mysql_query("SELECT imgext FROM student WHERE roll_no='$id'"));
    $extension = $ext['imgext'];    
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
    
    $stu = "UPDATE student SET name='$_POST[fname]', roll_no='$_POST[froll_no]', program='$_POST[prog]', branch='$_POST[branch]', agg_marks='$agg_marks', phone='$_POST[fphone]', imgext='$extension' WHERE roll_no='$id'";
    if(!mysql_query($stu, $con)) {
        die("Error inserting in student table: " . mysql_error());
    } else {
       // echo "<div class='edit'><img src='images/edited.png' alt='' /><p>&nbsp;Record edited</p></div>";
    }
    header("location:admin.php");                 
?>
