<?php 
        $con = mysql_connect("localhost", "vishu_admin", "");
        //connecting to server
        if(!$con) {
            die("Could not connect: " . mysql_error());
        }
        //selecting the db
        if(!mysql_select_db("vishu_stusystem", $con)) {
            echo("Error" . mysql_error());
        }
?>
