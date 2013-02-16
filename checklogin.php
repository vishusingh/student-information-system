<?php    
    ob_start();
	require_once('./connect.php');
    
    $username = $_POST['username'];
    $pass = $_POST['password'];
    
    $username = stripslashes($username);
    $pass = stripslashes($pass);
    $username = mysql_real_escape_string($username);
    $pass = mysql_real_escape_string($pass);
    
    $pass_enc = md5($pass);
    $sql = "SELECT * FROM members WHERE username='$username' AND password='$pass_enc'";
    $result = mysql_query($sql);
    
    $count = mysql_num_rows($result);
    
    if($count==1) {
        session_register("username");
        session_register("password");
        //session_register("edit");
        $_SESSION['edit'] = 1; //for edit feature
        header("location:index.php");
    } else {
        echo "Wrong username or password!";
    }  
    ob_end_flush();
    /*
    //THIS WAS TO CREATE THE FIRST ADMIN ACCOUNT - CAN BE USED TO CREATE MORE - Vishu 
    $pass = "vishu";
    $enc_pass = md5($pass);
    
    $sql = "INSERT INTO members VALUES(1, 'admin', '$enc_pass')";
    
    if(!mysql_query($sql)) {
        echo "Error: " . mysql_error();
    }
    */
?>
